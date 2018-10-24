<?php include('db.php');?> 
<?php include('head.php');?> 
<?php include('fun.php');?> 

  <body>

  <section id="container" class="">
  
<?php include('header.php');?>     
      
<?php include('menu.php');?> 
     
     		<?php 
			$sql="SELECT * FROM  `admin_user` "; 
			$result=mysql_query($sql);
			if($result==false ){die(mysql_error());}
			$count=mysql_num_rows($result);
			//for($i=0;$i<$count;$i++){ 
			$row=mysql_fetch_array($result);
?>			
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row state-overview">
                
               
			   <!-- statics start -->
                <div class="state col-lg-12">
                    <div class="row">
                      <!--div class="col-lg-4 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_globe"></i>
                              </div>
                              <div class="value">
                                  <h1><?php //echo contact();?></h1>
                                  <p>All enquiries</p>
                              </div>
                          </section>
                      </div-->
                      <div class="col-lg-4 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_tags_alt"></i>
                              </div>
                              <div class="value">
                                  <h1><?php echo categories();?></h1>
                                  <p>All Albums</p>
                              </div>
                          </section>
                      </div>
                      
                      
                    </div>
				</div>    
               </div>

              <div class="row" >
                  <!--div class="col-lg-8">
                      <section class="panel">
                          <div class="panel-body">
                              <div id="calendar" class="has-toolbar"></div>
                          </div>
                      </section>
                  </div-->
                  <div class="col-lg-4">

                      <!--profile widget2 start-->
                      <section class="panel profile-nav alt" style="margin-top:-100px;">
                        <div class="profile-widget-img">
                          <div class="user-heading alt bg-layer ">                                
                              <a href="#">
                                  <img alt="" class="img-responsive" src="profile/<?php echo $row['photo'];?>" style="height:140px; width:140px;">
                              </a>
                              <h1><?php echo $user;?></h1>
                              <p><?php echo $row['email'];?></p>
                              </div>
                          </div>

                          <div class="weather-category profile-widget-data">
                                  <ul>
                                      <li class="active">
                                          <h5>Name</h5>
                                          <?php echo $row['fullname'];?>
                                      </li>
                                       <li class="active">
                                          <h5>Address</h5>
                                          <?php echo $row['address'];?>
                                      </li>
                                       <li class="active">
                                          <h5>Contact</h5>
                                          <?php echo $row['mobile'];?>
                                      </li>
                                  </ul>
                            </div>
                      </section>    
            </div>
         </div>
         </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>

  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
