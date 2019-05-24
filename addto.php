<?php
// Database gegevens (beter om deze in een apart bestand te zetten)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php8_opdr01a";

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

?>

<!DOCTYPE HTML>
<html>

<head>

</head>

<body>
<nav>
    <ul>
        <li> <a href="index.php">Home</a> </li>
        <li> <a href="about.php">About</a></li>
        <li> <a href="contact.php">Contact</a></li>
    </ul>
</nav>
<?php
if (!$result) {
    die ("Oeps er is iets fout gegaan :( ");
} else {
    echo 'Succesvol in de DB toegevoegd';
}

?>
</body>

</html>






