<?php 
include('header.php');
?>

<body class="index">
    
    
    <!-- Styleswitcher
================================================== -->
        <div class="colors-switcher">
            <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>        
                <ul class="colors-list">
                    <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
                    <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
                    <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
                    <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>
                    
                    <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
                    <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>
                    
                </ul>

        </div>  
<!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">A One Cable Network BD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#" target="_blank">Server</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#feature">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about-us">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#branches">Branches</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#service">feature</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#pricing">Our Packages</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#payment">Payment</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>    
    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="images/header-bg-1.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                <span><strong> A One </strong> Cable Network BD</span>
                            </h1>
                            <p class="animated2">We Provide Quality Internet 
                                Service as per your Desire</p>
                        </div>
                    </div>
                </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->    
    <!-- Start Service Section -->
    <?php
    $connection = mysqli_connect("localhost","root","","aonecablenetwork_adminpanel");
    $query= "SELECT * from services";
    $query_run = mysqli_query($connection, $query);

    echo "<section id='feature' class='feature-section'>
                <div class='container'>
                    <div class='row'>
                        ";

    while($row = $query_run->fetch_assoc()) {
        
        $dbheader = $row["header"];
        $dbbody = $row["body"];

        echo "<div class='col-md-3 col-sm-6 col-xs-12'>
                <div class='feature'>
                    <i class='fa fa-magic'></i>
                    <div class='feature-content'>
                        <h4>". $dbheader ."</h4>
                        <p>" . $dbbody . "</p>
                    </div>
                </div></div>";
    }
    
    echo "</div></div></section>";
?>

    <section id="about-us" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>About Us</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                </div>
            </div>
