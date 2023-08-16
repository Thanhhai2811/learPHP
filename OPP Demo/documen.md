1: Các ý nghĩa và một số ví dụ.
-OPP : là lập trình hướng đối tượng
- class : là một khối mô ta một đối tượng và các đối tượng có cùng các thuộc tính
và phương thức, được sử dụng để xác định cấu trúc và hành vi của một đối tượng.
Thuộc tính đại diện cho trạng thái của đối tượng trong lập trình hướng đối tượng


VD như sau :

 Class Person {
    // Thuộc tính :
    public $pullname;
    public $age;


 // Phương thức 
    public function sayhello() {
        echo 'Xin chào ! tôi là ' . $this->name . ".";
    }
}

// Tạo một đối tượng từ class person

$person = new person();
$person ->name = 'John'
$person->age = 

2: Object
    - Object hay còn gọi là đối tượng , trong PHP nó là một tập hợp các
     thuộc tính cụ thể nào đó cho một đối tượng cụ thể.

property :
     là một biến được định nghĩa trong một class và đại diện cho trạng thái của
     một đối tượng, và lưu trữ các thao tác giá trị liên quan.

     *VD : 
        class Person {
        public $name;  // Property công khai
        private $age;  // Property riêng tư
    
        public function setAge($age) {
            $this->age = $age;
        }
    
        public function getAge() {
            return $this->age;
        }
    }
    
    $person = new Person();
    $person->name = "John";  // Truy cập và gán giá trị cho property 
    $person->setAge(25);    // Truy cập và gán giá trị cho property  thông qua phương thức
    
    echo $person->name;     // In ra giá trị của property 
    echo $person->getAge(); // In ra giá trị của property riêng tư thông qua phương thức
?>


3 : static : 

    Được sử dụng trong các tình huống mà mình muốn thực hiện một cái liên quan đến class 
    mà không cần truy cập  hoặc thay đổi trạng thái của đối tượng , có thể gọi trực tiếp
    từ class mà không cần khởi tạo

     <?php
        class heloWord{
            public static function welcome(){
                echo "Chào cả nhà";
            }
        }
        heloWord::welcome();
    ?>

4 : Clone(object)
- gán lại đối tượng của class trước 
$produc1 = new classAge
-> $produc2 = clone $produc2

5 :final(Chống override, không cho phép kế thừa)
- được sử dụng để đánh dấu một class hoặc thuộc tính không được kế thừa hoặc ghi đè(override) bởi các class con
*VD : 
class ParentClass {
    final public function doSomething() {
        echo "làm việc gì đó.";
    }
}

class ChildClass extends ParentClass {
    // Lỗi: Không thể ghi đè phương thức doSomething()
}

6 (extends, parent) :

Được sử dụng để khai báo một class con kế thừa một class cha , khi class con kế thừa nó sẽ thừa hưởng
các thuộc tính và có thể ghi đè.
*VD : 
class students Person
{
 class đó sẽ được kế thừa các thuộc tính : age ,name của person
}
















