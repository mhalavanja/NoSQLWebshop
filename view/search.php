<?php require_once __SITE_PATH . '/view/_header.php';
require_once __SITE_PATH . '/util/drawStarsUtil.php'; ?>
    <br>
    <form method="post" action="<?php echo __SITE_URL . '/index.php?rt=search/processSearch' ?>">
        <div class="form-group">
            <label for="search">Search product: </label>
            <input class="form-control" type="text" id="search" name="search">
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Search!</button>
    </form>

<?php if (isset($starProducts)) { ?>
    <br>
    <form method="post" action="<?php echo __SITE_URL . '/index.php?rt=search/searchDetails' ?>">

    <table class="table table-sm table-bordered">
    <thead>
    <tr class="table-primary">
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stars</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($starProducts as $starProduct) {
        $avgRating = $starProduct->getAvgRating();
        echo '<tr>' .
            '<td>' . $starProduct->getProduct()->getName() . '</td>' .
            '<td>' . $starProduct->getProduct()->getDescription() . '</td>' .
            '<td>' . $starProduct->getProduct()->getPrice() . '</td>' .
            '<td>' . getStars($avgRating, true) . '</td>' .
            '<td><button class="btn btn-outline-primary" type="submit" name="product_id" value="product_' .
            $starProduct->getProduct()->getId() . '">Details</button></td>' .
            '</tr></tbody>';
    }
}
?>
    </table>
    </form>
<?php require_once __SITE_PATH . '/view/_footer.php'; ?>