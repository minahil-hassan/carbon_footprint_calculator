<?php

require_once('config.inc.php');

$hostname = 'dbhost.cs.man.ac.uk';

$conn = new PDO("mysql:host=$hostname;dbname=2022_comp10120_y7", $database_user, $database_pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();

?>

<!DOCTYPE html>
<html class="no-js">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/carbonfootprint.png">
  <meta name="msvalidate.01" content="B91446B2F3FBE1C00E02A5EBD3A8ABA7">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-min.css">
  <link rel="stylesheet" type="type/css" href="css/font-awesome-min.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/avada.css">
  <script type="text/javascript" src="javascript/modernizr-custom-min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

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
<p></p>
<h2 style="text-align: center;"><span style="color: #000000; -webkit-text-stroke: 1px rgb(221, 220, 220)"><strong>WELCOME TO CARBNONE!</strong></span></h2>
<p style="text-align: center; font-size: 1.733em;"><span style="text-align: center; color: #000000;"><strong>Carb<span style="color:red;">ON</span>? Turn It <span style="color:green;">OFF</span></strong></span></p>
<p style="text-align: center; font-size: 1.233em;"><span style="color: #000000;">scroll down</span></p>
<p></p>
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

<p></p>
<div>
  <div class="row">
    <div class="col-sm-2" style="background-color:white;">
      <p style="text-align: center;"><a title="Measure your Carbon Footprint" href="calculatorpage.php" target="_self"><img style="width: 70px; height: 70px;" onmouseover="this.src='images/calculator.png';" onmouseout="this.src='images/calculator.png';" alt="images/calculator.png" src="images/calculator.png"></a></p>
      <h4 style="text-align: center;"><a href="calculatorpage.php">Calculator</a></h4>
    </div>
      <div class="col-sm-2" style="background-color:white;">
        <p style="text-align: center;"><a title="See Information" href="informationpage.php"><img style="width: 70px; height: 70px;" onmouseover="this.src='images/information.png';" onmouseout="this.src='images/information.png';" alt="images/information.png" src="images/information.png"></a></p>
        <h4 style="text-align: center;"><a href="informationpage.php">Information</a></h4>
        </div>
      <div class="col-sm-2" style="background-color:white;">
        <p style="text-align: center;"><a title="See Advices" href="suggestionpagenav.php"><img style="width: 70px; height: 70px;" onmouseover="this.src='images/suggestion.png';" onmouseout="this.src='images/suggestion.png';" alt="images/suggestion.png" src="images/suggestion.png"></a></p>
        <h4 style="text-align: center;"><a href="suggestionpagenav.php">Suggestions</a></h4>
        </div>
      <div class="col-sm-2" style="background-color:white;">
        <p style="text-align: center;"><a title="Meet Us" href="aboutUs.php"><img style="width: 70px; height: 70px;" onmouseover="this.src='images/aboutUs.png';" onmouseout="this.src='images/aboutUs.png';" alt="images/aboutUs.png" src="images/aboutUs.png"></a></p>
        <h4 style="text-align: center;"><a href="aboutUs.php">About Us</a></h4>
        </div>
        <div class="col-sm-2" style="background-color:white;">
          <p style="text-align: center;"><a title="Go to your page!" href="profilepage.php"><img style="width: 70px; height: 70px;" onmouseover="this.src='images/profile.png';" onmouseout="this.src='images/profile.png';" alt="images/profile.png" src="images/profile.png"></a></p>
          <h4 style="text-align: center;"><a href="profilepage.php">Your Profile</a></h4>
          </div>
          <div class="col-sm-2" style="background-color:white;">
          <p style="text-align: center;"><a title="See your rank!" href="leaderboard.php"><img style="width: 70px; height: 70px;" onmouseover="this.src='images/leaderboard.png';" onmouseout="this.src='images/leaderboard.png';" alt="images/leaderboard.png" src="images/leaderboard.png"></a></p>
          <h4 style="text-align: center;"><a href="leaderboard.php">Leaderboard</a></h4>
          </div>
  </div>
  <h1></h1>
  
<div style="background-color: white;">
  <div class="content-box" style="padding-bottom: 5px;">
    <div class="fade-in-from-left">
    <h4 style="text-align: justify;"><strong>What is Carbon Footprint? </strong>
        </h4>
        </div>
        <div class="fade-in-from-right">
          <img src="images/carbonfoot.jpg" alt="carbonfoot.jpg" style="width:auto; max-width:50%; height:auto; max-height: 50%; margin-left:20px; margin-right:20px; float:right; margin-top:10px">
        </div>
        <div class="fade-in-from-left">
          <h4 style="text-align: justify;">
            <p>Carbon footprint is the total greenhouse gas emissions caused by an individual, event, organisation, service, place or product, expressed as carbon dioxide CO<sub>2</sub> equivalent.</p> 
          </h4>
      </div>
      
    <div class="fade-in-from-left">
      <h4 style="text-align: justify;">
        <strong>Why carbon footprint is of great concern? </strong>
        <h4 style="text-align: justify;">
          <p>Our carbon foot print has a negative impact on the environment in multiple ways. It is the main cause of human-induced climate change, contributes to urban air pollution, leads to toxic acid rains, adds to coastal and ocean acidification and worsens the melting of glaciers and polar ice.</p>
        </h4>
      </h4>
    </div>
    
  </div>
  <div  class="content-box" style="padding-top: 10px;">
    <div class="fade-in-from-left">
      <img src="images/carbonfootprint4.jpg" alt="carbonfootprint4.jpg" style="width:auto; max-width:50%; height:auto; max-height: 50%; margin-left:20px; margin-right:20px; float:left;">
    </div>
    <div class="fade-in-from-right">
      <h4 style="text-align: justify;">
        <strong>What are the main contributors to carbon footprint? </strong>
        <h4 style="text-align: justify;">
          <p>The major contributors to carbon footprints are: food, consumption, transportation and household energy. Food is a major contributor to carbon footprints, and meat in particular is an issue. Livestock is responsible for a significant amount of greenhouse gas emissions. For example, one kilogram of beef has the same amount of emissions as driving your car about 160 miles. Transportation of foods, pesticide use, and purchasing food out of season also contribute to carbon footprints.</p>
        </h4>
      </h4>
      <h4 style="text-align: justify;">
        <strong>How do we reduce carbon footprint?</strong>
        <h4 style="text-align: justify;">
          <p>There are many ways that a carbon footprint can be reduced that require fairly simple changes that can be implemented over time, such as using sustainable transport, improving home energy efficiency and dairy intake and recycling and composting.</p>
        </h4>
      </h4>
    </div>
    
  </div>
  
  <style>
    .col-sm-2{
      transition: all 0.3s ease-in-out;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0);
      padding-top:10px;
      padding-bottom:10px;
    }
    .col-sm-2:hover{
      transform: scale(0.95);
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
    }
    .col-sm-2 img:hover{
      transform: scale(1.2);
    }
    .col-sm-2 h4:hover{
      transform: scale(1.2);
    }
    .content-box {
      background-color: rgb(246, 255, 246);
      font-size: 14px;
      padding: 10px;
    }

  /* adjust font size for smaller screens */
  @media (max-width: 1368px) {
    .content-box {
      font-size: 13px;
    }
  }
  @media (max-width: 968px) {
    .content-box {
      font-size: 11px;
    }
  }
  @media (max-width: 568px) {
    .content-box {
      font-size: 9px;
    }
  }
