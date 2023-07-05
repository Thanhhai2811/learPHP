<?php

class Student   
{
    protected $Name;
    protected $email;
    protected $phone;
    protected $gender;
    // Set name, get để in ra dữ liêu màn hình
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    
    public function getName()
    {
        return $this->Name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getGender()
    {
        return $this->gender;
    }


    //  kiểm tra lỗi khi nhập các thông tin 
    public static function getMessageError($inputName)
    {
        if (empty($_POST[$inputName])) {
            if ($inputName === 'Name') {
                return 'Nhập họ tên của bạn ';
            } else if ($inputName === 'email') {
                return 'Nhập emai của bạn';
            } else if ($inputName === 'phone') {
                return 'Nhập số điện thoại của bạn';
            } else if ($inputName === 'gender') {
                return '';
            }
        }
        return;
    }

    public static function isFormSubmitted() 
    {
        return isset($_POST['btn-submit']);
    }

    // Sử lý submit form 
    public function processForm()
    {
        if (self::isFormSubmitted()) {
            $fullName = $_POST['Name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        }

        $errFullName = self::getMessageError('Name');
        if (!$errFullName) {
            $this->setName($fullName);
        }

        $errEmail = self::getMessageError('email');
        if (!$errEmail) {
            $this->setEmail($email);
        }

        $errPhone = self::getMessageError('phone');
        if (!$errPhone) {
            $this->setPhone($phone);
        }

        $errGender = self::getMessageError('gender');
        if (!$errGender) {
            $this->setGender($gender);
        }

    }

}

$student = new Student;

$student->processForm();

$errFullName = Student::getMessageError('Name');
$errEmail = Student::getMessageError('email');
$errPhone = Student::getMessageError('phone');
$errGender = Student::getMessageError('gender');