<?php
session_start();

require_once __DIR__ . "/models/Model.php";
require_once __DIR__ . "/models/m-products.php";

// USING MODELS
use models\Product\Product;


$productId = $_GET['id'];
/* $quantity = $_GET['quantity']; */



$product = Product::getOneProductById($productId);

$img = $product->img;
$title = $product->title;
$price = $product->price;

$systemErrors = [];

/* $_GET['f_name'] = $_GET['l_name'] =  $_GET['email'] =  $_GET['city'] =  $_GET['phone'] =  $_GET['street_and_num'] = $_GET['zip'] = $_GET['terms'] = '';

$firstName = $_GET['f_name']; 
$lastName = $_GET['l_name']; 
$email = $_GET['email']; 
$city = $_GET['city']; 
$phone = $_GET['phone'];
$street = $_GET['street_and_num'];
$zip = $_GET['zip'];
$terms = $_GET['terms']; */

if (isset($_GET['submit'])) {

if(empty($_GET['f_name']) || strlen(trim($_GET['f_name'], ' ')) < 2) {
    $systemErrors['f_name'] = 'Your name is not valid.';
}

if(empty($_GET['l_name']) || strlen(trim($_GET['l_name'], ' ')) < 2) {
    $systemErrors['l_name'] = 'Your last name is not valid.';
}

if( empty($_GET['email']) || 
strlen(trim($_GET['email'], ' ')) < 2 || 
!str_contains($_GET['email'], '@') || 
str_contains($_GET['email'], ' ')
) {
    $systemErrors['email'] = 'Email is not valid. Check did you include @ or put extra space between letters.';
}

if(empty($_GET['city']) || strlen(trim($_GET['city'], ' ')) < 2) {
    $systemErrors['city'] = 'Your city is not valid.';
}

if( empty($_GET['phone']) || 
strlen(trim($_GET['phone'], ' ')) < 9 || 
strlen(trim($_GET['phone'], ' ')) > 11 ||
!is_numeric($_GET['phone'])
) {
    $systemErrors['phone'] = 'Your phone is not valid.';
}

if(empty($_GET['address']) || strlen(trim($_GET['address'], ' ')) < 2) {
    $systemErrors['address'] = 'Your street is not valid.';
}

if(empty($_GET['zip']) || strlen(str_replace(' ', '', $_GET['zip'])) !== 5 ) {
    $systemErrors['zip'] = 'Zip code must have exactly 5 characters.';
}


if(!isset($_GET['terms'])) {
    $systemErrors['terms'] = 'You must check privacy and terms checkbox.';
}

if(empty($systemErrors)) {
    unset($_SESSION['cart']);
    header('Location: ./thank-you-page.php');
} 
}




/* $is_errors = count($systemErrors) > 0 ? false : true; */

$loggedIn = false;
$logMessages = [];

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $logMessages['loggedIn'] = "You are logged in! Redirecting, please wait. ";
    $loggedIn = true;
} else {
    $logMessages['loggedOut'] = "Please log in.";
}
// HEADER
require __DIR__ . "/views/_layout/v-header.php";


//MAIN
require __DIR__ . "/views/v-checkout-page-single.php";

var_dump($img);


// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";


?>