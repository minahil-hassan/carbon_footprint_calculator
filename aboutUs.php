<?php

require_once('config.inc.php');

$hostname = 'dbhost.cs.man.ac.uk';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=2022_comp10120_y7", $database_user, $database_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}


session_start();

?>

<!DOCTYPE html>
<html class="no-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msvalidate.01" content="B91446B2F3FBE1C00E02A5EBD3A8ABA7">
  <link rel="icon" type="image/x-icon" href="images/carbonfootprint.png">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-min.css">
  <link rel="stylesheet" type="type/css" href="css/font-awesome-min.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/avada.css">
  <link rel="stylesheet" href="css/style_test.css">
  <script type="text/javascript" src="javascript/modernizr-custom-min.js"></script>
  <meta name="author" content="Carbon Footprint Ltd using RADsite CMS (https://www.radsite.co.uk/)">
  <meta name="copyright" content="Copyright Carbon Footprint Ltd and RADsite Ltd - All Rights Reserved">
  <title>CarbNone.com - Home of Carbon Footprinting</title>
  <meta name="description" content="Leading online carbon footprint calculation tools and information to help reduce and offset your emissions - for business and individuals.      ">
  <meta name="keywords" content="calculations, carbon, offset, offsets, offsetting, neutral, neutrality, management, PAS2060, business, corporate, sustainability, csr, footprint, reduce, reduction, emissions, CO2, CO2e, carbon footprint, greenhouse gas, GHG, footprinting">
 
</head>
<body>
<nav id="mainNavigation" class="navbar navbar-dafault main-navigation">
  <div class="container">
    <div class="nav-header">
      <div class="logo">
        <a href="landingpage.php"><img src="images/logo-removebg-preview.png" class="img-responsive" alt="Carbon Footprint logo" width="200" height="200"></a>
      </div>
      <?php if(isset($_SESSION['user_name'])): ?>
        <div class="welcome-message">
          Welcome <?php echo $_SESSION['user_name']; ?>
        </div>    
      <?php endif; ?>  
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    
    <div class="radmenu collapse navbar-collapse" id="main-nav-collapse">
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown menufirst">
                <a href="landingpage.php/#" class="dropdown-toggle" data-toggle="dropdown"><span>HOME</span></a>
                <ul class="dropdown-menu">
                    <li class="menufirst ">
                      <a href="landingpage.php">Home</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown ">
                <a href="calculatorpage.php/#" class="dropdown-toggle" data-toggle="dropdown"><span>CALCULATE</span></a>
                <ul class="dropdown-menu">
                    <li class="menufirst ">
                        <a href="calculatorpage.php">Calculate</a>
                    </li>
                    <li class="menulast ">
                        <a href="leaderboard.php">Leaderboard</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown ">
                <a href="informationpage.php/#" class="dropdown-toggle" data-toggle="dropdown"><span>INFORMATION</span></a>
                <ul class="dropdown-menu">
                    <li class="menufirst ">
                      <a href="informationpage.php">Information</a>
                    </li>
                    <li class="menulast">
                        <a href="suggestionpagenav.php">Suggestions</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown ">
                <a href="aboutUs.php/#" class="dropdown-toggle" data-toggle="dropdown"><span>ABOUT US</span></a>
                <ul class="dropdown-menu">
                    <li class="menulast">
                        <a href="aboutUs.php">About Us</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown menulast">
                <a href="UserRelogin.php" class="dropdown-toggle" data-toggle="dropdown"><span>MY ACCOUNT</span></a>
                <ul class="dropdown-menu">
                    <li class="menufirst">
                        <a href="profilepage.php">My Account</a>
                    </li>
                    <?php if (isset($_SESSION['user_name'])): ?>
                        <li class="menulast">
                            <a href="logout.php">Logout</a>
                        </li>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['user_name'])): ?>
                        <li class="menulast">
                            <a href="UserRelogin.php">Log in</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>
<script type="text/javascript" src="javascript/jquery-1-12-2-min.js"></script>
<script type="text/javascript" src="javascript/bootstrap-min.js"></script>
<script type="text/javascript" src="javascript/owl-carousel.js"></script>
<script type="text/javascript" src="javascript/jquery-hoverdir.js"></script>
<header id="header" class="header-wrapper home-parallax home-fade" style="background-image: url(images/image3.jpg)">
  <div class="header-overlay"></div>
  <div class="header-wrapper-inner">
    <div class="container">
      <div class="welcome-speech">
<p style="text-align: center;"><span style="text-align: center; color: #ffffff;">&nbsp;</span></p>
<h2 style="text-align: center;"><span style="color: #000000; -webkit-text-stroke: 1px rgb(221, 220, 220)"><strong></strong></span></h2>
<p style="text-align: center;"><span style="text-align: center; color: #000000;"></span></p>
<p style="text-align: center;"><span style="color: #000000;"></span></p>
      </div>
    </div>
  </div>
</header>

