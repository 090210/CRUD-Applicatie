<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>
<?php

require_once('db.php');

	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM contacts WHERE id='$id'";
		$res= mysqli_query($conn, $sql) or die("Failed");
		echo "Query deleted succesfully, go <a href='read.php'>back</a>";
	}
	if( isset($_GET['all']) )
	{
		$id = $_GET['all'];
		$sql= "DELETE FROM contacts";
		$res= mysqli_query($conn, $sql) or die("Failed");
		echo "Query deleted everything, go <a href='read.php'>back</a>";
	}
