<?php require_once __SITE_PATH . '/view/_header.php';
require_once __SITE_PATH . '/util/drawStarsUtil.php';
if (!isset($starProducts) || sizeof($starProducts) == 0)
echo "<h2>You are not selling any product.</h2>";
else { ?>
<form method="post" action="<?php echo __SITE_URL . '/index.php?rt=products/product' ?>">
    <br>
    <table class="table table-sm table-bordered">
        <tr class="table-primary">
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stars</th>
            <th></th>
        </tr>
        <?php foreach ($starProducts as $starProduct) {
            $product = $starProduct->getProduct();
            echo '<tr>' .
                '<td>' . $product->getName() . '</td>' .
                '<td>' . $product->getDescription() . '</td>' .
                '<td>' . $product->getPrice() . ' HRK </td>' .
                '<td>' . getStars($starProduct->getAvgRating(), true) . '</td>' .
                '<td><button class="btn btn-outline-primary" type="submit" name="productId" value="product_' . $product->getId() . '">Details</button></td>' .
                '</tr>';
        }
        echo '</table>' . '</form>';
        }
        require_once __SITE_PATH . '/view/_footer.php'; ?>
