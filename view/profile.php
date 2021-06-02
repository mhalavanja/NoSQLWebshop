<?php require_once __SITE_PATH . '/view/_header.php';
require_once __SITE_PATH . '/util/userList.php';
if (!isset($user)) return;
$readOnly = $user->getId() !== $_SESSION["user"]->getId()
?>
    <br>
    <form method="post" action="<?php echo __SITE_URL . '/index.php?rt=users/processProfile' ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" <?php if ($readOnly) echo "readonly" ?> id="name" type="text" name="name"
                   value="<?php echo $user->getName() ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input class="form-control" <?php if ($readOnly) echo "readonly" ?> id="lastname" type="text"
                   name="lastname"
                   value="<?php echo $user->getLastName() ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" <?php if ($readOnly) echo "readonly" ?> id="username" type="text"
                   name="username"
                   value="<?php echo $user->getUsername() ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" <?php if ($readOnly) echo "readonly" ?> id="email" type="email" name="email"
                   value="<?php echo $user->getEmail() ?>">
        </div>
        <br>
        <button <?php if ($readOnly) echo "disabled" ?> class="btn btn-primary" type="submit">
            Submit
        </button>
    </form>
    <br>
    Recommended users:
<?php if ($readOnly) echo getUserList($user->getRecommendations(), false);
else echo getUserList($user->getRecommendations(), true); ?>
    <br>
<?php if (!$readOnly) { ?>
    <form method="post" action="<?php echo __SITE_URL . '/index.php?rt=users/addRecommendation' ?>">
        Type in a username of a friend you want to recommend.
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" id="username" type="text" name="username">
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <br>
<?php }
require_once __SITE_PATH . '/view/_footer.php'; ?>