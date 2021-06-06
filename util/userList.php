<?php

function getUserList($users, $links)
{
    $html = "<ul>";

    foreach ($users as $user) {
        if($links)
        {
            $href = __SITE_URL . "/index.php?rt=users/users&userId=" . $user->getId();
            $html .= "<li><a href=" . $href . ">" . $user->getUsername() . "</a></li>";
        }
        else{
            $html .= "<li>" . $user->getUsername() . "</li>";
        }
    }
    $html .= "</ul>";
    return $html;
}