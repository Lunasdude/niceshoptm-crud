<?php 
$options = [
    "PDO::ATTR_ERRMODE" => PDO::ERRMODE_EXCEPTION,
    "PDO::ATTR_DEFAULT_FETCH_MODE" => PDO::FETCH_ASSOC
  ];
  
$pdo = new PDO(
    "mysql:host=localhost;dbname=niceshop;charset=utf8",
    "root",
    "root",
    $options
); 