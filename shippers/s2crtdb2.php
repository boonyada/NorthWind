<?php
/* updated for php7 and php 5 on 2560-09-13 */
/* Section 1 : include */
if(file_exists("s1connect2.php")) 
  require("s1connect2.php"); 
else
  die("File not found");

/* Section 2 : main activity */
if ($dbstatus == 0) dbWork("create database $db");
qWork("create table $tb (shipperid int(4),companyname char(40),phone char(12))");
qWork("insert into $tb values('1006','Mo','000-111-2222')");
qWork("insert into $tb values('1007','Tax','000-222-3333')");
qWork("insert into $tb values('1008','Pit','000-444-5555')");
if((int)phpversion() >= 7) $connect->close(); else mysql_close($connect);
echo '<a href="s0index2.php">back</a>';

/* Section 3 : function */
function dbWork($sql) {
	global $db,$host,$uname,$upass,$connect;	
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else {
			echo "$sql : succeeded<br/>";
			$connect = new mysqli($host, $uname, $upass, $db);
		}
	} else { 
		if (!$result=mysql_query($sql,$connect))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
function qWork($sql) {
	global $connect,$db;
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else 
			echo "$sql : succeeded<br/>";
	} else {   
		if (!$result=mysql_db_query($db,$sql))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
?>