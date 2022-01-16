<?php
$host = "mysql";
$user = "root";
$pass = "root";
$db = "mysql";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo "Database connected successfully";
} catch(PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
