<?php
//delete.php

include("./config.php");
// $query = mysql_query("DELETE FROM users WHERE id = '".$_GET['id']."'") or die(mysql_error());
$query = mysqli_query($link,"Update users SET status='Deleted' WHERE id ='".$_GET['id']."'") or die(mysqli_error());

if(!$query){
	echo "Record not deleted!";
}
else{
	echo"Record successfully deleted";
}

echo "<a href='../logout.php'><input type='button' value='Back'/></a>";
?>