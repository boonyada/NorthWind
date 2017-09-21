<body>
<form action="s4insert5.php">
<input name="orderid" value="1009">
<input name="productid" value="103">
<input name="unitprice" value="40">
<input type="submit" value="s4insert5.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['orderid']) || !isset($_GET['productid']) || !isset($_GET['unitprice'])) exit;
require("s1connect5.php");
$sql="insert into $tb values('".$_GET['orderid']."','".$_GET['productid']."','".$_GET['unitprice']."')";
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