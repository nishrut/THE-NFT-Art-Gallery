<?php
$categoryProducts = $product->getProductOfCategory('Exposition');
shuffle($categoryProducts);

$itemIdsInCart = $cart->getItemIdFromCartId('cart', $_SESSION['SessionUserId']);

// print_r($categoryProducts);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addToCartButtonExposition'])) {
        $cart->addToTable($_POST['item_id'], 'cart', $_SESSION['SessionUserId']);
    }
}
?>

<section class="nw" id="nw">
    <div class="nwh">
        <span>Collection</span>
        <h2>Exposition</h2>
    </div>

    <div class="nwcontain container-fluid">
        <?php
        foreach ($categoryProducts as $item) :
        ?>
            <div class="mainbx">
                <div class="imgbx">
                    <img src="<?php echo $item['item_image'] ?>" alt="<?php echo $item['item_name'] ?>" />
                </div>
                <div class="main-price">
                    <h3><?php echo $item['item_name'] ?></h3>
                    <div class="ratting">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star-half"></i>
                    </div>
                </div>
                <span>$<?php echo $item['item_price'] ?></span>
                <form method="POST">
                    <input type="hidden" name="user_id" value="1">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                    <?php
                    if (in_array($item['item_id'], $itemIdsInCart)) {
                    ?>
                        <button class="disabled-cart-button" name="addToCartButtonExposition" disabled>In The Cart</button>
                    <?php
                    } else {
                    ?>

                        <button class="bx bx-cart" name="addToCartButtonExposition"></button>

                    <?php
                    }

                    ?>
                </form>
            </div>

        <?php
        endforeach;
        ?>
    </div>
</section>