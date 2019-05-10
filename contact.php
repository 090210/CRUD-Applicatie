<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 10-5-2019
 * Time: 10:54
 */
require_once 'DBConnect.php';

?>

<html>
<head>
    <title>php8_opdr01b | <?= basename(__FILE__, '.php'); ?></title>
</title>
</head>
<body>
<header>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
</header>

<form method="post">

    <label for="name">Naam</label>
    <input type="text" name="name" placeholder="Naam"><br>

    <label for="email">E-mail</label>
    <input type="text" name="email" placeholder="E-mail"><br>

    <label for="bericht">Bericht</label>
    <textarea rows="5" cols="25" name="bericht">
    </textarea><br>

    <input type="submit" value="Verzend">

</form>


<?php
$sql = "INSERT INTO contacts (name, email, message)
        VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["bericht"]."')";

if (isset($_POST["name"],  $_POST["email"], $_POST["bericht"])){
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




?>
</body>
</html>