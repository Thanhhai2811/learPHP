<?php 
    class Person {
        // Thuộc tính
        public $name;
        public $age;
    
        // Phương thức 
        public function sayHello() {
            echo "Xin chào! Tôi là " . ($this->name) . "</br>" . "tuổi" . ($this->age);
        }
    }
    
    // Tạo một đối tượng từ class Person
    $person = new Person();
    $person->name = "John";
    $person->age = 25;
    
    // Gọi phương thức sayHello()
    $person->sayHello();



?>
