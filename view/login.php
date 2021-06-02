<?php require_once __SITE_PATH . '/view/_header.php'; ?>

    <p <?php if (!isset($loginError) || !$loginError) echo "hidden" ?>> Wrong username or password!</p>
    <p <?php if (!isset($registrationError) || !$registrationError) echo "hidden" ?>> Enter all the fields!</p>
    <p <?php if (!isset($hasRegistered) || $hasRegistered) echo "hidden" ?>> You have to finish the registration
        first!</p>
    <form method="post" action="<?php echo __SITE_URL . '/index.php?rt=login/processLoginForm' ?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" id="username" name="username" type="text">
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" id="password" name="password" type="password">
        </div>
        <br>
        <div class="float-end">
            <input class="btn btn-primary" type="submit" name="login" value="Login"/>
        </div>
        <br>
        <br>
        <div class="form-group">
            <h3>First time using ebuy?</h3>
            <br>
            <label for="email">Email adress:</label>
            <input class="form-control" id="email" name="email" type="email">
        </div>
        <br>
        <div class="float-end">
            <input class="btn btn-primary" type="submit" name="register" value="Register"/>
        </div>
    </form>

<?php require_once __SITE_PATH . '/view/_footer.php'; ?>