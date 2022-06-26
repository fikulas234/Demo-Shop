<?php
session_start();
require_once __DIR__ . "./models/m-products.php";

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

$product = getOneProductById($productId);
$next = getNextProduct($productId);
$prev = getPrevProduct($productId);

$relatedProducts = getRelatedProducs($product);

// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-single-product.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";