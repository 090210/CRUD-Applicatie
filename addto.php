<?php
// Database gegevens (beter om deze in een apart bestand te zetten)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php8_opdr02";

// Database connectie maken
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connectie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Formulier data ophalen
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//Query
$sql = "INSERT INTO contacts (name, email, message) VALUES 
		('$name', '$email','$message')";

//Uitvoeren van de query (insert), $result wordt true indien het lukt
$result = $conn->query($sql);

//check of het gelukt is
if (!$result) {
    die ("Oeps er is iets fout gegaan :( ");
} else {
    header('Location: index.php');
}




