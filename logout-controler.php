<?php
session_start();
unset($_SESSION['loggedin']);
header("Location: index-page-controler.php");


?>