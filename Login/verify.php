<?php
session_start();

if ($_POST['password'] == "asd" && $_POST['username'] == "admin") {
    $_SESSION['username'] = "Michael";
    $_SESSION['logged'] = TRUE;
    header("Location: index.php");
    exit;
} else {
    header("Location: login_page.php");
    exit;
}