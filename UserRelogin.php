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
<html class="no-js"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
  <title>carbonfootprint.com - Home of Carbon Footprinting</title>
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
  
</header>

<div class="main-content">
  <section class="bg-white">
    <div class="container">

    <!-- MAIN PAGE CONTENT START -->

    
        <style>
        .header {
        background-color: green;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px 20px;
        width: 100%;
        height: 100px;
      }
      .header a {
        color: white;
        text-decoration: none;
        margin-right: 20px;
        text-align: center;
        text-size-adjust: 50px;
      }
      .header a:last-child {
        margin-right: 0;
      }
      .container1 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-image: url('images/bg3.gif');
      }
      .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
      }
      .form h1 {
        margin: 0;
        font-size: 30px;
      }
      .form input[type="text"],
      .form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 18px;
      }
      .form input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: #4285f4;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
      }
      .form a {
        text-decoration: none;
        margin-top: 20px;
        color: #4285f4;
        font-size: 18px;
      }

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
    </div>
  </section>
</div>
<script>
  function checkPassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    if (password != confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
    return true;
  }
</script>

  </head>
  <body>
    <?php
    if(isset($_POST['submit'])){

       $username = $_POST['username'];
       $password = md5($_POST['password']);

       $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");

       $stmt->bindParam(':username', $username);
       $stmt->bindParam(':password', $password);
       $stmt->execute();

       $user = $stmt->fetch(PDO::FETCH_ASSOC);

       if ($user){
          $_SESSION['user_name'] = $user['username'];
          $message = "Successfully Logged in";
          echo "<script type='text/javascript'>alert('$message');window.location.href = 'landingpage.php';</script>";
          exit;
       } else{
          $error[] = 'Incorrect Username or Password!';
       }

    };
    ?>
    </div>
    <div class="container1">
      <div class="form">
        <h1 style="font-family: Google Sans,Roboto,Arial,sans-serif; text-align: centre;">CARBNONE LOGIN</h1>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg" style="color:#C90404; font-family: Google Sans,Roboto,Arial,sans-serif;">'.$error.'</span>';
            };
        };
        ?>
        <form action="" method="post">
          <input type="text" placeholder="Username" name="username"><br>
          <input type="password" placeholder="Password" name="password"><br>
          <input type="submit" name="submit" value="Sign In">
        </form> 
        <a href="MyNewUserLogin.php">Create new account</a>
        <p><a href="https://asgsjdvfbnlcuzuulitr.supabase.co/auth/v1/authorize?provider=google">
            <img style="width:200px; height:50px;" src="images/google_login.png" alt="google login">
            </a></p>
      </div>
    </div>
</body>
</html>