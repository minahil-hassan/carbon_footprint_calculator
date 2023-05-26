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


if(!isset($_SESSION['user_name'])){
   echo "<script type='text/javascript'>alert('Please Log in to see the leaderboard!');window.location.href = 'UserRelogin.php';</script>";
}
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

  <h3 style="text-align: center; font-size: 30px; padding-bottom: 60px; color:DarkOliveGreen; font-family:Arial Black;">TOP 10 USERS&nbsp;</h3>


  <style>
    table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
            text-align: center;
		}

		th {
			background-color: #3baa04;
			color: white;
            text-align: center;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
    #button{
      text-align: center;
      padding-top: 100px;
    }
    #myButton {
      background-color: #3baa04;
      border-radius: 5%;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;

    }
    #myButton:hover{
      background-color: #cddecc;
      color: #4b6043;
      transition: all 0.5s ease-in-out;
    }

  </style>
  <table>
    <thead>
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Carbon Footprint (CO<sub>2</sub>kg)</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $stmt = $conn->prepare("SELECT username, MIN(carbonvalue) AS carbonvalue FROM users_values GROUP BY username ORDER BY ABS(MIN(carbonvalue)) ASC LIMIT 10");
            $stmt->execute();

            $stmt->execute();

            $i = 1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['carbonvalue'] . "</td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </tbody>
</table>





</div>
<script>
  function goToPage() {
  window.location.href = "suggestionpagenav.php";
}
</script>
<div id="button">
  <button id="myButton" onclick="goToPage()">Click here for Suggestions!</button>

</div>
        <script src="javascript/embedr-47ad26da5deade67d472950b12c94b6c.js"></script>
    

    
    </div>
  </section>
</div>

</body></html>