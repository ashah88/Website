<?php

//connection File
$host = 'localhost';
$username = 'tgold88';
$pass = '12345678';
$dbname = 'ajay';
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$conn = new PDO($dsn, $username, $pass, $options);
