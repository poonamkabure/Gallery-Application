<?php 
include('db.php');
//include('head.php');

session_start();
if(isset($_SESSION['username']))
{
	$user=$_SESSION['username'];
	//echo $user;	
}


$formid=$_POST['formid'];
if($formid==1)
	{
	
		//$category=$_POST['category'];
		//$photo_nm=$_POST['pnm'];
		$albumid=$_POST['albumid'];
		
		
		 $name = $_FILES['thumbnail']['name'];
		 
								$extension = explode('.', $name);
								$extension = end($extension);
								$type = $_FILES['thumbnail']['type'];
								$size = $_FILES['thumbnail']['size'] /1024/1024;
								$nm1 = date('dmY_His');
								$random_name =$nm1;
								$tmp = $_FILES['thumbnail']['tmp_name'];
								//$category = $_POST['category'];
								$target_dir = "../images/photos/";
								//$des = $_POST['des'];
								//$sub_cat = $_POST['sub_cat'];
								$file = $random_name.".".$extension;
								
								
								if ((strtolower($type) != "image/jpeg") && (strtolower($type) != "image/png"))
								{
									$message= "Image Format Not Supported !";

								}
								
								
									
							else
								{
									move_uploaded_file($tmp, '../images/photos/'.$random_name.'.'.$extension);	
									$result= mysql_query("SET NAMES utf8");
								
		$sql="insert into images(albumid,photonm)values('$albumid','$file')";
	   mysql_query($sql);
	 // echo $sql;
		//$message="Image Uploaded Successfully!";
		//echo $message;
		//header('Location:post.php');
		echo "<script type='text/javascript'>
		alert('Your Image Is Uploaded !');
			window.location.assign('uploadphoto.php');
			</script>";
	}
								
							
	}
	
if($formid==2)
	{
	$name=$_POST['name'];	
	$address=$_POST['address'];	
	$mobile=$_POST['mobile'];	
	$email=$_POST['email'];	
	$username=$_POST['username'];	
	$password=$_POST['password'];	
		
	$sql="UPDATE admin_user set fullname='$name',address='$address',mobile='$mobile',email='$email',username='$username',password='$password' where username='$user'";	
	mysql_query($sql);	
	echo $sql;
		
	echo "<script type='text/javascript'>
		alert('Your profile Is Updated !');
			window.location.assign('dashbord.php');
			</script>";
		
	}


