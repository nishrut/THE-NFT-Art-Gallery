<?php
 $_SESSION['didUserFound'] = false;

?>
<section class="moreimformation" id="moreimformation">
    <div class="imgofus" style="margin-left: 5px; border-radius : 7px">
        <img src="./assets/moreabout.png" alt="image of our" class="mt-3"/>

    </div>
    <div class="ourh">
        <span>More About Us</span>
        <p>
            The NFT Art Gallery is commited to bringing you the latest in digital art. Our extensive catalogue of contemporary pieces are investment grade art that you can appreciate while it appreciates in value.

            Create an account today and start collecting.
        </p>
        <?php
        if ($_SERVER['PHP_SELF'] != '/group-13/aboutUs.php') {

        ?>
            <a href="./aboutUs.php" class="button1">More Information.</a>

        <?php
        }

        ?>
    </div>
</section>