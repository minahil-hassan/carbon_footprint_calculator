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
<h3 style="text-align: center;">Tips and Advice&nbsp; for People Who are <b>Above Average</b> to Reduce Carbon Footprint</h3>
<h3 style="text-align: center;">Statistic shows that your carbon footprint is way over average, it's time for you to check what you can change! Here are some suggestions to improve your lifestyle!</h3>
<p>&nbsp;</p>
<h4 style="text-align: center; font-size: 25px;"><b>Food and Drink</b></h4>
<h4 style="text-align: justify;"><b>1. Eat low on the food chain</b>
<p>You may find that the carbon footprint for your food consumption is a little bit high. Try eat low on the food chain which means eating mostly fruits, veggies, grains, and beans. Livestock—meat and dairy—is responsible for 14.5 percent of manmade global greenhouse gas emissions. Every day that you forgo meat and dairy, you can reduce your carbon footprint by 8 pounds—that’s 2,920 pounds a year.</p></h4>
<h4 style="text-align: justify;"><b>2. Eat organic</b>
<p>Organic foods are not only healthy which contains more vitamins, minerals and antioxidants, but also have smaller carbon footprint. The Soil Association says healthy soils are able to store carbon, so if all UK farming became organic, at least 1.3 million tonnes of carbon would be taken up by the soil every year.</p></h4>
<h4 style="text-align: justify;"><b>3. Stop eating meat</b>
<p>You can try switching to a vegetarian or vegan diet. This is the fastest way to help you to reduce carbon footprint. A 2018 report concluded that avoiding meat and dairy is the single biggest way to reduce your environmental impact on the planet. In fact, we could reduce the total amount of land used for farming by 75% and still feed everyone on Earth.</p></h4>
<h4 style="text-align: justify;"><b>4. Reduce your food waste</b>
<p>Plan what you are going to have before breakfast, lunch and dinner. Try not wasting food on making too much or making something you don't like which makes even more food waste.</p></h4>
<h4 style="text-align: justify;"><b>5. Give up gum</b>
<p>Chewing gum (made from plastic itself) can be swapped for plastic free alternatives on the market.</p></h4>
<h4 style="text-align: justify;"><b>6. Teabags</b>
<p>Make sure you are using plastic free teabags or you could even give loose leaf tea with a tea strainer a go instead.</p></h4>


<h4 style="text-align: center; font-size: 25px;"><b>Packaging</b></h4>
<h4 style="text-align: justify;"><b>1. Be prepared</b>
<p>Stop using single-use plastic bags anymore. Purchase more reusable bags and don't forget to bring them. For food shopping it’s worth taking plastic-lidded containers, produce bags, a cooler bag and plenty of sturdy shopping bags.</p></h4>
<h4 style="text-align: justify;"><b>2. Avoid excessive food packaging</b>
<p>It seems like the supermarkets and other grocery shops are having more well-packed vegetables and fruits which may have more plastic on packaging.</p></h4>
<h4 style="text-align: justify;"><b>3. Try bulk buying</b>
<p>A good way to reduce single-use plastic packages is to not visiting the shops that often. It's better to have a shopping list and visit the bulk food store once a month. You can try to stock up on items such as flour, sugar. Buy some reusable bags or containers to store them. </p></h4>
<h4 style="text-align: justify;"><b>4. Find a zero-waste shop</b>
<p>There’s a growing trend for zero-waste shops offering food that’s free from packaging – usually dry goods like pasta, rice and other grains, pulses, flour, coffee, spices, oats and other cereals. Bring your bags and containers to get what you need.</p></h4>

<h4 style="text-align: center; font-size: 25px;"><b>Transportation</b></h4>
<h4 style="text-align: justify;"><b>1. Drive less</b>
<p>Now, it is time for you to choose some public transportation. Do ride bike, take bus and underground or even walk to your destination. If you must drive, avoid unnecessary braking and acceleration. Some studies found that aggressive driving can result in 40 percent more fuel consumption than consistent, calm driving.</p></h4>
<h4 style="text-align: justify;"><b>2. Choices of buying cars</b>
<p>Try to choose electric cars which will produce no carbon dioxide if they are chaged with clean electricity.</p></h4>
<h4 style="text-align: justify;"><b>3. Driving style</b>
<p>Speeding and accelerating suddenly waste gas and money, which also increases the carbon footprint at the same time. Try driving in a rather constant speed to avoid this problem.</p></h4>
<h4 style="text-align: justify;"><b>4. Avoid traffic</b>
<p>Being stuck in traffic wastes gas and time. It also unneccessarily creates CO<sub>2</sub>. Use maps or traffic apps and websites to go to a different way or rearranging your timetable to get to the destination.</p></h4>


<h4 style="text-align: justify;">
<p>If you want to learn more and see how it works, try following links:
<ul>
    <li><strong>Advertise this to your friends and family memebers</strong> to create account and login to our <a href="landingpage.php">Website</a>&nbsp;to make changes</li>
</ul>
<ul>
    <li><strong>Assess your household’s Carbon Footprint</strong> using our <a href="calculatorpage.php">Carbon Calculator</a>&nbsp;to find out the quantity of carbon emissions produced by your lifestyle and choices</li>
