<body>
<form action="s4insert3.php">
<input name="orderid" value="1009">
<input name="customerid" value="Kae">
<input name="employeeid" value="99999">
<input type="submit" value="s4insert3.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['orderid']) || !isset($_GET['customerid']) || !isset($_GET['employeeid'])) exit;
require("s1connect3.php");
$sql="insert into $tb values('".$_GET['orderid']."','".$_GET['customerid']."','".$_GET['employeeid']."')";
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