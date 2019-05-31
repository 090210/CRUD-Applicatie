<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="read.php">Read Data</a></li>
    </ul>
</nav>
<?php

require_once('db.php');

	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM contacts WHERE id='$id'";
		$res= mysqli_query($conn, $sql) or die("Failed" . $conn->connect_error);
		echo "Query deleted succesfully, go back to <a href='index.php'>home</a>";
	}