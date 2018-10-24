<?php include('db.php');

  // Define $myusername and $mypassword 
        $myusername=$_POST['usnm']; 
        $mypassword=$_POST['password']; 

        // To protect MySQL injection (more detail about MySQL injection)
        $myusername = stripslashes($myusername);
        $mypassword = stripslashes($mypassword);
        $myusername = mysql_real_escape_string($myusername);
        $mypassword = mysql_real_escape_string($mypassword);
        //echo  $myusername;
        //echo  $mypassword;
		$sql="SELECT * FROM admin_user WHERE username='$myusername' AND password='$mypassword'";
		//echo $sql;or compid='$myusername'
        $result=mysql_query($sql);
		if($result==false ){die(mysql_error());}
         $count = (mysql_num_rows($result));
            if(($count==1))
            {
					$row=mysql_fetch_array($result);
					//$acctype=$row['acctype'];         
                    session_start();
                    $_SESSION['username'] = $myusername;
                    //$_SESSION['mid'] = $acctype;
                   // ini_set('display_errors','On');
					header('Location: dashbord.php');
		
			}
       
			else
			{
				//ini_set('display_errors','On');
				header('Location: index.php?msg=Please Enter Correct Details');
				
			}
        
ob_end_flush();

?>
 	