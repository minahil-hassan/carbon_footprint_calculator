<?php

require_once('config.inc.php');

$hostname = 'dbhost.cs.man.ac.uk';
try
{
    $conn = new PDO("mysql:host=$hostname;dbname=2022_comp10120_y7", $database_user, $database_pass);
    createUserTable($conn);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Check if the username already exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // The username already exists, so display an error message
        echo "Username already taken";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, hashed_password) VALUES (:username, :email, :password)");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            echo "Account Successfully Created";
        } else {
            //
        }
    }
}
catch(PDOException $e) {
    echo "Error". $e->getMessage();
}

function createUserTable($conn)
{
    $sql = "CREATE TABLE IF NOT EXISTS users
            (
                username VARCHAR(15) not null, 
                email VARCHAR(40) not null,
                hashed_password VARCHAR(255) not null,

                PRIMARY KEY (username) 
                )";

    $conn->exec($sql);
    echo "Table created" ;         

}
