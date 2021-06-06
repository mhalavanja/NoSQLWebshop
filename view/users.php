<?php
require_once __SITE_PATH . '/view/_header.php';
require_once __SITE_PATH . '/util/userList.php';
echo "<h1>Korisnici</h1>";
if (isset($users)) echo getUserList($users, true);
require_once __SITE_PATH . '/view/_footer.php';
