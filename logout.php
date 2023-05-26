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
session_unset();
session_destroy();

$message = "Successfully Logged Out";
echo "<script type='text/javascript'>alert('$message');window.location.href = 'landingpage.php';</script>"

?>