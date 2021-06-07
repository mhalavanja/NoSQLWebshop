<?php
require_once __SITE_PATH . '/view/_header.php';
require_once __SITE_PATH . '/util/userList.php';
if(isset($_GET['username'])){
    echo "<h1>Preporučeni korisnici od ".$_GET['username']."</h1>";
} else{
    echo "<h1>Korisnici</h1>";
}
if (isset($usernames)) echo getUserList($usernames, true);
require_once __SITE_PATH . '/view/_footer.php';
