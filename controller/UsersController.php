<?php

require __SITE_PATH . "/service/UserService.php";
require __SITE_PATH . "/util/userProfitUtil.php";

class usersController extends BaseController
{

    function index()
    {
        $user = $_SESSION["user"];
        $this->registry->template->user = $user;
        $user->setRecommendations(UserService::getRecommendationsForUser($user->getUsername()));
        $user->setIncome(getUserIncome());
        $user->setOutcome(getUserOutcome());
        $this->registry->template->show("profile");
    }

    function processProfile()
    {
        $user = $_SESSION["user"];
        $oldusername = $user->getUsername();
        $user->setName($_POST["name"]);
        $user->setLastname($_POST["lastname"]);
        $user->setUsername($_POST["username"]);
        $user->setEmail($_POST["email"]);
        $user->setFavoriteCategory($_POST["category"]);
        UserService::updateUser($user, $oldusername);
        header('Location: ' . __SITE_URL . '/index.php?rt=users/index');
    }

    function addRecommendation()
    {
        UserService::saveRecommendationForUser($_POST["username"], $_SESSION["user"]);
        header('Location: ' . __SITE_URL . '/index.php?rt=users/index');
    }


    function users()
    {
        $usernames = isset($_GET["username"]) ? UserService::getRecommendationsForUser($_GET["username"]) : UserService::getAllUsernames();
        $this->registry->template->usernames = $usernames;
        $this->registry->template->show("users");
    }
}