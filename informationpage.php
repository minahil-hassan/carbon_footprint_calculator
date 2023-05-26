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
            <h1 class="section-title" style="text-align: center; font-size: 40px; padding-bottom: 10px; padding-top: 10px; color:DarkOliveGreen; font-family:Arial Black;">Carbon Footprint</h1>
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
<h2></h2>
<div class="fade-in">
  <h4 style="text-align: justify;">
    <p style="text-align: center;"><span style="font-size: 1.77em;"><strong>What is CarbonFootprint?</span></strong></p>
    <p>&nbsp;</p>
    <center><iframe class="fade-in" width="920" height="500" src="https://www.youtube.com/embed/8q7_aV8eLUE">
</iframe></center>
<p>&nbsp;</p>
  <p>A carbon footprint is the total greenhouse gas (GHG) emissions caused by an individual, event, organization, service, place or product, expressed as carbon dioxide equivalent (CO<sub>2</sub>e). The concept and name of the carbon footprint was derived from the ecological footprint concept, which was developed by William E. Rees and Mathis Wackernagel in the 1990s at the University of British Columbia.</p>
  <p>Human activities are one of the main causes of greenhouse gas emissions. These increase the earth's temperature and are emitted from the use of fossil fuels (coal, oil and gas), particularly in energy and transportation. The major effects of such practices mainly consist of climate changes, such as extreme precipitation and acidification and warming of oceans. </p>
  <p>However, there are several ways to reduce one's greenhouse gas footprint, such as changing eating habits (reducing meat and dairy, as well as food waste), using more energy efficient appliances at home, buying less in general (particularly throwaway items, such as fast fashion) and travelling less (particularly reducing air travel).</p>
  <p>Greenhouse gases (GHGs) are gases that increase the temperature of the Earth due to their absorption of infrared radiation. The most common GHGs are carbon dioxide (CO<sub>2</sub>), methane (CH<sub>4</sub>), nitrous oxide (N<sub>2</sub>O), and many fluorinated gases. A greenhouse gas footprint is the numerical quantity of these gases that a single entity emits. The calculations can be computed ranging from a single person to the entire world.</p>
</h4>
</div>
<table width="100%">
    <tbody>
        <tr>
            <td><img class="fade-in" style="width: 100%;" alt="global_warming.jpg" src="images/global_warming.jpg" /></td>
        </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<div class="fade-in">
    <h4 style="text-align: justify;"><strong>Measurement of Carbon Footprint</strong>
      <p></p>
    <p>An individual's, nation's, or organization's carbon footprint can be measured by undertaking a <strong>GHG</strong> emissions assessment, <strong>a life cycle assessment</strong>, or other calculative activities denoted as carbon accounting. </p>
  </h4>
</div>
<p style="text-align: center;"><img class="fade-in" style="width: 340px; height: 350px; vertical-align: middle;" alt="images/life_cycle.jpg" src="images/life_cycle.jpg" /></p>
<p>&nbsp;</p>

<div class="fade-in">
  <h4 style="text-align: justify;">
    <strong> Footprints of products </strong>
    <p></p>
    <p>Evaluating the package of some products is key to figuring out the carbon footprint. The key way to determine a carbon footprint is to look at the <strong>materials</strong> used to make the item. For example, a juice carton is made of an aseptic carton, a beer can is made of aluminum, and some water bottles either made of glass or plastic. The larger the size, the larger the footprint will be. </p>
    <p>Several organizations offer footprint calculators for public and corporate use, and several organizations have calculated carbon footprints of products. The Carbon Trust has worked with UK manufacturers on foods, shirts and detergents, introducing a CO2 label in March 2007. As of August 2012 The Carbon Trust state they have measured 27,000 certifiable product carbon footprints.&nbsp; </p>    
  </h4>
</div>
<p style="text-align: center;"><img class="fade-in" style="width: 500px; height: 389px; vertical-align: middle;" alt="images/carbon_products.jpg" src="images/carbon_products.jpg" /></p>

