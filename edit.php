<?php
	require_once 'db.php';

	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysqli_query($conn, "SELECT * FROM contacts WHERE id='$id'");
		$row= mysqli_fetch_array($res);
	}

	if( isset($_POST['newName']) )
	{
		$newName = $_POST['newName'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE contacts SET name='$newName' WHERE id='$id'";
		$res 	 = mysqli_query($conn, $sql) 
                                    or die("Could not update");
		echo "<meta http-equiv='refresh' content='0;url=read.php'>";
	}

?>
<form action="edit.php" method="POST">
<input type="text" name="newName" value="<?php echo $row[1]; ?>"><br />
<input type="hidden" name="id" value="<?php echo $row[0]; ?>">
<input type="submit" value=" Update "/>
</form>