<?php
session_start();
require_once __DIR__ . "./models/user.php";
require_once __DIR__ . "./models/db.php";

$_SESSION['loggedin'] = false;

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
    $loggedIn = true;
    header("Location: index-page-controler.php");
} else  {
    $logMessages['loggedOut'] = "Please log in.";
}


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-register.php';


require __DIR__ . '/views/_layout/v-footer.php';