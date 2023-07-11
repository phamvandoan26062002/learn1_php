<?php
// Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng là "calculateArea". 
// Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) kế thừa từ lớp Shape và triển khai phương thức calculateArea cho từng hình.
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
echo "Diện tích hình tròn: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(4, 6);
echo "Diện tích hình chữ nhật: " . $rectangle->calculateArea();


// Tạo một abstract class "Animal" (Động vật) với một phương thức trừu tượng là "makeSound". 
// Tạo các lớp con "Dog" (Chó) và "Cat" (Mèo) kế thừa từ lớp Animal và triển khai phương thức makeSound theo cách riêng của từng loại động vật.


abstract class Animal {
    abstract protected function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Gâu gâu";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meo meo meo trả lại tâm trí tôi đây!";
    }
}

$animals = [new Dog(), new Cat()];

foreach ($animals as $animal) {
   echo $animal->makeSound() . "<br>";
}


// Tạo một abstract class "Employee" (Nhân viên) với các thuộc tính trừu tượng như "name" (tên) và "salary" (mức lương). 
// Tạo các lớp con "Manager" (Quản lý) và "Staff" (Nhân viên) kế thừa từ lớp Employee và triển khai các thuộc tính và phương thức theo cách riêng của từng lớp.

abstract class Employee {
    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    abstract public function bonusSales();

    public function getDetails() {
        return "Name: " . $this->name . ", Salary: " . $this->salary;
    }
}

class Manager extends Employee {
    private $allowance;

    public function __construct($name, $salary, $allowance) {
        parent::__construct($name, $salary);
        $this->allowance = $allowance;
    }

    public function bonusSales() {
        return $this->salary * 0.2;
    }

    public function getDetails() {
        return parent::getDetails() . ", Allowance: " . $this->allowance;
    }
}

class Staff extends Employee {
    public function bonusSales() {
        return $this->salary * 0.1;
    }
}

$manager = new Manager("John Doe", 5000, 1000);
echo $manager->getDetails() . "\n";
echo "Bonus: " . $manager->bonusSales() . "<br />";

$staff = new Staff("Jane Smith", 3000);
echo $staff->getDetails() . "\n";
echo "Bonus: " . $staff->bonusSales();



// Tạo một abstract class "Vehicle" (Phương tiện) với một phương thức trừu tượng là "start". 
// Tạo các lớp con "Car" (Xe hơi) và "Motorcycle" (Xe máy) kế thừa từ lớp Vehicle và triển khai phương thức start theo cách riêng của từng loại phương tiện.

abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        return "Car...";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        return "Motorcycle...";
    }
}

$vehicles = [new Car(), new Motorcycle()];

foreach ($vehicles as $vehicle) {
    echo $vehicle->start() . "<br />";
}


// Tạo một abstract class "Database" (Cơ sở dữ liệu) với các phương thức trừu tượng như "connect", "query" và "disconnect". 
// Tạo các lớp con "MySQLDatabase" và "PostgreSQLDatabase" kế thừa từ lớp Database và triển khai các phương thức theo cách riêng của từng loại cơ sở dữ liệu.

abstract class Database{
     abstract public function connect();
     abstract public function query();
     abstract public function disconnect();
}

class MySQLDatabase extends Database{
    public function connect(){
        echo "------MySQLDatabase--------" . "<br>";
        return "Câu lệnh kết nối: conn = mysqli_connect(servername, username, password, database);";
    }
    public function query(){
        return "Câu lệnh truy vấn: SELECT * FROM <tên bảng>";
    }
    public function disconnect(){
        return "Câu lệnh ngắt kết nối: mysqli_close(conn);";
    }
}

class PostgreSQLDatabase extends Database{
    public function connect(){
        echo "------PostgreSQLDatabase--------" . "<br>";
        return "Câu lệnh kết nối: conn = new PDO(pgsql:host=host;dbname=dbname, username, password)";
    }
    public function query(){
        return "Câu lệnh truy vấn: SELECT * FROM <tên bảng>";
    }
    public function disconnect(){
        return "Câu lệnh ngắt kết nối: conn = null";
    }
}


$Databases = [ new MySQLDatabase, new PostgreSQLDatabase];
foreach ($Databases as $Database){
    echo $Database-> connect() . "<br />";
    echo $Database -> query() . "<br />";
    echo $Database-> disconnect() . "<br />";
}

?>