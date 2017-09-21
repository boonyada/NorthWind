<body>
<form action="s6update2.php">
<input name="updid" value="1000">
<input name="updname" value="tangmo">
<input name="updphone" value="111-111-1111">
<input type="submit" value="s6update2.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("s1connect2.php");
$sql="update $tb set ";
$sql.="shipperid='". $_GET['updid'] ."', ";
$sql.="companyname='". $_GET['updname'] ."', ";
$sql.="phone='". $_GET['updphone'] ."' ";
$sql.="where shipperid=". $_GET['updid'] ."";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index2.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index2.php'/>";
	mysql_close($connect);
}
?>
</body>