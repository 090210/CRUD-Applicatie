<!DOCTYPE HTML>
<html>

<head>
    <title>contact</title>
    <?php
    require 'functions.php';
    $function = new Functions();
    $function->dbConnection();
    ?>
</head>

<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="read.php">Read Data</a></li>
    </ul>
</nav>


<form method="POST">
    Name:<br>
    <input type="text" name="name">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    Message:<br>
    <textarea type="text" name="message"> </textarea>
    <br><br>
    <input type="submit" value="Submit">
</form>
<?php
if (!empty($_POST['name']) && $_POST['email'] && $_POST['message']) {
    $function->addTo();
};
?>

</body>

</html>

