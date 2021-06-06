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
        <label for="category">Select product category:</label><br>
        <select class="form-control" id="category" name="category">
            <option value="Automobili">Automobili</option>
            <option value="Elektronika">Elektronika</option>
            <option value="Hrana">Hrana</option>
            <option value="Pića">Pića</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="name">Price: </label>
        <input class="form-control" type="number" id="price" name="price" step=".01">
    </div>
    <br>
    <button class="btn btn-primary" type="submit">Submit!</button>
</form>
<?php require_once __SITE_PATH . '/view/_footer.php'; ?>
