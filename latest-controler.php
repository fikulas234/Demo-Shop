<?php
session_start();
$page = 'latest';
require_once __DIR__ . "/models/Model.php";
require_once __DIR__ . "./models/m-products.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";



// USING MODELS
use models\Product\Product;
use Lib\ShoppingCart\ShoppingCart;

// SHOPPING CART (SESSION)
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if(isset($_POST['product_id']) && !empty($_POST['product_id'])) {
    $_SESSION['cart'][] = $_POST['product_id'];
}

$loggedIn = false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "You are logged with email: " . htmlspecialchars($_SESSION['email']) . "!";
    echo "<br><br>";
    $loggedIn = true;
} else {
    echo "Please log in first to see this page.";
    echo "<br><br>";
}

$filter = "";
$sort = "";
$new = Product::getNewProducts();

if(isset($_GET['new'])) {
    $sort = $_GET['new'];
}

if ($sort != "") {
    $new = Product::sortProductBy($sort, $new);
} else {
    $new = Product::getNewProducts();
} 


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-latest.php';

require __DIR__ . '/views/_layout/v-footer.php';