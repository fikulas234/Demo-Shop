<?php
session_start();
$page = 'shop';
require_once __DIR__ . "/models/Model.php";
require_once __DIR__ . "/models/m-products.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";

// USING MODELS
use models\Product\Product;
use Lib\ShoppingCart\ShoppingCart;

$filter = "";
$sort = "";


$products = Product::getAvailableProducts();




if(!empty($_GET['filter'])) {
    $filter = $_GET['filter'];
}
 
if(isset($_GET['watches'])) {
    $sort = $_GET['watches'];
}



if ($filter != "") {
    $products = Product::filteredProducts($filter, $products);
}

if ($sort != "") {
    $products = Product::sortProductBy($sort, $products);
} 



// SHOPPING CART (SESSION)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$shoppingCart = new ShoppingCart($_SESSION['cart']);
if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
    $shoppingCart->addToCart(Product::getOneProductById($_POST['product_id']));
    $shoppingCart->updateSession();
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

//HEADER
require __DIR__ . "/views/_layout/v-header.php";


//PAGE
require __DIR__ . "/views/v-shop.php";


// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";