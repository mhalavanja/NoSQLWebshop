<?php

function getUserList($users, $links=false)
{
    $html = "<ul >";

    foreach ($users as $username) {
        if($links)
        {
            $href = __SITE_URL . "/index.php?rt=users/users&username=" . $username;
            $html .= "<li><a href=" . $href . ">" . $username . "</a></li>";
        }
        else{
            $html .= "<li>" . $username . "</li>";
        }
    }
    $html .= "</ul>";
    return $html;
}