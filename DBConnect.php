<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 10-5-2019
 * Time: 11:12
 */

$servername = "localhost";
$username = "root";
$password = "";
$db = "php8_opdr01b";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}