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
                                    <input type="hidden" name="formid" value="2"></input>   
									 
									<?php
									$sql="SELECT * FROM  `admin_user` where username='$user'"; 
									$result=mysql_query($sql);
									if($result==false ){die(mysql_error());}
									$count=mysql_num_rows($result);
									//for($i=0;$i<$count;$i++){ 
									
									$row=mysql_fetch_array($result);
									 ?>
									 
									 <div class="form-group ">
                                         <label for="address" class="control-label col-lg-2">Name<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="name" type="text" value="<?php echo $row['fullname'];?>"></input>
                                          </div>
                                      </div>
									 <div class="form-group ">
                                         <label for="address" class="control-label col-lg-2">Address<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="address" type="text" value="<?php echo $row['address'];?>"/>
                                          </div>
                                      </div>
									  <div class="form-group ">
                                         <label for="address" class="control-label col-lg-2">Contact<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="mobile" type="text" value="<?php echo $row['mobile'];?>" />
                                          </div>
                                      </div>
									  <div class="form-group ">
                                         <label for="address" class="control-label col-lg-2">Email<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="email" type="text" value="<?php echo $row['email'];?>"/>
                                          </div>
                                      </div>
									  <div class="form-group ">
                                         <label for="address" class="control-label col-lg-2">Username<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="username" type="text" value="<?php echo $row['username'];?>"/>
                                          </div>
                                      </div>
									  <div class="form-group ">
                                         <label for="address" class="control-label col-lg-2">Old Password<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="" type="text" value="<?php echo $row['password'];?>" readonly></input>
                                          </div>
                                      </div>
									  <div class="form-group ">
                                         <label for="address" class="control-label col-lg-2">Enter New Password<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control"  name="password" type="password"></input>
                                          </div>
                                      </div>
                                     
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-primary" type="submit" value="submit"></input>
                                              
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
