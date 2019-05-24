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
        </ul>
    </nav>


    <form method="POST" action="addto.php">
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

    </body>

</html>

