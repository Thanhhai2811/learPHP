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

$yourname = $telephone = $address = '';
$yournameAdd = $telephoneAdd = $addressAdd = '';
$conten = '';

    // Kiểm tra xem nó nhận giá trị chưa
    if(isset($_POST['btn-submit'])) {
        $yourname = $_POST['yourname'];
        $telephone = $_POST['telephone'];
        $address = $_POST['address'];

        // validate yourname
    if(empty($yourname)) {
        $yournameAdd = 'Nhập họ và tên.';
    } else if(strlen($_POST['yourname']) < 4 ) {
        $yournameAdd = 'Họ tên không được viết quá 4 ký tự.';
    }

    // validate telephone 
    if(empty($telephone)) {
        $telephoneAdd = 'Nhập số điện thoại.';
    } else if(strlen($_POST['telephone']) != 10 ) {
        $telephoneAdd = 'Số điện thoại viết đủ 10 số. ';
    } else if(!is_numeric($_POST['telephone'])) {
        $telephoneAdd = 'Số điện thoại phải là số.';
    }

    //validate address 
    if(empty($address)) {
        $addressAdd = 'Nhập địa chỉ của bạn.';
    } else if(strlen($_POST['address']) <3) {
        $addressAdd = 'vui lòng nhập địa chỉ của bạn.';
    }

    // sau khi nhập đúng và đủ
    if($yourname && $telephone && $address) {
        $conten .= "<span>Họ tên của bạn : $yourname</span>";
        $conten .= "<span>Số điện thoại của bạn : $telephone</span>";
        $conten .= "<span>Địa chỉ của bạn : $address</span>";
    }
    }
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
    <span>Bạn đang ở trang,vui lòng nhập thông tin </span>
    <form action="" method="post">  
        <div class="tow-product">
        <label>Họ và tên:</label>
        <input type="text" name="yourname" placeholder="Trần Thanh Hải" class="<?= $yournameAdd ? 'input-error' : '' ?>" value="
        <?= $yourname ?>" /> <?= $yournameAdd ? "<span class='smg-error'>{$yournameAdd}</span>" : '' ?>
        
        </div>
        <div class="tow-product">
        <label>Số điện thoại: </label>
        <input type="text" name="telephone" placeholder="0397794349" class="<?= $telephoneAdd ? 'input-error' : '' ?>" value="<?= $telephone ?>" />
        <?= $telephoneAdd ? "<span class='smg-error'>{$telephoneAdd}</span>" : '' ?>
        </div>
        <div class="tow-product">
        <label>Địa chỉ nhận hàng: </label>
        <input type="text" name="address" placeholder="Xã, Thành Phố, Tỉnh" class="<?= $addressAdd ? 'input-error' : '' ?>" value="<?= $address ?>" />
        <?= $addressAdd ? "<span class='smg-error'>{$addressAdd}</span>" : '' ?>
        </div>

        <button name= "btn-submit">Gửi đi</button>
        <div class="result">
          <? = $content ?>
        </div>
        
    </form>
    </div>
</body>
</html>