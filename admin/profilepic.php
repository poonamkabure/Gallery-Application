<?php


session_start();
if(isset($_SESSION['username']))
{
	$user=$_SESSION['username'];
	//echo $user;	
}



include('db.php');
//$Uid = $_POST['Uid'];
//$id1=$_SESSION['username'];
//$file=$_POST["file"];
//echo $file;

   $target_dir="profile/";
   
  
  


            $target_file=$target_dir.basename($_FILES["file"]["name"]);
			
   $uploadok=1;
   $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
   
   if(isset($_POST["Save"]));
   {
       $check=getimagesize($_FILES["file"]["tmp_name"]);
       if($check!==False)
       {
           echo "File is an image".$check["mime"].".";
           $uploadOk=1;
           
       }
       else
       {
        echo "file is not an img";
           $uploadOk=0;
            
       }
   }
      if(file_exists($target_file))
      {
         // echo "sorry,file Already exists";
          //$uploadOk=0;
      }
 
      if($_FILES["file"]["size"]>500000000)
      {
          echo "sorry,Your file is too large";
          $uploadOk=0;
      }
      
    
          if($uploadOk==0)
          {
              echo "Sorry,Your file was not uploaded";
          }
          else
          {
              if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
              {
                  echo "The_file".basename($_FILES["file"]["name"])."base been uploaded";
              }
              else
              {
                  echo "sorry,there was an error uploading your file";
              }
			  
			 
      }
 

      

          
      $x=basename($_FILES["file"]["name"]);
$query="Update `admin_user` SET photo='$x' where username='$user'";

            $result=mysql_query($query) or die("Query failed:".mysql_error());
            echo $query;
            $num=mysql_affected_rows();
            if($num==1)
            {
               // echo "Photo Uploaded";
            }
     //header('location:myprofile.php?sendmsg=Thanku ! Your Profile Is Completed &clr=success');
    // header('location:profile1.php');
    echo "<script type='text/javascript'>
		alert('Your profilepic Is updated !');
			window.location.assign('dashbord.php');
			</script>";
