<?php
$email = $password = '';
$emailErr = $passwordErr = '';

if (isset($_POST['btn-submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!$email) {
        $emailErr = 'Vui lòng nhập email';
    }

    if (!$password) {
        $passwordErr = 'Vui lòng nhập password';
    }

    if($email && $password) {
        if($email == 'tranthanhhai200000@gmail.com' && $password == '123' ) {
            $_SESSION['user'] = [
                'email' => $email,
                'name' => 'Administrator',
            ];
    
            header('location:index.php?module=product');
            return;
        }
    }
}
?>