</ul>
<ul>
    <li><strong>Make a plan to reduce emissions &amp; do it!</strong>&nbsp;See our <a href="suggestionpagenav.php">carbon reduction</a>&nbsp;recommendation for individuals, energy saving for households and holiday carbon footprint information pages to find ways that you can reduce your emissions.</li>
</ul>
<ul>
    <li><strong>Learn more basic information!</strong>GO check our <a href="informationpage.php">Carbon Footprint Information</a> to understand what it is and reasons to reduce.</li>
</ul>
</h4>
<p>&nbsp;</p>
<h4 style="text-align: center;"><b>What's the meaning of doing this?</b></h4>
<h4 style="text-align: justify;">
<p>We are not persuading people to calculate carboon footprint every day. It's only a website for people to calculate if they need and do help people to recognize the importance to make changes even for just one day.&nbsp;</p></h4>
<h4 style="text-align: center;"><b>More information on Climate Change</b></h4>
<h4 style="text-align: justify;">
<p><a href="https://en.wikipedia.org/wiki/Individual_action_on_climate_change#Impact_of_individual_actions">https://en.wikipedia.org/wiki/Individual_action_on_climate_change#Impact_of_individual_actions</a> - Individual action on climate change.</p>
<p><a href="https://en.wikipedia.org/wiki/Carbon_footprint#Reducing_carbon_footprints">https://en.wikipedia.org/wiki/Carbon_footprint#Reducing_carbon_footprints</a> - Definitions and more information about Carbon footprint.</p>
<p><a href="https://en.wikipedia.org/wiki/Greenhouse_gas_emissions">https://en.wikipedia.org/wiki/Greenhouse_gas_emissions</a> - See more about (GHG<sub>s</sub>) Greenhouse gas emissions&nbsp;</p>
<p><a href="http://climate.nasa.gov/">http://climate.nasa.gov/</a> - Recent news stories on climate change and explains how NASA is collecting data relating to Climate Change.</p>
<p><a href="https://awellfedworld.org/carbon/?gclid=CjwKCAiA_6yfBhBNEiwAkmXy594moog5gY88HOyxdqEE950BJh8s2YK9yzxXP8PaTgW94a9H_KDgkxoCW9IQAvD_BwE">https://awellfedworld.org/carbon/?gclid=CjwKCAiA_6yfBhBNEiwAkmXy594moog5gY88HOyxdqEE950BJh8s2YK9yzxXP8PaTgW94a9H_KDgkxoCW9IQAvD_BwE</a> - A website for you to find more information about how to follow the low-carbon diet.</p>
</h4>

<p style="text-align: right;">Page updated: <br />
8 March 2023</p>
<p>&nbsp;</p>
<p style="text-align: center;"><span style="font-size: 22px;"><a href="calculatorpage.php">Calculate your Carbon Footprint</a></span></p>
<p style="text-align: center;"><span style="font-size: 22px;"><a href="suggestionpagenav.php">Tips to help you reduce!</a></span></p>
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
        <h4 style="text-align: center;"><b>References</b>
          <p>25+ Ways to Reduce Your Carbon Footprint, (2023) <em>COTAP</em>. Published: February 2023, retrieved on: 8 March 2023, from <a href="https://cotap.org/reduce-carbon-footprint/" target="_blank">https://cotap.org/reduce-carbon-footprint/</a></p>
          <p>10 ways to cut your food carbon footprint, (2021) <em>GoodFood</em>. Published: 2021, retrieved on: 8 March 2023, from <a href="https://www.bbcgoodfood.com/howto/guide/how-cut-your-food-carbon-footprint" target="_blank">https://www.bbcgoodfood.com/howto/guide/how-cut-your-food-carbon-footprint</a></p>
          <p>10 tips for reducing your single-use plastic waste, (2019) <em>GoodFood</em>. Published: 2019, retrieved on: 8 March 2023, from <a href="https://www.bbcgoodfood.com/howto/guide/10-tips-reducing-your-plastic-waste#commentsFeed" target="_blank">https://www.bbcgoodfood.com/howto/guide/10-tips-reducing-your-plastic-waste#commentsFeed</a></p>
          <p>The 35 Easiest Ways to Reduce Your Carbon Footprint, (2018) <em>State of the Planet</em>. Published: December 2018, retrieved on: 8 March 2023, from <a href="https://news.climate.columbia.edu/2018/12/27/35-ways-reduce-carbon-footprint/" target="_blank">https://news.climate.columbia.edu/2018/12/27/35-ways-reduce-carbon-footprint/</a></p>
          <p>15 top tips to help you reduce your single-use plastic waste, (2023) <em>Hammersmith and Fullham</em>. Published: 2023, retrieved on: 8 March 2023, from <a href="https://www.lbhf.gov.uk/recycling-and-rubbish/recycling-home/15-top-tips-help-you-reduce-your-single-use-plastic-waste" target="_blank">https://www.lbhf.gov.uk/recycling-and-rubbish/recycling-home/15-top-tips-help-you-reduce-your-single-use-plastic-waste</a></p>
          </h4>
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