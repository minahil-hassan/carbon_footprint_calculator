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

if (isset($_POST['carbonValue']) && $_POST['carbonValue'] != 0) {
  if (isset($_SESSION['user_name'])) {
    $username = $_SESSION['user_name'];
    $carbonValue = $_POST['carbonValue'];
    $stmt = $conn->prepare("INSERT INTO users_values (username, carbonvalue) VALUES (:username, :carbonvalue)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':carbonvalue', $carbonValue);
    $stmt->execute();
    echo 'Carbon value saved successfully.';
  } else {
    echo 'User not logged in.';
  }
} else {
  echo 'No carbon value specified or value is 0.';
}

exit();






?>