<?php
session_start();

$loggedIn = false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "You are logged with email: " . htmlspecialchars($_SESSION['email']) . "!";
    echo "<br><br>";
    $loggedIn = true;
} else {
    echo "Please log in first to see this page.";
    echo "<br><br>";
}

if(!empty($_SESSION['cart'])) {
    if(!empty($_POST['remove'])) {
        foreach ($_POST['remove'] as $productId) {
            foreach ($_SESSION['cart'] as $key => $item) {
                if($item == $productId) {
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
    }
}

header("Location: ./shopping-cart-page-controler.php");