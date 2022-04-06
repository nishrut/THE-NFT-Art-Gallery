<?php
ob_start();
session_start();
//$_SESSION['SessionUserId'] = 1;
if (empty($_SESSION['SessionUserId']))
    $_SESSION['SessionUserId'] = 1;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logout-button-submit'])) {
        $_SESSION['SessionUserId'] = 1;
        $_SESSION['didUserFound'] == false;
        header('Location:./login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>THE-NFT Art Gallery</title>
    <link rel="stylesheet" href="style.css" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300&display=swap");

        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            font-family: "Vazirmatn", sans-serif;
        }

        a {
            text-decoration: none;
        }

        .b2 {

            padding: 0px 7px;

            background: #000000;

            color: #fff;

            border-radius: 7px;
            font-size: 18px;

        }



        .b2:hover {

            background: #ac8d2585;

            color: #fff;

        }

        header {
            position: fixed;
            width: 100%;
            top: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 100px;
            background: #000000;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 1000;
            color: #fff;
        }

        .logo span {
            color: #ac8c25;
        }

        .logo:hover {
            color: #fff;
        }

        .menubar {
            position: relative;
            display: flex;
        }

        .menubar a {
            font-size: 1rem;
            padding: 10px 20px;
            font-weight: 900;
            color: #fff;
        }

        .menubar a:hover {
            color: #ac8c25;
        }

        .menubar a.live {
            color: #ac8c25;
        }


        .mainpage {
            width: 100%;
            height: 100vh;
            background-image: url(./assets/mainimage.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top 50% right 25%;
            background-attachment: fixed;
            display: flex;
            align-items: center;
        }

        .mainpage-text h1 {
            margin-top: 30px;
            font-size: 2.2rem;
            padding-left: 40px;
        }

        .mainpage-text p {
            font-size: 1rem;
            margin: 1rem 0 2rem;
            padding-left: 50px;
        }

        .mainpage-text span {
            color: #ac8c25;
        }

        .button {
            padding: 10px 14px;
            background: #000000;
            color: #fff;
            border-radius: 7px;
            font-size: 18px;
            margin-left: 50px;
        }
      
       .disabled-cart-button {
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 2px;
            font-size: 20px;
            color: rgb(253, 253, 253);
            border-radius: 7px 0 7px 0;
            background: #ac8c25;

        }

        .button:hover {
            background: #ac8c25;
        }

        .shoph,
        .nwh {
            text-align: center;
            margin: 35px 0;
        }

        .shoph span {
            font-size: 20px;
            font-weight: 800;
            color: #ac8c25;
            text-transform: uppercase;
        }

        .nwh span {
            font-size: 20px;
            font-weight: 800;
            color: #ac8c25;
            text-transform: uppercase;
        }

        .shcontain,
        .nwcontain {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, auto));
            gap: 1rem;
            margin-top: 2rem;
            margin-bottom: 50px;
        }

        .detail {
            margin-left: 35px;
        }

        .mainbx {
            position: relative;
            box-shadow: 1px 4px 4px rgb(0, 0, 0, 0.1);
            border-radius: 30px 4px 4px 4px;
            margin: 10px;
        }

        .mainbx .imgbx {
            width: 100%;
            height: 250px;
            overflow: hidden;
            border-radius: 44px 4px 0 0;
        }

        .m-color {
            color: #ac8c25;
            font-weight: bolder;
            font-size: large;
        }

        .mainbx .imgbx img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .mainbx .imgbx img:hover {
            transform: scale(1.1);
            transition: 0.5s;
        }

        .main-price {
            display: flex;
            justify-content: space-between;
            padding: 12px;
        }

        .main-price h3 {
            font-size: 1rem;
            font-weight: 600;
        }

        .mainbx span {
            font-size: 1.1rem;
            font-weight: 800;
            padding-left: 14px;
            color: #ac8c25;
        }

        .ratting .bx {
            color: #000000;
        }

        .mainbx .bx-cart {
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 7px;
            font-size: 20px;
            color: rgb(253, 253, 253);
            border-radius: 7px 0 7px 0;
            background: #000000;
        }

        .disabled-cart-button {
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 2px;
            font-size: 20px;
            color: rgb(253, 253, 253);
            border-radius: 7px 0 7px 0;
            background: #ac8c25;

        }

        .mainbx .bx-cart:hover {
            background: #ac8c25;
        }

        .nwcontain .mainbx {
            border-radius: 7px;
        }

        .nwcontain .mainbx .imgbx {
            border-radius: 7px;
        }

        .moreimformation {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .imgofus img {
            width: 80%;
            border-radius: 7px;
            object-fit: contain;
        }

        .ourh {
            margin-top: 75px;
        }

        .ourh span {
            font-size: 20px;
            font-weight: 800;
            text-transform: uppercase;
            color: #ac8c25;
        }

        .ourh p {
            font-size: 1rem;
            margin: 1rem 0 2rem;
        }

        .button1 {
            padding: 12px 14px;
            background: #000000;
            color: #fff;
            border-radius: 7px;
            font-size: 14px;
        }

        .button1:hover {
            background: #ac8c25;
        }


        .footer {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, auto));
            gap: 1.5rem;
            padding: 50px 15px;
            background: #000000;
        }

        .footercontain h2 {
            font-size: 1.9rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: #fff;
        }

        .footercontain span {
            color: #ac8c25;
        }

        .footercontain p {
            font-size: 1rem;
            margin-bottom: 10px;
            color: #fff;
        }

        .mediaaccount {
            display: flex;
            align-items: center;
        }

        .mediaaccount a {
            font-size: 30px;
            margin-right: 10px;
            color: #fff;
        }

        .mediaaccount a:hover {
            color: #ac8c25;
        }

        .footercontain h3 {
            font-weight: 900;
            margin-bottom: 10px;
            color: #fff;
        }

        .footercontain li a {
            color: #fff;
        }

        .footercontain li a:hover {
            color: #ac8c25;
        }

        .contactinformation {
            display: flex;
            flex-direction: column;
        }

        .contactinformation span {
            color: #fff;
        }

        .copyrightarea {
            padding: 20px;
            text-align: center;
        }

        /* Shopping page  */
        .shoph-page {
            text-align: center;
            margin-top: 100px;
        }

        .shoph-page span {
            font-size: 20px;
            font-weight: 800;
            color: #ac8c25;
            text-transform: uppercase;
        }

        /* Newarrival Page */
        .nwh-page {
            text-align: center;
            margin-top: 100px;
        }

        .nwh-page span {
            font-size: 20px;
            font-weight: 800;
            color: #ac8c25;
            text-transform: uppercase;
        }

        /* about us page  */
        .moreimformation-page {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 50px;
        }

        /* Contact us page */
        .detailinformation {
            margin-top: 100px;
        }

        .detail span {
            font-size: 20px;
            font-weight: 500;
            color: #ac8c25;
        }

        .detail h2 {
            font-size: 25px;
            padding: 10px 0;
        }

        .detail li {
            display: flex;
            padding: 15px 0;
        }

        .detail li i {
            font-size: 20px;
            padding-right: 10px;
        }

        .members {
            margin: 40px 30px;
            display: flex;
            /* align-items: center; */
            justify-content: space-between;
        }



        .members div {
            padding-bottom: 20px;

        }

        .members div p {
            margin: 0;
            font-size: 15px;
            line-height: 20px;
        }

        .members div p span {

            font-size: 30px;
            font-weight: 300;
            color: #ac8c25
        }


        /* Cart page  */
        .cart-selection {
            margin: 120px 0;
        }


        .cart-selection table {
            width: 80%;
            white-space: nowrap;
            table-layout: fixed;
            border-collapse: collapse;
            margin-left: 50px;
        }

        .cart-selection table td:nth-child(3) input {
            margin-top: 10px;
            width: 50px;
            padding: 10px 5px 10px 5px;
        }

        .cart-selection table thead {
            border: 1px solid #000000;
        }

        .cart-selection table thead td {
            font-weight: 500;
            font-size: 15px;
            text-transform: uppercase;
            padding: 5px 0;
        }

        .finaltotal {
            display: flex;
            justify-content: center;
            margin-bottom: 35px;
        }

        .totalamount {
            width: 50%;
            margin-bottom: 10px;
            border: 1px solid #000000;
            padding: 10px;
            background-color: rgba(202, 202, 199, 0.815);
            border-radius: 20px;
        }

        .totalamount table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
            background-color: #fff;
        }

        .totalamount table td {
            width: 50%;
            border: 1px solid #000000;
            padding: 15px;
            font-size: 15px;
        }

        .checkout {
            background-color: #000;
            color: #fff;
            padding: 15px 15px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 15px;

        }

        .checkout:hover {
            background-color: #ac8c25;

        }
      .b58 {
background-color: Transparent;
background-repeat:no-repeat;
border: none;
}
    </style>
    <?php

    require('./functions.php');

    ?>
