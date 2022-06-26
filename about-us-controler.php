<?php
session_start();
$page = 'about';

$loggedIn = false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "You are logged with email: " . htmlspecialchars($_SESSION['email']) . "!";
    $loggedIn = true;
} else {
    echo "Please log in first to see this page.";
}


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-about-us.php';

require __DIR__ . '/views/_layout/v-footer.php';