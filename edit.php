<?php
require_once 'functions.php';
$function = new Functions;

$function->dbConnection();
$function->edit();

?>
<form action="edit.php" method="POST">
    <input type="text" name="newName" value="<?php echo $function->row[1]; ?>"><br/>
    <input type="hidden" name="id" value="<?php echo $function->row[0]; ?>">
    <input type="submit" value=" Update "/>
</form>