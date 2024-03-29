<?php require_once __SITE_PATH . '/view/_header.php';
require_once __SITE_PATH . '/util/drawStarsUtil.php';

if (isset($starProduct)) {
    $product = $starProduct->getProduct();
    if ($product) echo "<h3>" . $product->getName() . "</h3>";
    echo getStars($starProduct->getAvgRating(), false);
}
if (isset($numOfSoldProducts)) echo "<p>This product has been sold " . $numOfSoldProducts . " times.";
if (!isset($reviews) || sizeof($reviews) === 0) echo "<p>This product has no reviews.</p>";
else { ?>
    <br>
    <table class="table table-sm table-bordered">
    <thead>
    <tr class="table-primary">
        <th>User</th>
        <th>Rating</th>
        <th>Comment</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($reviews as $review) {
        echo '<tr>' .
            '<td>' . $review["username"] . '</td>' .
            '<td>' . $review["rating"] . '</td>' .
            '<td>' . $review["comment"] . '</td>' .
            '</tr>';
    }
}
?>
    </tbody>
    </table>
    <br>

<?php require_once __SITE_PATH . '/view/_review.php'; ?>
<?php require_once __SITE_PATH . '/view/_canBuy.php'; ?>
<?php require_once __SITE_PATH . '/view/_footer.php'; ?>