.fade-in-from-right {
    opacity: 0;
    transform: translateX(50px);
    transition: opacity 1.5s ease-in-out, transform 2.5s ease-in-out 1.3s;
    
  }


.fade-in-from-right.fade-in {
    opacity: 1;
    transform: translateX(0);
  }
  .fade-in-from-left {
  opacity: 0;
  transform: translateX(-50px);
  transition: opacity 2s ease-in-out, transform 1s ease-in-out 1.3s;
}

.fade-in-from-left.fade-in {
  opacity: 1;
  transform: translateX(0);
}

  </style>

  <script>
    $(window).scroll(function() {
      $(".fade-in-from-right").each(function() {
        var elemPos = $(this).offset().top;
        var winTop = $(window).scrollTop();
        var winHeight = $(window).height();
        if (elemPos < winTop + winHeight) {
          $(this).addClass("fade-in");
        }
      });
    });

    // Fade in from left animation
    $(window).scroll(function() {
      $(".fade-in-from-left").each(function() {
        var elemPos = $(this).offset().top;
        var winTop = $(window).scrollTop();
        var winHeight = $(window).height();
        if (elemPos < winTop + winHeight) {
          $(this).addClass("fade-in");
        }
      });
    });

    $(document).ready(function() {
      $(this).scrollTop(0);
    });
  </script>
  
  </div>
</div>

        <br>

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