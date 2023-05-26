<?php

require_once('config.inc.php');

$hostname = 'dbhost.cs.man.ac.uk';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=2022_comp10120_y7", $database_user, $database_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}

$sql = "CREATE TABLE IF NOT EXISTS users_values
            (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(15) NOT NULL, 
                carbonvalue VARCHAR(15) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

                UNIQUE KEY(username, id)
            )";


$conn->exec($sql);

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
  <!-- font long code -->
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" type="text/css" href="css/avada.css">

  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  
  <script  src="javascript/modernizr-custom-min.js"></script>
  <script type="text/javascript" src="javascript/calculatedrink.js"></script>

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
<header id="header" class="header-wrapper home-parallax home-fade" style="background-image: url(images/cb.avif)">
  <div class="header-overlay"></div>
  <div class="header-wrapper-inner">
    <div class="container">
      <div class="welcome-speech">
<p style="text-align: center;"><span style="text-align: center; color: #ffffff;">&nbsp;</span></p>
<h2 style="text-align: center;"><span style="color: #000000; -webkit-text-stroke: 1px rgb(221, 220, 220)"><strong></strong></span></h2>
<p style="text-align: center;"><span style="text-align: center; color: #000000;"><span></p>
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
        <p>&nbsp;</p>
        <p>&nbsp;</p>
  <h1 style="text-align: center; font-size: 40px; padding-bottom: 60px; color:DarkOliveGreen; font-family:Arial Black;">CALCULATE YOUR CARBON FOOTPRINT&nbsp;</h1>

  <!-- THIS IS WHERE THE CALCULATOR CONTENT GOES -->

  <div class="main1" >
    <div class="main1_container">
      <title>Calculate Carbon Footprint</title>
      
      <script src="javascript/calculatefood.js"></script>
      <link rel="stylesheet" href="css/calculatefood.css">
      <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <h3 class="title1" for="">Food Section</h3><br>
        
            <form name ="foodForm">
            <form name="foodForm" id="foodForm">
              <div class="food_label">Food Item 1</div><br>
              <select name="foodType1" class="select-box" id="food1">
                <option value="" disabled selected>Select Item</option>
                <option value="Beef">Beef (per 100 grams) </option>
                <option value="Lamb">Lamb (per 100 grams)</option>
                <option value="Prawns">Prawns (per 5 piece)</option>
                <option value="Cheese">Cheese (per slice/20 grams)</option>
                <option value="Chicken">Chicken (per piece/fillet) </option>
                <option value="Fish">Fish(per fillet/ 100 grams) </option>
                <option value="Dark_Chocolate_Bar">Dark Chocolate Bar (per 50 grams bar) </option>
                <option value="Milk_Chocolate_Bar">Milk Chocolate Bar (per 50 grams bar)</option>
                <option value="Eggs">Eggs (per piece) </option>
                <option value="Tomato">Tomato(per piece)</option>
                <option value="Berries">Berries (per 200 grams)</option>
                <option value="Rice">Rice (per bowl)</option>
                <option value="Banana">Banana (per piece) </option>
                <option value="Apple">Apple (per piece) </option>
                <option value="Cabbage">Cabbage (per piece) </option>
                <option value="Kale">Kale (per bundle) </option>
                <option value="Nuts">Nuts (per 50 grams) </option>
                <option value="Orange">Orange (per piece) </option>
                <option value="Potatoes">Potatoes (per piece) </option>
                <option value="Carrot">Carrot (per piece)</option>
                <option value="Pasta">Pasta (per bowl/serving)</option>
              </select>
              <br><br>
            
                       
            
            <p class="quantity_label" for="">Quantity<input type="text" id="quantity1" 
                class="quantity_input" value="0"> </p><br><br>
            
            <div class="food_label">Food Item 2</div><br>
            <select name="foodType2" class="select-box"  id="food2">
            <option value="" disabled selected>Select Item</option>
                <option value="Beef">Beef (per 100 grams) </option>
                <option value="Lamb">Lamb (per 100 grams)</option>
                <option value="Prawns">Prawns (per 5 piece)</option>
                <option value="Cheese">Cheese (per slice/20 grams)</option>
                <option value="Chicken">Chicken (per piece/fillet) </option>
                <option value="Fish">Fish(per fillet/ 100 grams) </option>
                <option value="Dark_Chocolate_Bar">Dark Chocolate Bar (per 50 grams bar) </option>
                <option value="Milk_Chocolate_Bar">Milk Chocolate Bar (per 50 grams bar)</option>
                <option value="Eggs">Eggs (per piece) </option>
                <option value="Tomato">Tomato(per piece)</option>
                <option value="Berries">Berries (per 200 grams)</option>
                <option value="Rice">Rice (per bowl)</option>
                <option value="Banana">Banana (per piece) </option>
                <option value="Apple">Apple (per piece) </option>
                <option value="Cabbage">Cabbage (per piece) </option>
                <option value="Kale">Kale (per bundle) </option>
                <option value="Nuts">Nuts (per 50 grams) </option>
                <option value="Orange">Orange (per piece) </option>
                <option value="Potatoes">Potatoes (per piece) </option>
                <option value="Carrot">Carrot (per piece)</option>
                <option value="Pasta">Pasta (per bowl/serving)</option>

            </select>
            <p class="quantity_label" for="">Quantity<input type="text" id="quantity2" 
              class="quantity_input" value="0"> </p><br><br>

              <div class="food_label">Food Item 3</div><br>
              <select name="foodType3" class="select-box" id="food3">
              <option value="" disabled selected>Select Item</option>
                <option value="Beef">Beef (per 100 grams) </option>
                <option value="Lamb">Lamb (per 100 grams)</option>
                <option value="Prawns">Prawns (per 5 piece)</option>
                <option value="Cheese">Cheese (per slice/20 grams)</option>
                <option value="Chicken">Chicken (per piece/fillet) </option>
                <option value="Fish">Fish(per fillet/ 100 grams) </option>
                <option value="Dark_Chocolate_Bar">Dark Chocolate Bar (per 50 grams bar) </option>
                <option value="Milk_Chocolate_Bar">Milk Chocolate Bar (per 50 grams bar)</option>
                <option value="Eggs">Eggs (per piece) </option>
                <option value="Tomato">Tomato(per piece)</option>
                <option value="Berries">Berries (per 200 grams)</option>
                <option value="Rice">Rice (per bowl)</option>
                <option value="Banana">Banana (per piece) </option>
                <option value="Apple">Apple (per piece) </option>
                <option value="Cabbage">Cabbage (per piece) </option>
                <option value="Kale">Kale (per bundle) </option>
                <option value="Nuts">Nuts (per 50 grams) </option>
                <option value="Orange">Orange (per piece) </option>
                <option value="Potatoes">Potatoes (per piece) </option>
                <option value="Carrot">Carrot (per piece)</option>
                <option value="Pasta">Pasta (per bowl/serving)</option>
              
              

              </select>

            <p class="quantity_label" for="">Quantity<input type="text" id="quantity3" 
              class="quantity_input" value="0"> </p><br><br>
                
            
        </form>
        
        <div id="new">

        </div>
    </div>
