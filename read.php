<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="read.php">Read Data</a></li>
    </ul>
</nav>

<?php
    require_once 'db.php';
    
    $res = mysqli_query($conn, "SELECT * FROM contacts");

	while( $row = mysqli_fetch_array($res) )
	  echo "ID: $row[id] | name: $row[name] | e-mail: $row[email] | message: $row[message] |
                <a href='edit.php?edit=$row[id]'>edit</a>
                <a href='delete.php?del=$row[id]'>delete</a><br />";

?>

