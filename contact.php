<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 10-5-2019
 * Time: 10:54
 */

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
    <textarea rows="5" cols="25">
    </textarea><br>

    <input type="submit" value="Verzend">

</form>

</body>
</html>