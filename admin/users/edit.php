<?php
$userID = $_GET['id'] ?? null;
$userInfo = null;

$idUser = $_GET['id'] ?? null;
    $userInfo = null;
    if (isset($_POST['btn-submit'])) { // Khi nhấn submit form thêm mới
        $data = $_POST;
        unset($_POST['btn-submit']);
        // $id = 1;
        if (!empty($_SESSION['users'])) {
            $userInfo = end($_SESSION['users']);
            $id += $userInfo['id'];
        }
        // Kiểm tra nếu có upload ảnh
        //  $data['avartar'] = '' đường dẫn file ảnh
        // Xem thêm hay là sửa
        if (!empty($_GET['id'])) { // Sửa
            $data['id'] = $_GET['id'];
            // Tìm key của array
            $keyOfUser = null;
            foreach ($_SESSION['users'] as $key => $user) {
                if ($user['id'] == $_GET['id']) {
                    $keyOfUser = $key;
                    break;
                }
            }
            $_SESSION['users'][$keyOfUser] = $data;
        }
        if (empty($_GET['id'])) { // Thêm mới
            $data['id'] = $id;
            $_SESSION['users'][] = $data;
        }
        header('location:index.php?module=user');
    }


    
    foreach ($_SESSION['users'] as $key => $user) {
        if ($user['id'] == $idUser) {
            $userInfo = $user;
            break;
        }
    }
    if (empty($userInfo)) {
        echo 'User not found!';
        exit;
    }
    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
    }
    $name = $email = $phone = $address = $gender = '';
    $nameErr = $emailErr = $phoneErr = $addressErr = $genderErr = '';
    if(isset($_POST['btn-submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        if (empty($name)) {
            $nameErr = 'Vui lòng nhập họ tên !';
        }
        if (empty($email)) {
            $emailErr = 'Vui lòng nhập email !';
        }
        if (empty($phone)) {
            $phoneErr = 'Vui lòng nhập số điện thoại!';
        }
        if (empty($address)) {
            $addressErr = 'Vui lòng nhập địa chỉ!';
        }
        if (empty($gender)) {
            $genderErr = 'Vui lòng chọn giới tính!';
        }
}
foreach ($_SESSION['users'] as $user) {
    if ($user['id'] == $userID) {
        $userInfo = $user;
        break;
    }
}
?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3 class="display-5">Add Information</h3>
    <a href="index.php?module=user&action=list">Back</a>
</div>
<div class="container">
    <form action="index.php?module=user&action=edit&id=<?=$userID?>" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label" >Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="fullname" value="<?=$userInfo['fullname']?>"/>
                <!-- <?= $nameErr ? '<div class="error" style="color:red">'.  $nameErr .'</div>' : '' ?> -->
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="email" value="<?=$userInfo['email']?>"/>
                <!-- <?= $emailErr ? '<div class="error" style="color:red">'.  $emailErr .'</div>' : '' ?> -->
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label" >Phone</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="phone" value="<?=$userInfo['phone']?>" />
                <!-- <?= $phoneErr ? '<div class="error" style="color:red">'.  $phoneErr .'</div>' : '' ?> -->
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label" >Address</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="address"  value="<?=$userInfo['address']?>"/>
                <!-- <?= $addressErr ? '<div class="error" style="color:red">'.  $addressErr .'</div>' : '' ?> -->
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-9">
                <input type="radio" name="gender" value="1" <?= $userInfo['gender'] == 1 ? 'checked' : '' ?>/>Nam
                <input type="radio" name="gender" value="2" <?= $userInfo['gender'] == 2 ? 'checked' : '' ?>/>Nữ
                <!-- <?= $genderErr ? '<div class="error" style="color:red">'.  $genderErr .'</div>' : '' ?> -->
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <button type="submit" name="btn-submit" class="btn btn-primary">Save</button> &nbsp;
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>
