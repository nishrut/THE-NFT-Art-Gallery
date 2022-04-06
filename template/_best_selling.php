<?php
 $_SESSION['didUserFound'] = false;
$categoryProducts = $product->getProductOfCategory('best selling');
shuffle($categoryProducts);
// print_r($categoryProducts);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addToCartButton'])) {
        $cart->addToTable($_POST['item_id'], 'cart', $_SESSION['SessionUserId']);
    }
}
?>

<section class="nw" id="nw">
    <div class="nwh">
        <span>New arts</span>
        <h2>Our New Collections</h2>
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
                    <button name="addToCartButton" class="bx bx-cart"></button>
                </form>
            </div>

        <?php
        endforeach;
        ?>
    </div>
</section>