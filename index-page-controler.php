<?php
session_start();
$page = 'index';

require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "./models/m-products.php";

// USING MODELS
use models\Product\Product;


$threeRandom = Product::getThreeRandomProducts();

$loggedIn = false;

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "You are logged with email: " . htmlspecialchars($_SESSION['email']) . "!";
    echo "<br><br>";
    $loggedIn = true;
} else {
    echo "Please log in first to see this page.";
    echo "<br><br>";
}

require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-index-page.php';

require __DIR__ . '/views/_layout/v-footer.php';