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
        Album ID
      </th>
      <th>
        Album Name
      </th>
	  
	   <th>
        Image Name
      </th>
	  
      <th>
        Image
      </th>
	  <th>
        Update Image
      </th>
    
     
    </tr>
  </thead>
  
  
  
  <tbody>  
  <?php 
   
			$sql="SELECT * FROM  `album` "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			
			for($i=0;$i<$count;$i++)
			{ 
			
				$row=mysql_fetch_array($result);
				$albumid=$row['albumid']; 
				//$photonm=$row['photonm']; 
				//$file=$row['photonm']; 
			
?>  
  
    <tr class="odd gradeX">
     <!--<td><input type="checkbox" class="checkboxes" value="1" /></td>-->
      <td>
       <?php echo $row['albumid'];?>
      </td>
      <td>
       <?php echo $row['name'];?>
      </td>
	  
	  <td>
       <?php echo $row['photo'];?>
      </td>
	  
      <td>
       <img src="../images/img/<?php echo $row['photo'];?>" height=70 width=70>
      </td>
	  
	  <td>
<form action="editalbumphoto.php" method="GET">
	   <!--input type="hidden"  name="formid" value="99"></input-->
	   <input type="hidden" name="aid" value="<?php echo $albumid; ?>"></input>
	   
       <input type="submit" name="Edit" value="edit" class="btn btn-primary"></input>
</form>
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
