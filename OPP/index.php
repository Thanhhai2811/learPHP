<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập OOP </title>
    <style>
        .container {
            width : 500px;
            border: 1px solid;
            height : 400px;
            margin: 0px auto;

        }

        .form {
            color: red;
        }

        #btn-submit {
            color :  #f05123;
        }

        .btn-reset {
            color: red;
        }
       

    </style>
</head>
<body>
    <?php require_once('studen.php') ?>
    <div class="container">
        <h2>Thông tin sinh viên</h2>
        <form action="" method="POST">
            <div class="form-studen">
                <label>Họ và tên: </label>
                <input type="text" name="Name"> 
                <?php if ($errFullName): ?>
                    <span class="form"><?= $errFullName ?></span>
                <?php endif; ?>    
            </div>

            <div class="form-studen">
                <label>Email: </label>
                <input type="text" name="email">
                <?php if ($errEmail):?>
                    <span class="form"><?= $errEmail?></span>
                <?php endif;?>
            </div>

            <div class="form-studen">
                <label>Điện thoại: </label>
                <input type="text" name="phone">
                <?php if ($errPhone):?>
                    <span class="form"><?= $errPhone?></span>
                <?php endif;?> 
            </div>

            <div class="form-studen">
                <label>Giới tính: </label>
                <label>
                    <input type="radio" name="gender" value="1" <?= $student->getGender() == 1 ? 'checked' : '' ?>>Nam
                    <input type="radio" name="gender" value="2" <?= $student->getGender() == 2 ? 'checked' : '' ?>>Nữ
                </label>
                <?php if ($errGender):?>
                    <span class="form"><?= $errGender?></span>
                <?php endif;?>

            </div>

            <button name="btn-submit">Lưu lại</button>
            <button name="btn-reset">Hủy</button>
        </form>
        <div class="content">
            <p> Họ và tên: <?= $student->getName()?></p>
            <p> Email: <?= $student->getEmail()?></p>
            <p> Điện thoại: <?= $student->getPhone()?></p>
            <p> Giới tính: <?= $student->getGender() == 1 ? 'Nam' : 'Nữ'?></p>
        </div>
    </div>
</body>
</html>