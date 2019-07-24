<?php
session_start();

if ($_SESSION['loggedin'] != "true" || $_SEESION['admin'] != "true") {
    header("Location: login.php");
    die;
}