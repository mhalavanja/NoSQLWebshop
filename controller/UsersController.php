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
        $user = User::find($_SESSION["user"]->getId());
        $user->setName($_POST["name"]);
        $user->setLastname($_POST["lastname"]);
        $user->setUsername($_POST["username"]);
        $user->setEmail($_POST["email"]);
        User::save($user);
        header('Location: ' . __SITE_URL . '/index.php?rt=users');
    }

    function addRecommendation()
    {
        UserService::saveRecommendationForUser($_POST["recommendation"], $_SESSION["user"]->getId());
        header('Location: ' . __SITE_URL . '/index.php?rt=users');
    }


    function users()
    {
        $this->registry->template->users = UserService::getAllUsers();
        $this->registry->template->show("users");
    }
}