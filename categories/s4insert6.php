<body>
<form action="s4insert6.php">
<input name="categoryid" value="1004">
<input name="categoryname" value="productd">
<input name="description" value="DDDDDD">
<input type="submit" value="s4insert6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['categoryid']) || !isset($_GET['categoryname']) || !isset($_GET['description'])) exit;
require("s1connect6.php");
$sql="insert into $tb values('".$_GET['categoryid']."','".$_GET['categoryname']."','".$_GET['description']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
</body>