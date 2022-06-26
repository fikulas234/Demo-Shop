<?php
session_start();

require_once __DIR__ . "./models/user-message.php";
require_once __DIR__ . "./models/db.php";

$loggedIn = false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "You are logged with email: " . htmlspecialchars($_SESSION['email']) . "!";
    echo "<br><br>";
    $loggedIn = true;
} else {
    echo "Please log in first to see this page.";
    echo "<br><br>";
}

if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    $object = new UserMessage();
    $object->setMessage($name, $email, $message);
}

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-thank-you.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