$formid=$_POST['formid'];
if($formid==9)
	{
	
		$category=$_POST['category'];
		
		
		 $name = $_FILES['thumbnail']['name'];
		 
								$extension = explode('.', $name);
								$extension = end($extension);
								$type = $_FILES['thumbnail']['type'];
								$size = $_FILES['thumbnail']['size'] /1024/1024;
								$nm1 = date('dmY_His');
								$random_name =$nm1;
								$tmp = $_FILES['thumbnail']['tmp_name'];
								//$category = $_POST['category'];
								$target_dir = "../wemade/";
								//$des = $_POST['des'];
								//$sub_cat = $_POST['sub_cat'];
								$file = $random_name.".".$extension;
								
								
								if ((strtolower($type) != "image/jpeg") && (strtolower($type) != "image/png"))
								{
									$message= "Image Format Not Supported !";

								}
								
								
									
							else
								{
									move_uploaded_file($tmp, '../wemade/'.$random_name.'.'.$extension);	
									$result= mysql_query("SET NAMES utf8");
								
		//$sql="insert into wemade(category,photo)values('$category','$file')";
		$sql="UPDATE wemade SET category='$category',photo='$file' where category='$category'";
	   mysql_query($sql);
	  // echo $sql;
		//$message="Image Uploaded Successfully!";
		//echo $message;
		//header('Location:post.php');
		echo "<script type='text/javascript'>
		alert('Your Image Is Uploaded !');
			window.location.assign('dashbord.php');
			</script>";
	}
								
							
	}
	
	
	
	if($formid==111)
	{
	
		//$category=$_POST['category'];
		$category_nm=$_POST['pnm'];
		$description=$_POST['description'];
		$albumid=$_POST['aid'];
		
		
		 $name = $_FILES['thumbnail']['name'];
		 
								$extension = explode('.', $name);
								$extension = end($extension);
								$type = $_FILES['thumbnail']['type'];
								$size = $_FILES['thumbnail']['size'] /1024/1024;
								$nm1 = date('dmY_His');
								$random_name =$nm1;
								$tmp = $_FILES['thumbnail']['tmp_name'];
								//$category = $_POST['category'];
								$target_dir = "../images/img/";
								//$des = $_POST['des'];
								//$sub_cat = $_POST['sub_cat'];
								$file = $random_name.".".$extension;
								
								
								if ((strtolower($type) != "image/jpeg") && (strtolower($type) != "image/png"))
								{
									$message= "Image Format Not Supported !";

								}
								
								
									
							else
								{
									move_uploaded_file($tmp, '../images/img/'.$random_name.'.'.$extension);	
									$result= mysql_query("SET NAMES utf8");
								
		$sql="insert into album(albumid,name,description,photo)values('$albumid','$category_nm','$description','$file')";
	   mysql_query($sql);
	  //echo $sql;
		//$message="Image Uploaded Successfully!";
		//echo $message;
		//header('Location:post.php');
		echo "<script type='text/javascript'>
		alert('Your Album Is Created !');
	    window.location.assign('dashbord.php');
	 </script>";
	}
								
	}

	if($formid==99)
	{
	
		//$category=$_POST['category'];
		//$category_nm=$_POST['pnm'];
		//$description=$_POST['description'];
		//$albumid=$_POST['albumid'];
		$photonm=$_POST['photonm'];
		
		
		 $name = $_FILES['thumbnail']['name'];
		 
								$extension = explode('.', $name);
								$extension = end($extension);
								$type = $_FILES['thumbnail']['type'];
								$size = $_FILES['thumbnail']['size'] /1024/1024;
								$nm1 = date('dmY_His');
								$random_name =$nm1;
								$tmp = $_FILES['thumbnail']['tmp_name'];
								//$category = $_POST['category'];
								$target_dir = "../images/photos/";
								//$des = $_POST['des'];
								//$sub_cat = $_POST['sub_cat'];
								$file = $random_name.".".$extension;
								
								
								if ((strtolower($type) != "image/jpeg") && (strtolower($type) != "image/png"))
								{
									$message= "Image Format Not Supported !";

								}
								
								
									
							else
								{
									move_uploaded_file($tmp, '../images/photos/'.$random_name.'.'.$extension);	
									$result= mysql_query("SET NAMES utf8");
								
		$sql="update images set photonm='$file' where photonm='$photonm'";
	   mysql_query($sql);
	  //echo $sql;
		//$message="Image Uploaded Successfully!";
		//echo $message;
		//header('Location:post.php');
		
		echo "<script type='text/javascript'>
		alert('Your Image Is Updated !');
	    window.location.assign('dashbord.php');
	 </script>";   
	}
	}
	
	
	

	if($formid==100)
	{
	
		//$category=$_POST['category'];
		//$category_nm=$_POST['pnm'];
		//$description=$_POST['description'];
		//$albumid=$_POST['albumid'];
		$photonm=$_POST['photonm'];
		
		
		 $name = $_FILES['thumbnail']['name'];
		 
								$extension = explode('.', $name);
								$extension = end($extension);
								$type = $_FILES['thumbnail']['type'];
								$size = $_FILES['thumbnail']['size'] /1024/1024;
								$nm1 = date('dmY_His');
								$random_name =$nm1;
								$tmp = $_FILES['thumbnail']['tmp_name'];
								//$category = $_POST['category'];
								$target_dir = "../images/photos/";
								//$des = $_POST['des'];
								//$sub_cat = $_POST['sub_cat'];
								$file = $random_name.".".$extension;
								
								
								if ((strtolower($type) != "image/jpeg") && (strtolower($type) != "image/png"))
								{
									$message= "Image Format Not Supported !";

								}
								
								
									
							else
								{
									move_uploaded_file($tmp, '../images/photos/'.$random_name.'.'.$extension);	
									$result= mysql_query("SET NAMES utf8");
								
		$sql="delete from images where photonm='$photonm'";
	   mysql_query($sql);
	  //echo $sql;
		//$message="Image Uploaded Successfully!";
		//echo $message;
		//header('Location:post.php');
		
		echo "<script type='text/javascript'>
		alert('Your Image Is Updated !');
	    window.location.assign('dashbord.php');
	 </script>";   
	}
	}	
	
	
	
	
	
	
	
	
	
	
	
?>