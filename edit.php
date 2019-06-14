<?php
require_once('functions.php');
$function = new Functions;
$function->update();

?>
<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $function->row[0]; ?>">
    <label>Name: </label><br><input type="text" name="name" value="<?php echo $function->row['name']; ?>"><br/>
    <label>E-mail: </label><br><input type="text" name="email" value="<?php echo $function->row['email']; ?>"><br/>
    <label>Message:</label><br>
    <textarea type="text" name="message"><?php echo $function->row['message'];?></textarea><br/><br>
    <input type="submit" value=" Update "/>
</form> 