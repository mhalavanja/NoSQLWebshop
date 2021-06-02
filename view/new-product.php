<?php require_once __SITE_PATH . '/view/_header.php';
if(isset($error) && $error === true) echo "<p>All the fields are required!</p>" ?>
<form method="post" action="<?php echo __SITE_URL . '/index.php?rt=products/processNewProduct' ?>">
    <br>
    <div class="form-group">
        <label for="name">Name: </label>
        <input class="form-control" type="text" id="name" name="name">
    </div>
    <br>
    <div class="form-group">
        <label for="name">Description: </label>
        <input class="form-control" type="text" id="description" name="description">
    </div>
    <br>
    <div class="form-group">
        <label for="category">Category: </label>
        <input class="form-control" type="text" id="category" name="category">
    </div>
    <br>
    <div class="form-group">
        <label for="name">Price: </label>
        <input class="form-control" type="number" id="price" name="price">
    </div>
    <br>
    <button class="btn btn-primary" type="submit">Submit!</button>
</form>
<?php require_once __SITE_PATH . '/view/_footer.php'; ?>
