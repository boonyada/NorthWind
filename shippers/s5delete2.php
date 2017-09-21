<?php
/* updated for php7 and php 5 on 2560-09-13 */
$myForm = '<body>
<form action="s5delete2.php">
<input name="delid" value="1001">
<input type="submit" value="s5delete2.php">
</form>';
if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("s1connect2.php");
$sql="delete from $tb ";
$sql.="where shipperid ='".$_GET['delid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: s0index2.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location: s0index2.php");
	mysql_close($connect);
}
?>
</body>