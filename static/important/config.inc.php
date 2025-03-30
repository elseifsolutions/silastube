<?php
$host = "mysql13.serv00.com";
$dbname = "m4299_silastueb";
$username = "m4299_mehcryo"; 
$password = "MehcryoVideo1991";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
  
  $mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
?>
<?php
session_start(); // Start the session

if (!isset($_SESSION['user_id'])) {
   
}
  
  
 
?>
// this code is sucks
