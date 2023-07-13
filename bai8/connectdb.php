<?php
$host = 'localhost';
$dbname = 'baitapdemo';
$username = 'root';
$password = '';
try {
    //  kết nối PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
    exit();
}
?>