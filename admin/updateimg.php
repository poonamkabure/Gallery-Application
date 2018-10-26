<?php include('db.php');?> 
<?php include('head.php');?> 


  <body>
  <!-- container section start -->
  <section id="container" class="">

 
<?php include('header.php');?> 


<?php include('menu.php');?> 

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              User Enquiry Record
                          </header>
                          <table class="table table-striped border-top" id="sample_1">
  <thead>
    <tr>
   <!--<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>-->      
      <th>
        Image Name
      </th>
      <th>
        Album ID
      </th>
	  
	   <th>
        Album Name
      </th>
	  
      <th>
        Image
      </th>
	  <th>
        Update Image
      </th>
      <th>
        Delete Image
      </th>
     
    </tr>
  </thead>
  
  
  
  <tbody>  
  <?php 
   
			$sql="SELECT * FROM  `images` "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			
			for($i=0;$i<$count;$i++)
			{ 
			
				$row=mysql_fetch_array($result);
				$albumid=$row['albumid']; 
				$photonm=$row['photonm']; 
				$file=$row['photonm']; 
			
			$sql4="SELECT * FROM  `album` where albumid='$albumid' "; 
			$result4=mysql_query($sql4);
			if($result4==false ){die(mysql_error());}
			$count4=mysql_num_rows($result4);
			$row4=mysql_fetch_array($result4);
?>  
  
    <tr class="odd gradeX">
     <!--<td><input type="checkbox" class="checkboxes" value="1" /></td>-->
      <td>
       <?php echo $row['photonm'];?>
      </td>
      <td>
       <?php echo $row['albumid'];?>
      </td>
	  
	  <td>
       <?php echo $row4['name'];?>
      </td>
	  
      <td>
       <img src="../images/photos/<?php echo $row['photonm'];?>" height=70 width=70>
      </td>
	  
	  <td>
<form action="editphoto.php" method="GET">
	   <!--input type="hidden"  name="formid" value="99"></input-->
	   <input type="hidden" name="aid" value="<?php echo $albumid; ?>"></input>
	   
       <input type="submit" name="Edit" value="edit" class="btn btn-primary"></input>
</form>
      </td>
  
	  <td>
	  
	  <a href="del.php?op=delete&photonm=<?php echo $photonm;?>" style=color:red;>Delete</a>
	  
	  </form>
<!--form action="deleteimg.php" method="GET">
	   <input type="hidden"  name="formid" value="100"></input>
	    
	   <input type="hidden" name="photonm" value="<?php $photonm; ?>"></input>	 
	   <input type="hidden" name="file[]" value="<?php $file; ?>"></input>	 
	   
       <input type="submit" name="Delete" value="delete" class="btn btn-danger"></input>
</form-->	   
      </td>
     
    </tr>
   <?php }?>
    
  </tbody>
</table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- data tables js -->
    <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <!-- dynamic table cuatom script for this page only-->
    <script src="js/dynamic-table.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

    


  </body>
</html>
