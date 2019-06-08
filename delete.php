<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="read.php">Read Data</a></li>
    </ul>
</nav>
<?php
require 'functions.php';
$function = new Functions;
$function->dbConnection();
$function->delete();
?>