<?php
    $connection = mysqli_connect("localhost","root","","aonecablenetwork_adminpanel");
    $query= "SELECT * from aboutus";
    $query_run = mysqli_query($connection, $query);
    
    echo "<div class='row'>";

    while($row = $query_run->fetch_assoc()) {
        
        $dbtitle = $row["title"];
        $dbdescription = $row["description"];
        $imgLoc = $row['image'];

                          
             echo  "<div class='col-md-4'>
                    <div class='welcome-section text-center'>
                        <img src= 'admin/about/$imgLoc' class='img-responsive' alt='..'>
                        <h4>". $dbtitle. "</h4>
                        <div class='border'></div>
                        <p>". $dbdescription ."</p>
                    </div>
                </div>";}       
        ?>
 </div></div>
    </section>
  

    <!--start of branches section -->
    <section id="branches" class="branches-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Our Branches</h3>
                        <p>Contact Our Nearest Branch</p>
                    </div>                        
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                    <!-- Start branches items -->
                    <ul id="portfolio-list">
                        <li>
                            <div class="portfolio-item">
                                <img src="images/portfolio/img1.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>Mokim Katara</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="images/portfolio/img2.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>Title</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="images/portfolio/img3.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>Title</h4>
                                </div>
                            </div>
                        </li>
                        
                        
                    </ul>
                    <!-- End Portfolio items -->
                </div>
            </div>
        </div>
    </section>

         <!-- Start Feature Section -->
        <section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Feature</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                </div>
                <!-- feature section denoted by php and calling from sql -->
    <?php
    $connection = mysqli_connect("localhost","root","","aonecablenetwork_adminpanel");
    $query= "SELECT * from feature";
    $query_run = mysqli_query($connection, $query);

     echo "<div class='row'>";

     while($row = $query_run->fetch_assoc()) {
        
        $dbheader = $row["header"];
        $dbbody = $row["body"];

                echo "<div class='col-md-4 col-sm-6 col-xs-12'>
                        <div class='feature-2'>
                            <div class='media'>
                                <div class='pull-left'>
                                    <i class='fa fa-joomla'></i>
                                    <div class='border'></div>
                                </div>
                                <div class='media-body'>
                                    <h4 class='media-heading'>". $dbheader ."</h4>
                                    <p>". $dbbody ."</p>
                                </div>
                            </div>
                        </div>
                    </div>";}
?>
 </div></div>           
</section>

    <!-- Start Pricing Table Section -->
    <div id="pricing" class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Our Packages & Price</h3>
                            <p class="white-text">Choose your perfect package</p>
                        </div>
                    </div>
                </div>
            </div>
<?php
    $connection = mysqli_connect("localhost","root","","aonecablenetwork_adminpanel");
    $query= "SELECT * from packages";
    $query_run = mysqli_query($connection, $query);   

            echo "<div class='row'>
                        
                <div class='pricing'>";

        while($row = $query_run->fetch_assoc()) {
        
        $dbheader = $row["header"];
        $dbprice = $row["price"];
        $dbinter = $row["Inter"];
        $dbbw = $row["BW"];
        $dbtype = $row["type"];
        $dbquantity = $row["quantity"];
                        
           echo "<div class='col-md-12'>
                            <div class='pricing-table'>
                                <div class='plan-name'>
								    <h3>". $dbheader ."</h3>
                                </div>
                                <div class='plan-price'>
                                    <div class='price-value'>". $dbprice ."</div>
                                    <div class='interval'>". $dbinter ."</div>
                                </div>
                                <div class='plan-list'>
                                    <ul>
                                        <li>Bandwidth Speed >". $dbbw ."</li>
                                        <li>Youtube & Facebook >". $dbtype ."</li>
                                        <li>FTP & BDIX >". $dbquantity ."</li>
                                    </ul>
                                </div>
                                <div class='plan-signup'>
                                    <a href='#contact' class='btn-system btn-small'>Call Now</a>
                                </div>
                            </div>
                        </div>";}
?>
 </div></div>       
                        
    <!-- End Pricing Table Section -->  
    <!-- Start Payment -->
    <section>
        <hr>
        <div class="container">
            <div id="payment" class="section-title text-center">
                <h3>Payment</h3>
                    <p class="black-text">Pay your bill with CASH or BKASH!</p>
            </div>
            <img src="images/payment.png" class="img-fluid" alt="payment image" style="width: 100%">
            </div>
        </div>
        <hr>
    </section>
    <!-- End Payment -->
    
    <!-- Start Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-cloud-upload"></i>
                        <div class="timer" id="item1" data-to="7" data-speed="5000"></div>
                        <h5>SUPPORT TEAM</h5>                               
                      </div>
                    </div>  
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="3" data-speed="5000"></div>
                        <h5>Resseler</h5>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-code"></i>
                        <div class="timer" id="item3" data-to="3" data-speed="5000"></div>
                        <h5>HAPPY CORPORATES</h5>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-male"></i>
                        <div class="timer" id="item4" data-to="1000" data-speed="5000"></div>
                        <h5>Happy clients</h5>                               
                      </div>
                    </div>
            </div>
        </div>
    </section>

    <section id="team" class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Our Team</h3>
                            <p>We have a dynamic and qualified team</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                   <div id='team-section'>
                       <div class='our-team'>
         <?php
              $connection = mysqli_connect("localhost","root","","aonecablenetwork_adminpanel");
              $query= "SELECT * from team";
              $query_run = mysqli_query($connection, $query); 

              while($row = $query_run->fetch_assoc()) {
        
                $dbname = $row["name"];
                $dbtitle = $row["title"];
                $imgLoc = $row["image"];

                        echo "      <div class='team-member'>
                                        <img src='admin/team/$imgLoc' class='img-responsive' alt=''>
                                        <div class='team-details'>
                                            <h4>".$dbname."</h4>
                                            <p>".$dbtitle."</p>
                                            <ul>
                                                <li><a href='#'><i class='fa fa-facebook'></i></a></li>
                                                <li><a href='#'><i class='fa fa-twitter'></i></a></li>
                                                <li><a href='#'><i class='fa fa-linkedin'></i></a></li>
                                            </ul>
                                    </div>
                                                                  
                    </div>";}
         ?> 
                        </div>
                    </div>
                </div>
             </div>
        </div>
     </section>

            
    <section id="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Our Honorable Clients</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
           
            <div class='row'>
            <div class='clients'>
            <?php
            

$connection = mysqli_connect("localhost","root","","aonecablenetwork_adminpanel");
$query= "SELECT * from client";
$query_run = mysqli_query($connection, $query); 
while($row = $query_run->fetch_assoc()) {
       

   $imgLoc = $row["logo"];

           echo " 
                   <div class='col-md-12'>
                       <img src='admin/logo/$imgLoc' alt='Something'> 
                                       
               </div>";
           
           }
               ?>
               </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <?php
    include('footer.php');
    ?>