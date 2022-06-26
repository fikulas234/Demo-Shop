<?php
session_start();
require_once __DIR__ . "./models/user-message.php";
require_once __DIR__ . "./models/db.php";
$contact='contact';

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-contact.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    $object = new UserMessage();
    $object->setMessage($name, $email, $message);
}

?>