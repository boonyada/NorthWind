<body>
<form action="s6update8.php">
<input name="updsuppid" value="1003">
<input name="updname" value="chula">
<input name="updcontact" value="nation">
<input type="submit" value="s6update.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updsuppid'])) { exit; }
require("s1connect8.php");
$sql="update $tb set ";
$sql.="supplierid='". $_GET['updsuppid'] ."', ";
$sql.="companyname='". $_GET['updname'] ."', ";
$sql.="contactname='". $_GET['updcontact'] ."' ";
$sql.="where supplierid=". $_GET['updsuppid'] ."";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index8.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index8.php'/>";
	mysql_close($connect);
}
?>
</body>