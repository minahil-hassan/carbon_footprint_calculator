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

<html class="no-js">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="msvalidate.01" content="B91446B2F3FBE1C00E02A5EBD3A8ABA7" />
  <link rel="icon" type="image/x-icon" href="images/carbonfootprint.png">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-min.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome-min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" />
  <link rel="stylesheet" type="text/css" href="css/avada.css" />
  <script type="text/javascript" src="javascript/modernizr-custom-min.js"></script>
  <meta name="author" content="CarbNone by team Y7">
  <title>CarbNone.com - Home of Carbon Footprinting</title>
  <meta name="description" content="Leading online carbon footprint calculation tools and information to help reduce and offset your emissions .      ">
  <meta name="keywords" content="calculations, carbon, sustainability, csr, footprint, reduce, reduction, emissions, CO2, CO2e, carbon footprint, greenhouse gas, GHG, footprinting">
  
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
  <div class="header-overlay">
    <div class="header-wrapper-inner">
      <div class="container">
        <div class="welcome-speech">&nbsp;</div>
        
          </ol>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="main-content">
  <section class="bg-white">
    <div class="container">
      <div class="headline text-center">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h1 class="section-title" style="text-align: center; font-size: 40px; padding-bottom: 10px; padding-top: 10px; color:DarkOliveGreen; font-family:Arial Black;">Carbon Reduction</h1>
            <p class="section-sub-title"></p>
          </div>
        </div>
      </div> 
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
            .main-content {
            margin-left: 35px;
            margin-right: 35px;
            }
        </style>
<h3 style="text-align: center;"><b>Tips and Advice for People to Reduce Carbon Footprint</b></h3>
<br></br>
<p style="text-align: center;"><span style="font-size: 22px;"><a href="suggestionpage1.php">Click Here If Your CO<sub>2</sub> Falls Below Average</a></span></p>
<br></br>
<p style="text-align: center;"><span style="font-size: 22px;"><a href="suggestionpage2.php">Click Here If Your CO<sub>2</sub> Is Average</a></span></p>
<br></br>
<p style="text-align: center;"><span style="font-size: 22px;"><a href="suggestionpage3.php">Click Here If Your CO<sub>2</sub> Is More Than Average</a></span></p>
<p>&nbsp;</p>
<h4 style="text-align: center;"><b>The average carbon footprint is: 8.2kg per day per person.</b></h4>
<h4 style="text-align: center;"><b>The ideal carbon footprint is: 7.4kg per day per person. </b></h4>
<p>&nbsp;</p>
<h4 style="text-align: justify;">

<p><strong>If you want to learn more and see how it works, try following links:</strong>
<ul>
    <li><strong>Advertise this to your friends and family memebers</strong> to create account and login to our <a href="landingpage.php">Website</a>&nbsp;to make changes</li>
</ul>
<ul>
    <li><strong>Assess your household’s Carbon Footprint</strong> using our <a href="calculatorpage.php">Carbon Calculator</a>&nbsp;to find out the quantity of carbon emissions produced by your lifestyle and choices</li>
</ul>
<ul>
    <li><strong>Make a plan to reduce emissions &amp; do it!</strong>&nbsp;See our <a href="suggestionpagenav.php">Carbon reduction</a>&nbsp;recommendation for individuals, energy saving for households and holiday carbon footprint information pages to find ways that you can reduce your emissions.</li>
</ul>
<ul>
    <li><strong>Learn more basic information!</strong> GO check our <a href="informationpage.php">Carbon Footprint Information</a> to understand what it is and reasons to reduce.</li>
</ul>
</h4>
<h4 style="text-align: justify;"><b>What's the meaning of doing this?</b>
<p>We are not persuading people to calculate carboon footprint every day. It's only a website for people to calculate if they need and do help people to recognize the importance to make changes even for just one day.&nbsp;</p></h4>

<p>&nbsp;</p>
<p style="text-align: center;"><span style="font-size: 22px;"><a href="calculatorpage.php">Calculate your Carbon Footprint</a></span></p>
<p style="text-align: center;"><span style="font-size: 22px;"><a href="suggestionpagenav.php">Tips to help you reduce!</a></span></p>
</h4>
<ul>
</ul>
    <!-- MAIN PAGE CONTENT END -->
    </div>
  </section>
</div>
<footer class="fade-in" style="background-color: rgb(40, 152, 40);">
  <div class="container3">
    <div class="footer-content">
      <div class="footer-text3">
        <h4 style="text-align: center;"><b>More information on Climate Change</b>
          <p><a href="https://en.wikipedia.org/wiki/Individual_action_on_climate_change#Impact_of_individual_actions">https://en.wikipedia.org/wiki/Individual_action_on_climate_change#Impact_of_individual_actions</a> - Individual action on climate change.</p>
          <p><a href="https://en.wikipedia.org/wiki/Carbon_footprint#Reducing_carbon_footprints">https://en.wikipedia.org/wiki/Carbon_footprint#Reducing_carbon_footprints</a> - Definitions and more information about Carbon footprint.</p>
          <p><a href="https://en.wikipedia.org/wiki/Greenhouse_gas_emissions">https://en.wikipedia.org/wiki/Greenhouse_gas_emissions</a> - See more about (GHG<sub>s</sub>) Greenhouse gas emissions.&nbsp;</p>
          <p><a href="http://climate.nasa.gov/">http://climate.nasa.gov/</a> - Recent news stories on climate change and explains how NASA is collecting data relating to Climate Change.</p>
          <p><a href="https://awellfedworld.org/carbon/?gclid=CjwKCAiA_6yfBhBNEiwAkmXy594moog5gY88HOyxdqEE950BJh8s2YK9yzxXP8PaTgW94a9H_KDgkxoCW9IQAvD_BwE">https://awellfedworld.org/carbon/?gclid=CjwKCAiA_6yfBhBNEiwAkmXy594moog5gY88HOyxdqEE950BJh8s2YK9yzxXP8PaTgW94a9H_KDgkxoCW9IQAvD_BwE</a> - A website for you to find more information about how to follow the low-carbon diet.</p>
          
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
</body>
</html>