<?php

require_once('config.inc.php');

$hostname = 'dbhost.cs.man.ac.uk';

$conn = new PDO("mysql:host=$hostname;dbname=2022_comp10120_y7", $database_user, $database_pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();

if(!isset($_SESSION['user_name'])){
   echo "<script type='text/javascript'>alert('Please Log in to see your profile');window.location.href = 'UserRelogin.php';</script>";
}
$username = $_SESSION['user_name'];
$stmt = $conn->prepare("SELECT email FROM users WHERE username = ?");
$stmt->execute([$username]);
$email = $stmt->fetchColumn();

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
  <meta name="author" content="CarbNone by team Y7">
  <title>CarbNone.com - Home of Carbon Footprinting</title>
  <meta name="description" content="Leading online carbon footprint calculation tools and information to help reduce and offset your emissions .      ">
  <meta name="keywords" content="calculations, carbon, sustainability, csr, footprint, reduce, reduction, emissions, CO2, CO2e, carbon footprint, greenhouse gas, GHG, footprinting">
  
</head>
<body>
<style>
        .container {
            width: 100%;
            height: 100%;
            position: relative;
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
</div>
</nav>
</body>
<script type="text/javascript" src="javascript/jquery-1-12-2-min.js"></script>
<script type="text/javascript" src="javascript/bootstrap-min.js"></script>
<script type="text/javascript" src="javascript/owl-carousel.js"></script>
<script type="text/javascript" src="javascript/jquery-hoverdir.js"></script>

</header>

   <div class="main-content">
    <section class="bg-white">
     <div class="container">

    <!-- MAIN PAGE CONTENT START -->
    <style>
        .logo h1 {
            display: inline-block;
            margin-right: 20px;
            font-size: 70px;
            text-decoration: bold solid;
            margin-left: 2.5px;
            margin-right: 2.5px;
            margin-bottom: 0px;
    }
     
    </style>


  </head>
  <body style="background-color: #f2f2f2;">
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; padding-top: 100px;">
      <div style="text-align: center;">
        <!-- <div class="logo">
            <strong><h1 style="color: DarkOliveGreen;">WELCOME TO CARBNONE</h1></strong>
        </div>       -->

          <strong><h1 class="member-category" style="text-align: center; color:DarkOliveGreen; font-family:Arial Black; padding-bottom:10px; padding-top:10px;">YOUR PROFILE</h1><strong>
          <p>&nbsp;</p>
          <div class="member-container">
              <div class="member-card">
                  <div class="member-image">
                     
                      <img src="images/card1.jpg" class="member-thumb" alt="user dp" style="height: 350px; width:350px">
                     
                  </div>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <div class="member-info">
                    
                  <h3 class="member-brand" style="color: darkgreen; font-weight: bold;">Hello <?php echo $_SESSION['user_name']; ?></h3>
                  <p class="emailDisplay" style="color: #006400; font-family: Monospace">Email: <?php echo $email; ?></p>
                      
                  </div>
              </div>
            </div>
        </div>
    </div>
    <div>
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
            .member-info {
                background-color: #f2f2f2;
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
            }
            .member-card{
                transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;

            }
            .member-card:hover {
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                transform: scale(0.90);
            }
            
            .member-brand {
                color: #333;
                font-size: 34px;
                margin: 0;
            }
            
            .emailDisplay {
                color: #666;
                font-size: 26px;
                margin: 0;
                font: Monospace;
            }
        </style>
            
            
            <p>&nbsp;</p>
  <h3 style="text-align: center; font-size: 30px; padding-bottom: 10px; color:DarkOliveGreen; font-family:Arial Black;">YOUR CARBON FOOTPRINT VALUES&nbsp;</h3>
  <p style= "text-align:center; font-size: 20px; padding-bottom: 40px; color: darkolivegreen; font-family: Arial;"> Track your progress to improve your carbon footprint&nbsp;</p>


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

  </style>
  <table>
    <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Carbon Footprint (CO<sub>2</sub>kg)</th>
            <th>Date/Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $stmt = $conn->prepare("SELECT username, carbonvalue, created_at FROM users_values WHERE username = ? ORDER BY created_at ASC");
            $stmt->execute([$_SESSION['user_name']]);

            $i = 1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['carbonvalue'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
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
    </div>

    
  
  </body>
</html>