</div>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Drink Footprint</title>



    <div class="main2">
        <div class="main2_container">
          <link rel="stylesheet" href="css/calculatedrinks.css">
            <h3 class="title2">Drinks Section</h3><br>
            <form name="drinkForm">
                <div class="drink_label">Drink Item 1</div><br>
                <select name="drinkType1" class="select-box" id ="drink1">
                    <option value="" disabled selected>Select Item</option>
                    <option value="Cow_Milk">Cow Milk (per 250 ml)</option>
                    <option value="Coffee">Coffee (per 250 ml)</option>
                    <option value="Rice_Milk">Rice Milk (per 250 ml)</option>
                    <option value="Beer">Beer (per 250 ml)</option>
                    <option value="Soy_Milk">Soy Can (per 250 ml)</option>
                    <option value="Almond_Milk">Almond Milk (per 250 ml)</option>
                    <option value="Coke">Carbonated drinks (per 250 ml)</option>
                    <option value="Wine">Wine (per 250 ml)</option>
                </select>
                <p class="quantity_label" for="">Quantity<input type="text" name="quantity1" 
                    class="quantity_input" id="quantityd1" value="0"> </p><br><br>
            
                <div class="drink_label">Drink Item 2</div><br>
                <select name="drinkType2" class="select-box" id="drink2">
                <option value="" disabled selected>Select Item</option>
                    <option value="Cow_Milk">Cow Milk (per 250 ml)</option>
                    <option value="Coffee">Coffee (per 250 ml)</option>
                    <option value="Rice_Milk">Rice Milk (per 250 ml)</option>
                    <option value="Beer">Beer (per 250 ml)</option>
                    <option value="Soy_Milk">Soy Can (per 250 ml)</option>
                    <option value="Almond_Milk">Almond Milk (per 250 ml)</option>
                    <option value="Coke">Carbonated drinks (per 250 ml)</option>
                    <option value="Wine">Wine (per 250 ml)</option>
                 
                </select>
                <p class="quantity_label" for="">Quantity<input type="text" name="quantity2" 
                    class="quantity_input" id="quantityd2" value="0"> </p><br><br>

                <div class="drink_label">Drink Item 3</div><br>
                <select name="drinkType3" class="select-box" id="drink3">
                <option value="" disabled selected>Select Item</option>
                    <option value="Cow_Milk">Cow Milk (per 250 ml)</option>
                    <option value="Coffee">Coffee (per 250 ml)</option>
                    <option value="Rice_Milk">Rice Milk (per 250 ml)</option>
                    <option value="Beer">Beer (per 250 ml)</option>
                    <option value="Soy_Milk">Soy Can (per 250 ml)</option>
                    <option value="Almond_Milk">Almond Milk (per 250 ml)</option>
                    <option value="Coke">Carbonated drinks (per 250 ml)</option>
                    <option value="Wine">Wine (per 250 ml)</option>
                </select>
                <p class="quantity_label" for="">Quantity<input type="text" name="quantity3" 
                    class="quantity_input" id="quantityd3" value="0"> </p><br><br>
            </form>
            <div id="printable">
            </div>

            <button class="rank_link" onclick="location.href='leaderboard.php'">Find Out Your Rank!!</button>
            <!-- <a class="rank_link" style= "color:white; text-align: center;" href="leaderboard.php">Find Out Your Rank!!</a> -->
            <button class="submit_button" onclick="myfunctiondrink()">Calculate Carbon Footprint</button>
            <!-- <p>&nbsp;</p> -->
            <button id="resetButton" class="reset_button" onclick="resetForm()">Reset</button>

            <p>&nbsp;</p>
            <p>&nbsp;</p>

              <style>
                .rank_link{
                  margin-top: 1.25rem;
                  float: left;
                  align-items: center;
                  text-align: center;
                  text-decoration: none;
                  height: 2.0rem;
                  width: 38%;
                  border-radius: 10px;
                  background-color: #4b6043;
                  font-weight: bold;
                  color: white;
                  border: none;
                  outline: none;
                }
                
                .rank_link:hover {
                  background-color: white;
                  color: #4b6043;
                  transition: all 0.5s ease-in-out;
                }
                .reset_button{
                  margin-top: 1.25rem;
                  float: right;
                  align-items: center;
                  text-align: center;
                  text-decoration: none;
                  height: 2.0rem;
                  width: 17%;
                  border-radius: 10px;
                  background-color: #4b6043;
                  font-weight: bold;
                  color: white;
                  border: none;
                  outline: none;
                }
                
                .reset_button:hover {
                  background-color: white;
                  color: #4b6043;
                  transition: all 0.5s ease-in-out;
                }
              </style>

            <div class="drink_label1" style="background-image: url('images/board.png'); background-size: 100%; font-size: 20px; font-weight:bold; text-align: center; color: darkgreen; padding:100px;">
              <p id="tfood" style="display:none;">Carbon Footprint Food: <span id="totalfoodprint"></span></p>
              <p id="tdrink" style="display:none;">Carbon Footprint Drinks: <span id="totaldrinkprint" ></span></p>
              <p id="ttotal" style="display:none;">Total Carbon Footprint: <span id="totalCarbonFootprint" ></span></p>  
            </div>
            
            
            <script type="text/javascript">
              function myfunctiondrink() {
              if(document.getElementById("totalCarbonFootprint").value !== ''){
               document.getElementById("ttotal").value = '';
               document.getElementById("tfood").value = '';
               document.getElementById("tfood").style.display = "none";
               document.getElementById("ttotal").style.display = "none";
               document.getElementById("totalfoodprint").innerHTML = "";
               document.getElementById("totaldrinkprint").innerHTML = "";
               document.getElementById("totalCarbonFootprint").innerHTML = "";
               document.getElementById("tdrink").value = '';
               document.getElementById("tdrink").style.display = "none";
               totalCarbonFootprint=0;
               totalfoodprint = 0;
               totaldrinkprint = 0;
            }            
              const food1 = document.querySelector('#drink1').value
              const quantity1 =  document.querySelector('#quantityd1').value
              submitFormAndDisplayDFootprint(food1, parseFloat(quantity1));
    
              const food2 = document.querySelector('#drink2').value
              const quantity2 =  document.querySelector('#quantityd2').value
              submitFormAndDisplayDFootprint(food2, parseFloat(quantity2));
  
              const food3 = document.querySelector('#drink3').value
              const quantity3 =  document.querySelector('#quantityd3').value
              submitFormAndDisplayDFootprint(food3, parseFloat(quantity3));
              
              addNewHTML();
              myfunctionfood();
            }

            function myfunctionfood() {
            
            const food1 = document.querySelector('#food1').value
            const quantity1 =  document.querySelector('#quantity1').value
            submitFormAndDisplayFFootprint(food1, parseFloat(quantity1));
  
            const food2 = document.querySelector('#food2').value
            const quantity2 =  document.querySelector('#quantity2').value
            submitFormAndDisplayFFootprint(food2, parseFloat(quantity2));

            const food3 = document.querySelector('#food3').value
            const quantity3 =  document.querySelector('#quantity3').value
            submitFormAndDisplayFFootprint(food3, parseFloat(quantity3));
            
            addNewHTML();

            document.getElementById("tfood").style.display = "block";
            document.getElementById("tdrink").style.display = "block";
            document.getElementById("ttotal").style.display = "block";
            saveCarbonValue()
          }

          function resetForm() {
            totalCarbonFootprint=0;
            totalfoodprint = 0;
            totaldrinkprint = 0;
            document.querySelector('form[name="drinkForm"]').reset();
            document.querySelector('form[name="foodForm"]').reset();
            document.getElementById("totalfoodprint").innerHTML = "";
            document.getElementById("totaldrinkprint").innerHTML = "";
            document.getElementById("totalCarbonFootprint").innerHTML = "";
            document.getElementById("foodSelection").selectedIndex = 0;
            document.getElementById("drinkSelection").selectedIndex = 0;
            document.getElementById("foodQuantity").value = "";
            document.getElementById("drinkQuantity").value = "";
            // localStorage.removeItem('food_footprint');
            document.getElementById("tfood").style.display = "none";
            document.getElementById("tdrink").style.display = "none";
            document.getElementById("ttotal").style.display = "none";
          }

            
          </script>
          <script type="text/javascript">
            function search() {
              var input, filter, select, options, i;
              input = document.getElementById("searchInput");
              filter = input.value.toUpperCase();
              select = document.getElementById("food1");
              options = select.getElementsByTagName("option");
              for (i = 0; i < options.length; i++) {
                if (options[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                  options[i].style.display = "";
                } else {
                  options[i].style.display = "none";
                }
              }
            }
          </script>
          <script>
            //refresh page, go to top
            $(document).ready(function() {
              $(this).scrollTop(0);
            });
          </script>
          <script>
            function saveCarbonValue() {
              const carbonValue = document.getElementById('totalCarbonFootprint').textContent;
              const xhr = new XMLHttpRequest();
              xhr.open('POST', 'save-carbon-value.php');
              xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
              xhr.onload = function() {
                if (xhr.status === 200) {
                  console.log(xhr.responseText);
                }
              };
              xhr.send('carbonValue=' + encodeURIComponent(carbonValue));
            }

          </script>



        </div>
    </div>

</div>


        <div class="container">
        &nbsp;
        <div style="display: inline-block;">
        <div class="row">
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>





<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>




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