<?php
include('db.php');

if($_GET['op']=="delete")
	
{
	$photonm=$_GET['photonm'];
	
	$query=mysql_query("delete from images where photonm='$photonm'");
	
	if($query)
	{
		echo "<script type='text/javascript'>
		alert('Your Image Is Deleted !');
		window.location.assign('updateimg.php');
		</script>";
		
		unlink("../images/photos/$photonm");
	}
	
	
	else
	{
		
	echo "<script type='text/javascript'>
		alert('Your Image Is not Deleted !');
		window.location.assign('updateimg.php');
		</script>";
	
	}
}	



?>