<?php
session_start();
require_once __DIR__ . "/models/Model.php";
require_once __DIR__ . "./models/m-products.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";

// USING MODELS
use models\Product\Product;
use Lib\ShoppingCart\ShoppingCart;

$loggedIn = false;
$logMessages = [];
if (isset($_GET['submit1'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    $object = new Users();
    $object->Login($email, $password);
}

if (isset($_GET['submit2'])) {
    $name = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    $object = new Users();
    $object->setUsers($name, $email, $password);
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $logMessages['loggedIn'] = "You are logged in! Redirecting, please wait. ";
    $loggedIn = true;
} else {
    $logMessages['loggedOut'] = "Please log in.";
}

if(!empty($_GET['stranica'])) {
    $productId = $_GET['stranica'];
}

// SHOPPING CART (SESSION)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


$shoppingCart = new ShoppingCart($_SESSION['cart']);
if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {

        $shoppingCart->addToCart(Product::getOneProductById($_POST['product_id']), $_POST['quantity']);
        $shoppingCart->updateSession();
    
}

$product = Product::getOneProductById($productId);


$relatedProducts = $product->getRelatedProducts();

// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-single-product.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";