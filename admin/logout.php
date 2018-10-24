<?php
include('db.php');
session_start();
if(isset($_SESSION['username']))
{
	$user=$_SESSION['username'];
	//echo $user;	
}
else
{
	$user="";
}	
	/*$sql="update register set online='0' where userid='$user'";
	mysql_query($sql);
	$sql1="update bchat set msgfrmonline='0' where msgfrm='$user'";
	mysql_query($sql1);
	$sql2="update bchat set msgtoonline='0' where msgto='$user'";
	mysql_query($sql2);
	echo $sql;*/
session_unset(); 
session_destroy();

header('location: index.php');

?>