<div class="fade-in">
  <h4 style="text-align: justify;"><strong>1. Food</strong>
    <p></p>
  <p>Food contributes 10-30% of a household’s carbon footprint, mainly attributed to agricultural practices like food production and transportation. Meat products have larger carbon footprints than plant products like vegetables and grains due to inefficient conversion of plant energy to animals, and the release of methane from manure.<br />
  </p>
  <p> In a 2014 study by Scarborough et al., the real-life diets of British people were surveyed and their <strong>dietary greenhouse gas footprints estimated</strong>. Average dietary greenhouse-gas emissions per day (in kilograms of carbon dioxide equivalent) were: </p>
  <ul style="text-align: justify;">
      <li><strong>1.</strong> 7.19 for <strong>high meat-eaters</strong></li>
      <li><strong>2.</strong> 5.63 for <strong>medium meat-eaters</strong></li>
      <li><strong>3.</strong> 4.67 for <strong>low meat-eaters</strong></li>
      <li><strong>4.</strong> 3.91 for <strong>fish-eaters</strong></li>
      <li><strong>5.</strong> 3.81 for <strong>vegetarians</strong></li>
      <li><strong>6.</strong> 2.89 for <strong>vegans</strong></li>
  </ul>
</h4>
</div>

<h4></h4>
<p style="text-align: center;"><img class="fade-in" style="width: 800px; height: 500px; vertical-align: middle;" alt="images/food_carbon.jpg" src="images/food_carbon.jpg" /><br />
</p>
<div class="fade-in">
  <h4 style="text-align: justify;">
    <p style="text-align: center;">Source: Jazmin Murphy (2022)</p>
  </h4></div>
<div class="fade-in">
  <h4 style="text-align: justify;"><strong>2. Drink</strong>
    <p></p>
  <p>A study by the Food Climate Research Network and the University of Surrey in 2007 estimated the CO<sub>2</sub> footprint of a glass of beer, wine or spirit drunk in the UK. According to Drinkaware, the average Brit drinks 22 units of alcohol per week, the equivalent of 8.5 pints of beer, 7.4 glasses of wine or 6 double shots gin. This means that the average Brit creates the same amount of CO<sub>2</sub> from drinking alcohol as driving between 6km and 21km in a car. <br />
  <br />
  </p>
</h4>
</div>
<p style="text-align: center;"><img class="fade-in" style="width: 700px; height: 400px; vertical-align: middle;" alt="images/carbon_drink.jpg" src="images/carbon_drink.jpg" /><br />
</p>
<div class="fade-in">
  <h4 style="text-align: justify;">
    <p style="text-align: center;">Source: Joachim Klement (2018)</p>
  </h4>
</div>

<p>&nbsp;</p>
<div class="fade-in">
  <h4 style="text-align: justify;"><b>Rise in <strong>greenhouse gas</strong></b>
    <p></p>
  <p>The energy driven consumption of fossil fuels has made <strong>GHG emissions</strong> rapidly increase, causing the Earth's temperature to rise. In the past 250 years, human activity such as, burning fossil fuels and cutting down carbon-absorbing forests, have contributed greatly to this increase. In the last 25 years alone, emissions have increased by more than 33%, most of which comes from <strong>carbon dioxide</strong>, accounting for three-fourths of this increase.</p>
  <p>Concentrations of carbon dioxide and other greenhouse gases in the atmosphere have increased since the beginning of the industrial era. Almost all of this increase is attributable to human activities. Human activities can be driving cars, heating the house and so on which cost a lot of energy by burning fossil fuels and producing more CO<sub>2</sub>.</p>

</h4>
</div>
<div class="fade-in">
  <h4 style="text-align:justify;"><strong>Ways of Reducing Carbon Footprints</strong>
    <p></p>

  <ul>
      <li><strong>1. living car-free</strong> (2.4 tonnes CO2-equivalent per year)</li>
      <li><strong>2. forgoing air travel</strong> (1.6 tonnes CO2-equivalent per trans-Atlantic trip)</li>
      <li><strong>3. adopting a plant-based diet</strong> (0.8 tonnes CO2-equivalent per year)</li>
  </ul>
  <p>More information:</p>
  <p></p>
  Based on driving less, walking, biking and combining trips result in less <strong>CO<sub>2</sub></strong> releasing.</p>
  <p>The choice of diet is a <strong>major influence</strong> on a person's carbon footprint. Animal sources of protein, rice, foods transported long-distance or via fuel-inefficient transport and heavily processed and packaged foods are among the <strong>major contributors to a high carbon diet</strong>. Finally, throwing food out not only adds its associated carbon emissions to a person or household's footprint, but it also adds the emissions of transporting the wasted food to the garbage dump and the emissions of food decomposition, mostly in the form of the highly potent greenhouse gas, methane. </p>
