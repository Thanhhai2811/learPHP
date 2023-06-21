<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form giao hàng</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    ?>


    <div class="container">
        <div class="one-product">
        <ul>
            <li>Danh mục sản phẩm</li>
            <li><a href="laptop.php">Laptop</a></li>
            <li><a href="printer.php">Printer</a></li>
            <li><a href="mobile.php">Mobile</a></li>
            <li><a href="fax.php">Fax</a></li>
        </ul>
    </div>
    <span>Bạn đang ở trang mobile,vui lòng nhập thông tin </span>
    <form action="" method="post">
        <div class="tow-product">
        <label>Họ và tên: </label>
        <input type="text" placeholder="00000000">
        </div>
        <div class="tow-product">
        <label>Số điện thoại: </label>
        <input type="text" placeholder="0000-000-000">
        </div>
        <div class="tow-product">
        <label>Địa chỉ nhận hàng: </label>
        <input type="text" placeholder="0000000">
        </div>
        <button>Gửi đi</button>
        <div class="result">

        </div>
        
    </form>
    </div>
</body>
</html>