<?php
require_once __SITE_PATH . '/view/_header.php';
require_once __SITE_PATH . '/util/userList.php';
if (!isset($user)) return;
?>
    <br>
     <div class="col-md-6">
         <div class="card-group">
             <div class="card mb-4">
                 <div class="card-body">
                     <h5 class="card-title">Income:</h5>
                         <p class="card-text text-success"></span><span class="ml-2" style="font-size: 30px;">+ <?php echo $user->getIncome() ?></span> HRK</p>
                 </div>
             </div>
             <div class="card mb-4">
                 <div class="card-body">
                     <h5 class="card-title">Outcome: </h5>
                         <p class="card-text text-danger"><span class="ml-2" style="font-size: 30px;">- <?php echo $user->getOutcome() ?></span>  HRK</p>
                 </div>
             </div>
         </div>
     </div>
    <br>
    <form method="post" action="<?php echo __SITE_URL . '/index.php?rt=users/processProfile' ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" id="name" type="text" name="name"
                   value="<?php echo $user->getName() ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input class="form-control" id="lastname" type="text"
                   name="lastname"
                   value="<?php echo $user->getLastName() ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" id="username" type="text"
                   name="username"
                   value="<?php echo $user->getUsername() ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" id="email" type="email" name="email"
                   value="<?php echo $user->getEmail() ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="category">Favorite category:</label>
            <select class="form-select" id="category" name="category">
                <option id="Automobili" value="Automobili">Automobili</option>
                <option id="Elektronika" value="Elektronika">Elektronika</option>
                <option id="Hrana" value="Hrana">Hrana</option>
                <option id="Pića" value="Pića">Pića</option>
            </select>
        </div>
        <br>
        <button class="btn btn-primary" type="submit">
            Submit
        </button>
    </form>
    <br>
    Recommended users:
    <br>
<?php echo getUserList($user->getRecommendations()); ?>
    <br>

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
<?php
require_once __SITE_PATH . '/view/_footer.php'; ?>

<script>
    const favCatId = "<?php echo $user->getFavoriteCategory()?>";
    $(document).ready(function () {
        $("#" + favCatId).attr("selected", "selected");
    });
</script>