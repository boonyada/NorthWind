<body>
<form action="s6update4.php">
<input name="updid" value="1006">
<input name="updlname" value="chula">
<input name="updfname" value="nation">
<input type="submit" value="s6update4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("s1connect4.php");
$sql="update $tb set ";
$sql.="employeeid='". $_GET['updid'] ."', ";
$sql.="lastname='". $_GET['updlname'] ."', ";
$sql.="firstname='". $_GET['updfname'] ."' ";
$sql.="where employeeid=". $_GET['updid'] ."";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index4.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index4.php'/>";
	mysql_close($connect);
}
?>
</body>