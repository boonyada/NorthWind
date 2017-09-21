<body>
<form action="s6update3.php">
<input name="updid" value="1006">
<input name="updcust" value="chula">
<input name="updemploy" value="10101">
<input type="submit" value="s6update3.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("s1connect3.php");
$sql="update $tb set ";
$sql.="orderid='". $_GET['updid'] ."', ";
$sql.="customerid='". $_GET['updcust'] ."', ";
$sql.="employeeid='". $_GET['updemploy'] ."' ";
$sql.="where orderid=". $_GET['updid'] ."";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index3.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index3.php'/>";
	mysql_close($connect);
}
?>
</body>