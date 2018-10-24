<?php include('db.php');?> 
<?php include('head.php');?> 

  <body>

  <section id="container" class="">
  
<?php include('header.php');?>     
      
<?php include('menu.php');?> 
    <section id="main-content">
          <section class="wrapper"> 

                      <section class="panel profile-nav alt">
                        <div class="profile-widget-img" width="100%">
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
                                          <b><h5>Name</h5></b>
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
                      </section>    
                      </section>    
                      </section>    