</h4>
</div>
<div class="fade-in">
  
  <h4 style="text-align: justify;"><b>Ways to do better</b>
    <p></p>
  <p>People can choose to reduse, reuse, recycle, refuse. This can be done by using reusable items such as thermoses for daily coffee or plastic containers for water and other cold beverages rather than disposable ones. </p>
  <p>Another way can be using less air conditioning and heating.  </p>
  <h4 style="text-align: justify;"><strong>Travel and Commuting</strong>
  <p>Best ways to reduse carbon footprint in this section is to travel by bike or reliable public transportation like bus. Carpooling and ride-sharing might be good options, but according to the Union of Concerned Scientists, ride-share service trips currently result in an estimated <strong>69% increase</strong> in climate pollution on average. More pollution is generated as the amount of time and energy a ride-share driver spends between customers with no passengers increases. There are also more vehicles on the road as a result of passengers who would have otherwise taken public transportation, walked, or biked to their destination. It might be better if these services implement more strategies like <strong>electrifying vehicles</strong> which produce less emission.</p>
</h4>
</div>
<div class="fade-in">
  <h4 style="text-align: justify;"><strong>Diet and Food</strong>
    <p></p>
  <p>Eating less meat, especially beef and lamb, reduces emissions. Eating less meat is both great for people's health and global environment. Meats such as beef have a higher climate impact since <strong>cows release methane</strong>, a greenhouse gas that is <strong>more harmful</strong> in the short-term than carbon dioxide. In addition to mitigating climate change, other benefits of this transition would include improved water quality, restoration of biodiversity, and reductions in air pollution.</p>
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
</h4>
</div>
  
<div class="fade-in">
  
<h4 style="text-align: justify;"><strong>What's the meaning of doing this?</strong>
<p></p>
<p>We are not persuading people to calculate carboon footprint every day. It's only a website for people to calculate if they need and do help people to recognize the importance to make changes even for just one day.&nbsp;</p></h4>
<h4 style="text-align: justify;"><strong>More information on Climate Change</strong>
<p><a href="https://en.wikipedia.org/wiki/Individual_action_on_climate_change#Impact_of_individual_actions">https://en.wikipedia.org/wiki/Individual_action_on_climate_change#Impact_of_individual_actions</a> - Individual action on climate change.</p>
<p><a href="https://en.wikipedia.org/wiki/Carbon_footprint#Reducing_carbon_footprints">https://en.wikipedia.org/wiki/Carbon_footprint#Reducing_carbon_footprints</a> - Definitions and more information about Carbon footprint.</p>
<p><a href="https://en.wikipedia.org/wiki/Greenhouse_gas_emissions">https://en.wikipedia.org/wiki/Greenhouse_gas_emissions</a> - See more about (GHG<sub>s</sub>) Greenhouse gas emissions&nbsp;</p>
<p><a href="http://climate.nasa.gov/">http://climate.nasa.gov/</a> - Recent news stories on climate change and explains how NASA is collecting data relating to Climate Change.</p>
<p><a href="https://awellfedworld.org/carbon/?gclid=CjwKCAiA_6yfBhBNEiwAkmXy594moog5gY88HOyxdqEE950BJh8s2YK9yzxXP8PaTgW94a9H_KDgkxoCW9IQAvD_BwE">https://awellfedworld.org/carbon/?gclid=CjwKCAiA_6yfBhBNEiwAkmXy594moog5gY88HOyxdqEE950BJh8s2YK9yzxXP8PaTgW94a9H_KDgkxoCW9IQAvD_BwE</a> - A website for you to find more information about how to follow the low-carbon diet.</p>
</h4>
</div>



<p style="text-align: right;">Page updated: <br />
17 February 2023</p>
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
          <p>Carboon Footprint, (2023) <em>Wikipedia</em>. Published: February 2023, retrieved on: 14 February 2023, from <a href="https://en.wikipedia.org/wiki/Carbon_footprint#cite_note-27" target="_blank">https://en.wikipedia.org/wiki/Carbon_footprint#cite_note-27</a></p>
          <p>Life-cycle assessment, (2023) <em>Wikipedia</em>. Published: February 2023, retrieved on: 14 February 2023, from <a href="https://en.wikipedia.org/wiki/Life-cycle_assessment" target="_blank">https://en.wikipedia.org/wiki/Life-cycle_assessment</a></p>
          <p>Low-carbon diet, (2023) <em>Wikipedia</em>. Published: January 2023, retrieved on: 14 February 2023, from <a href="https://en.wikipedia.org/wiki/Low-carbon_diet" target="_blank">https://en.wikipedia.org/wiki/Low-carbon_diet</a></p>
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