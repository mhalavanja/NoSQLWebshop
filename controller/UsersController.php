<?php

require __SITE_PATH . "/service/UserService.php";

class usersController extends BaseController
{

    function index()
    {
        $user = $_SESSION["user"];
        $this->registry->template->user = $user;
        $this->registry->template->show("profile");
    }

    function processProfile()
    {
        $user = $_SESSION["user"];
        $user->setName($_POST["name"]);
        $user->setLastname($_POST["lastname"]);
        $user->setUsername($_POST["username"]);
        $user->setEmail($_POST["email"]);
        UserService::updateUser($user);
        header('Location: ' . __SITE_URL . '/index.php?rt=users');
    }

    function addRecommendation()
    {
        UserService::saveRecommendationForUser($_POST["recommendation"], $_SESSION["user"]->getId());
        header('Location: ' . __SITE_URL . '/index.php?rt=users');
    }


    function users()
    {
        $users = isset($_GET["userId"]) ? UserService::getRecommendationsForUser($_GET["userId"]) : UserService::getAllUsers();
        $this->registry->template->users = $users;
        $this->registry->template->show("users");
    }
}