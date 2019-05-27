<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 24-5-2019
 * Time: 11:03
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php8_opdr01a";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connectie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}