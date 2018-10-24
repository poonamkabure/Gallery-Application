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
                            Update Your Profilepic
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal "  method="POST" action="profilepic.php" enctype="multipart/form-data">
                                      
									 
									<?php
									/*$sql="SELECT * FROM  `admin_user` where username='$user'"; 
									$result=mysql_query($sql);
									if($result==false ){die(mysql_error());}
									$count=mysql_num_rows($result);
									//for($i=0;$i<$count;$i++){ 
									
									$row=mysql_fetch_array($result);*/
									 ?>
									 
									 <div class="form-group ">
                                         <label for="address" class="control-label col-lg-2">Select Photo<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="file" type="file" value=""></input>
                                          </div>
                                      </div>
									
                                      </div>
                                     <br/><br/>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-primary" type="submit" value="Save"></input>
                                              
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
