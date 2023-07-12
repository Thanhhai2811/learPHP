<?php
// lấy dữ liệu id cần xóa
// require 'connectdb.php';

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];

// }
require './connectdb.php';
?>

<?php

    if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // truy cập vào cơ sở dữ liệu 
    $sql = "DELETE FROM users WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]); 

    // Đã xóa xong về chuyển trang như ban đầu
    header("Location: index.php");
    exit(); 
    }

?>