</head>

<body>
    <header>
        <a href="./index.php" class="logo">THE-NFT <span> Art Gallery.</span></a>

        <ul class="menubar">
            <li><a href="./index.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/index.php') ? "#ac8c25" : "" ?>">Home</a></li>
            <li><a href="./shopNow.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/shopNow.php') ? "#ac8c25" : "" ?>">Collection</a></li>
            <!-- <li><a href="./newArrival.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/newArrival.php') ? "#ac8c25" : "" ?>">New Collection</a></li> -->
            <li><a href="./aboutUs.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/aboutUs.php') ? "#ac8c25" : "" ?>">About Us</a></li>
            <li><a href="./contactUs.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/contactUs.php') ? "#ac8c25" : "" ?>">Contact Us</a></li>
            <li><a href="./cart.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/cart.php') ? "#ac8c25" : "" ?>">Cart <i class='bx <?php echo ($cart->getCount($_SESSION['SessionUserId']) > 0) ?  "bxs-cart" : "bx-cart" ?> '></i> <?php echo ($cart->getCount($_SESSION['SessionUserId']) > 0) ?  $cart->getCount($_SESSION['SessionUserId']) : "" ?></a></li>
            <?php

            // echo $_SESSION['SessionUserId'];

            $UserId = $_SESSION['SessionUserId'];
            if ($_SERVER['PHP_SELF'] != '/group-13/login.php') {
                if ($UserId == '1') {
            ?>
                    <li><a href="./login.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/login.php') ? "#ac8c25" : "" ?>">Log in</a></li>
                <?php
                } else {

                ?>
                    <li><a style="color:#76c893; font-weight: bold;">Hello, <?php echo $user->getUserName($_SESSION['SessionUserId'])  ?></a></li>

            <?php
                }
            }
            ?>
            <?php
            if ($_SESSION['SessionUserId'] != '1') {
            ?>
                <form method="POST">
                    <!-- <li><a name="logout-button-submit" class="b2">LogOut</a></li> -->
                    <li><button name="logout-button-submit" class="b2 b58">LogOut</button></li>
                </form>
            <?php

            }
            ?>
        </ul>
    </header>

    <main>