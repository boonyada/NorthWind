<body>
<form action="s6update5.php">
<input name="updid" value="1009">
<input name="updproduct" value="111">
<input name="updunit" value="50">
<input type="submit" value="s6update5.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("s1connect5.php");
$sql="update $tb set ";
$sql.="orderid='". $_GET['updid'] ."', ";
$sql.="productid='". $_GET['updproduct'] ."', ";
$sql.="unitprice='". $_GET['updunit'] ."' ";
$sql.="where orderid=". $_GET['updid'] ."";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index5.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index5.php'/>";
	mysql_close($connect);
}
?>
</body>