<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="read.php">Read Data</a></li>
        <li><a href="delete.php">Delete Data</a></li>
    </ul>
</nav>

<?php


require 'db.php';

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Naam: " . $row["name"]. " - E-mail: " . $row["email"]. " - Message: " . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();



?>
