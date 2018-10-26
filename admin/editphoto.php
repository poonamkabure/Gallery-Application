<?php include('db.php');?> 
<?php include('head.php');?> 


  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
<?php include('header.php');?>   
      <!--header end-->

      <!--sidebar start-->
<?php include('menu.php');?>   
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- Form validations -->              

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Add Pictures
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal "  method="POST" action="save.php" enctype="multipart/form-data">
								  
								  <?php
						
							$aid=$_GET['aid'];
							$sql="select * from album where albumid='$aid'";
							$result=mysql_query($sql);
													if($result==false ){die(mysql_error());}
													$count=mysql_num_rows($result);
													//echo $count;
													//for($k=1;$k<=$count;$k++)
										           //{
										          $row=mysql_fetch_array($result);
												$albumid=$row['albumid'];
												  
			
						$sql5="SELECT * FROM  `images` where albumid='$aid' "; 
						//echo $sql5;
							$result5=mysql_query($sql5);
							if($result5==false ){die(mysql_error());}
							$count5=mysql_num_rows($result5);
							$row5=mysql_fetch_array($result5);
							$photonm=$row5['photonm'];	
							//echo $photonm;							
			?>
				
                                    <input type="hidden" name="formid" value="99"></input> 
                                    <!--input type="hidden" name="albumid" value="<?php //echo $albumid;?>"></input--> 
                                    <input type="hidden" name="photonm" value="<?php echo $photonm;?>"></input> 
								
									
									<div class="form-group ">
                                          <label for="address" class="control-label col-lg-2" >Album Name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="pnm" value="<?php echo $row['name'];?>" type="text" readonly></input>
                                          </div>
                                      </div>
                         
								<!--div class="form-group ">
                                          <label for="address" class="control-label col-lg-2" >Image</label>
                                          <div class="col-lg-10">
								  <img src="../images/photos/<?php echo $row5['photonm'];?>" height=150 width=150>
										</div>
                               </div-->	  
									  
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Update Photo<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="thumbnail" type="file" />
                                          </div>
                                      </div>
                                      
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Update</button>
                                              
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
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
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>
