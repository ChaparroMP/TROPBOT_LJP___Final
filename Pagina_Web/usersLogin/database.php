<?php
    $server = 'fdb31.125mb.com';
    $username = '3963737_userstropbot';
    $password = 'TROPBOT5479_IoT';
    $database = '3963737_userstropbot';
    
    try {
      $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
      die('Connection Failed: ' . $e->getMessage());
    }

?>
