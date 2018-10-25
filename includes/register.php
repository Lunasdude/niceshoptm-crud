<?php
/**
 * NO HTML HERE!
 * Mission: Spara en användare i databasen
 * 1. Hantera POST variabler: $_POST
 * 2. Koppling till databas: PDO
 * 3. Spara användaren i databasen
 */
$pdo = new PDO(
    "mysql:host=localhost;dbname=niceshop;charset=utf8",
    "root",
    "root"
);
$username = $_POST["username"];
$password = $_POST["password"];
//Password hashed with PASSWORD_DEFAULT uses the best avalible method
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$statement = $pdo->prepare("INSERT INTO customers(username, password) VALUES (:username, :password)");
//Execute populates the statement and runs it
$statement->execute(
    [
        ":username" => $username,
        ":password" => $hashed_password
    ]
);
header('Location: ../views/login.php');