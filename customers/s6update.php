<body>
<form action="s6update.php">
<input name="updid" value="1003">
<input name="updname" value="chula">
<input name="updcontact" value="nation">
<input type="submit" value="s6update.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("s1connect.php");
$sql="update $tb set ";
$sql.="customerid='". $_GET['updid'] ."', ";
$sql.="companyname='". $_GET['updname'] ."', ";
$sql.="contactname='". $_GET['updcontact'] ."' ";
$sql.="where customerid=". $_GET['updid'] ."";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index.php'/>";
	mysql_close($connect);
}
?>
</body>