<?php
// ob_start();
// session_start();

require("./Database/Database.php");

require('./Database/Product.php');

require('./Database/Cart.php');

require('./Database/User.php');

$db = new Database();

$product = new Product($db);

$allProducts = $product->getProduct();

$cart = new Cart($db);

$user = new User($db);



