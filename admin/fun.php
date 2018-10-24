<?php 
include('db.php');


function contact()
{
	//$mails=$mails;
	$sql="SELECT * FROM  `contact` "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}

function categories()
{
	//$mails=$mails;
	$sql="SELECT * FROM  `album` "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			return $count;
}
?>