
<!DOCTYPE HTML>
<html>

<head>
    <title>contact</title>

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

if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
    if (!empty($_POST['name']) AND $_POST['email'] AND $_POST['message']) {
        require_once('Functions.php');
        $function = new Functions;    
        if($function->addTo($_POST['name'], $_POST['email'], $_POST['message'])){
            echo '<script>alert("Succesvol in de database toegevoegd"); </script>';
        }
    } else {
        echo '<script>alert("Mislukt")</script>';
    }
}
?>

</body>

</html>

