<?php
session_start();
$page = 'shop';
require_once __DIR__ . "./models/m-products.php";
require_once __DIR__ . "./models/m-shopping-cart.php";

$filter = "";
$sort = "";


$products = getAvailableProducts();
$products = filteredProducts($products, $term);




if(!empty($_GET['filter'])) {
    $filter = $_GET['filter'];
}
 
if(isset($_GET['watches'])) {
    $sort = $_GET['watches'];
}


if($sort === ORDER_BY_PRICE_ASC) {
    $products = sortByAscending($products);
} else if ($sort === ORDER_BY_PRICE_DSC) {
    $products = sortByDescending($products);

} else {
    $products = getAvailableProducts();
} 

if($filter != "") {
    $products = filteredProducts($products, $filter);
} 

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

//HEADER
require __DIR__ . "/views/_layout/v-header.php";

//PAGE
require __DIR__ . "/views/v-shop.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";