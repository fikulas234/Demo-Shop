<?php
session_start();
if(empty($_SESSION['cart'])) {
    header("Location: ./shop-controler.php");
}
require_once __DIR__ . "./models/m-products.php";
require_once __DIR__ . "./models/m-shopping-cart.php";

$items = getShoppingCart();

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



// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-shopping-cart.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";