<div class="main-content">
  <section class="bg-white">
    <div class="container">

    <!-- MAIN PAGE CONTENT START -->

    
        <style>
            .container {
            width: 100%;
            height: 100%;
            position: relative;
            }
            img {
            width: 100%;
            height: 100%;
            }
            .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            }
        </style>
        <script>
          $(document).ready(function() {
            $(this).scrollTop(0);
          });
        </script>
  <!-- <h3 style="text-align: center; font-size: 30px; padding-bottom: 60px;">ABOUT US&nbsp;</h3> -->

  <section class="member"> 
    <h2 class="member-category" style="text-align: center; color:DarkOliveGreen; font-family:Arial Black;">MEET THE TEAM</h2>
    
    <div class="member-container">
        <div class="member-card">
            <div class="member-image">
               
                <img src="images/card1.jpg" class="member-thumb" alt="">
               
            </div>
            <div class="member-info">
                <h3 class="member-brand"> Amitrajit Pati</h3>
                <p class="member-short-description">Frontend Team</p>
                
            </div>
        </div>
        <div class="member-card">
            <div class="member-image">
                
                <img src="images/card2.jpg" class="member-thumb" alt="">
                
            </div>
            <div class="member-info">
                <h3 class="member-brand">Minahil Tariq</h3>
                <p class="member-short-description">Frontend Team</p>
                
            </div>
        </div>
        <div class="member-card">
            <div class="member-image">
               
                <img src="images/card3.jpg" class="member-thumb" alt="">
                
            </div>
            <div class="member-info">
                <h3 class="member-brand">Siyu Tian</h3>
                <p class="member-short-description">Frontend Team</p>
                
            </div>
        </div>
        <div class="member-card">
            <div class="member-image">
               
                <img src="images/card4.jpg" class="member-thumb" alt="">
                
            </div>
            <div class="member-info">
                <h3 class="member-brand">Qian Ning Phang</h3>
                <p class="member-short-description">Frontend Team</p>
                
            </div>
        </div>
        <div class="member-card">
            <div class="member-image">
                
                <img src="images/card5.jpg" class="member-thumb" alt="">
               
            </div>
            <div class="member-info">
                <h3 class="member-brand">Mahdhi Shah</h3>
                <p class="member-short-description">Backend Team</p>
                
            </div>
        </div>
        <div class="member-card">
            <div class="member-image">
                
                <img src="images/card6.jpg" class="member-thumb" alt="">
               
            </div>
            <div class="member-info">
                <h3 class="member-brand">Pond Allen</h3>
                <p class="member-short-description">Backend Team</p>
                
            </div>
        </div>
        <div class="member-card">
            <div class="member-image">
               
                <img src="images/card7.jpg" class="member-thumb" alt="">
                
            </div>
            <div class="member-info">
              <h3 class="member-brand">Zhenyu Huang</h3>
              <p class="member-short-description">Backend Team</p>
              
          </div>
        </div>
    </div>
</section>
<script src="javascript/script.js"></script>


<h3 style="text-align: center;"><strong>Who Are We? </strong></h3>
<h4 style="text-align: center;">We are a group of first year students from the University of Manchester. Our group name is Y7. The group consists of seven members.</h4>

<h3 style="text-align: center;"><strong>Why Are We Making This? </strong></h3>
<h4 style="text-align: center;">This website is a team project, we decided on making this project about carbon footprint to spread awareness on the increase of pollution, mainly targetting students.</h4>
</h4>
<h3 style="text-align: center;"><strong>What Are We Making? </strong></h3>
<h4 style="text-align: center;">We are making a carbon footprint calculator, that people can use to keep their carbon emission under check and play their part.</h4>
</h4>
<h3 style="text-align: center;"><strong></strong></h3>
<h4 style="text-align: center;"></h4>

</div>

        </div>
        </div>
    
    </div>
  </section>
</div>

<footer class="fade-in" style="background-color: rgb(40, 152, 40);">
  <div class="container3">
    <div class="footer-content">
      <div class="footer-text3">
        <h2 style="text-align: center;">OUR USERS SAY</h2>
        <h3 style="text-align: center;"><em>"Using CarbNone has helped us make our contribution to keep the planet green. 
          It is easy to use and is accurate in its results."</em></h3>
        <h4 style="text-align: right;">- Anonymous</h4>
      </div>
    </div>
  </div>
</footer>
<style>
  .fade-in {
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}


</style>
<script>
  const fadeInImages = document.querySelectorAll('.fade-in');

  const options = {
    threshold: 0.5,
    rootMargin: "0px 0px -100px 0px"
  };

  const fadeIn = (entry) => {
    entry.target.style.opacity = "1";
    entry.target.style.transform = "translateY(0)";
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        fadeIn(entry);
        observer.unobserve(entry.target);
      }
    });
  }, options);

  fadeInImages.forEach(image => {
    observer.observe(image);
  });
  //refresh page go back to top
  $(document).ready(function(){
      $(this).scrollTop(0);
    });

</script>

</body></html>