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
        <li><a href="read.php">Read Data</a></li>
        <li><a href="delete.php">Delete Data</a></li>

    </ul>
</nav>

    <h1>Vul hieronder in welke record je wilt verwijderen</h1>

    <label>ID: </label><input name="input" type="text"><input type="submit" name="submit">

<?php
require_once 'db.php';
$input = $_POST['input'];
$query = "SELECT * FROM contacts WHERE id = '" . $input . "'";
$result = mysqli_query($conn, $query);
if(isset($_POST['submit'])){

while($row = mysqli_fetch_array($result)) {
    $posts[$x]['id'] = $row['id'];
    $posts[$x]['name'] = $row['name'];
    $posts[$x]['email'] = $row['email'];
    $posts[$x]['message'] = $row['message'];
    $x++;
}
}

?>


</body>

</html>

