<?php
       include('db.php');
		$myusername = $_POST['Name'];//		
		$mypassword = $_POST['pass'];//	
		$myusername = stripslashes($myusername);
        $mypassword = stripslashes($mypassword);
        $myusername = mysql_real_escape_string($myusername);
        $mypassword = mysql_real_escape_string($mypassword);
        
    	if($myusername=='' || $mypassword=='')
		{
		
			 header('Location: ../index.html?key=Blank Password');
		}		
		$sql="SELECT * FROM `admin` WHERE `usernm`='$myusername' AND `pass`= '$mypassword'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		 if($count==1)
            {
				   session_start();
                    $_SESSION['username'] = $myusername;
					header('Location: ../dashbord.html');
            }		
		else
		{
			  header('Location: ../index.html');
		}
	
?>