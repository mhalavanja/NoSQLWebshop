<?php if (isset($canBuy) && $canBuy) { ?>
    <form method="post" action="<?php echo __SITE_URL . '/index.php?rt=products/processBuy' ?>">
        <input type="hidden" name="productId" value="<?php if (isset($product)) echo $product->getId(); ?>">
        <div>
            <label for="quantity">Quantity:</label>
            <input id="quantity" type="number" name="quantity" min="1" value="1">
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Buy!</button>
    </form>
<?php } ?>