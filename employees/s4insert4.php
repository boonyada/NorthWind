<body>
<form action="s4insert4.php">
<input name="employeeid" value="1010">
<input name="lastname" value="kmit">
<input name="firstname" value="nation">
<input type="submit" value="s4insert4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['employeeid']) || !isset($_GET['lastname']) || !isset($_GET['firstname'])) exit;
require("s1connect4.php");
$sql="insert into $tb values(
'".$_GET['employeeid']."',
'".$_GET['lastname']."',
'".$_GET['firstname']."')";
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