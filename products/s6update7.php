<body>
<form action="s6update7.php">
<input name="updproid" value="1008">
<input name="updproname" value="E">
<input name="updsupp" value="5555">
<input type="submit" value="s6update7.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updproid'])) { exit; }
require("s1connect7.php");
$sql="update $tb set ";
$sql.="productid='". $_GET['updproid'] ."', ";
$sql.="productname='". $_GET['updproname'] ."', ";
$sql.="supplierid='". $_GET['updsupp'] ."' ";
$sql.="where productid=". $_GET['updproid'] ."";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index7.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=s0index7.php'/>";
	mysql_close($connect);
}
?>
</body>