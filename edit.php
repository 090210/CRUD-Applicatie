<!-- <?php

if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
    if (!empty($_POST['name']) AND $_POST['email'] AND $_POST['message']) {
        require_once('Functions.php');
        $function = new Functions;    
        if($function->edit($_POST['name'], $_POST['email'], $_POST['message'])){
            echo '<script>alert("Succesvol in de database toegevoegd"); </script>';
        }
    } else {
        echo '<script>alert("Mislukt")</script>';
    }
}

?>
<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $function->row[0]; ?>">
    <label>Name: </label><br><input type="text" name="name" value=""><br/>
    <label>E-mail: </label><br><input type="text" name="email" value=""><br/>
    <label>Message:</label><br>
    <textarea type="text" name="message"><?php ?></textarea><br/><br>
    <input type="submit" value=" Update "/>
</form> -->