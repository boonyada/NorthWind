<body>
<form action="s4insert7.php">
<input name="productid" value="1009">
<input name="productname" value="D">
<input name="supplierid" value="4444">
<input type="submit" value="s4insert7.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['productid']) || !isset($_GET['productname']) || !isset($_GET['supplierid'])) exit;
require("s1connect7.php");
$sql="insert into $tb values('".$_GET['productid']."','".$_GET['productname']."','".$_GET['supplierid']."')";
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