<?php
require_once 'db.php';

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






