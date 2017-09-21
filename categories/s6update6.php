<body>
<form action="s6update6.php">
<input name="updcatid" value="1001">
<input name="updcatname" value="producta">
<input name="upddesc" value="AAAAAA">
<input type="submit" value="s6update6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updcatid'])) { exit; }
require("s1connect6.php");
$sql="update $tb set ";
$sql.="categoryid='". $_GET['updcatid'] ."', ";
$sql.="categoryname='". $_GET['updcatname'] ."', ";
$sql.="description='". $_GET['upddesc'] ."' ";
$sql.="where categoryid=". $_GET['updcatid'] ."";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index6.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index6.php'/>";
	mysql_close($connect);
}
?>
</body>