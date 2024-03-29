<?php require_once __SITE_PATH . '/view/_header.php';
require_once __SITE_PATH . '/util/drawStarsUtil.php';
if (!isset($starProducts) || sizeof($starProducts) == 0)
echo "<h2>You have not yes bought any product. Let's change that :)</h2>";
else { ?>
<form method="post" action="<?php echo __SITE_URL . '/index.php?rt=products/product' ?>">
    <br>
    <table class="table table-sm table-bordered">
        <thead>
        <tr class="table-primary">
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Stars</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($starProducts as $starProduct) {
            $product = $starProduct->getProduct();
            $id = method_exists($product, "getProductId") ? $product->getProductId() : $product->getId();
            echo '<tr>' .
                '<td>' . $product->getName() . '</td>' .
                '<td>' . $product->getDescription() . '</td>' .
                '<td>' . $product->getPrice() . ' HRK </td>' .
                '<td>' . $starProduct->getQuantity() . '</td>' .
                '<td>' . getStars($starProduct->getAvgRating(), true) . '</td>' .
                '<td><button class="btn btn-outline-primary" type="submit" name="productId" value="product_' . $id . '">Review</button></td>' .
                '</tr>';
        }
        echo '</tbody></table></form>';
        }
        require_once __SITE_PATH . '/view/_footer.php'; ?>
