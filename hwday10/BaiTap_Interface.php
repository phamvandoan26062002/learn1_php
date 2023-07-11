<?php 
// Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". 
// Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật.

// interface Resizable{
//     public function resize($percentage);
// }

// class Rectangle implements Resizable {
//     protected $width;
//     protected $height;

    
//     public function __construct($width, $height) {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function resize($percentage){
//         $this ->width *= $percentage;
//         $this ->height *= $percentage;
//     }

//     public function getWidth(){
//         return $this ->width;
//     }

//     public function getHeight(){
//         return $this ->height;
//     }
// }

// $retangle = new Rectangle(6,8);
// echo "Kích thước ban đầu của H.C.N: " . $retangle->getWidth() ."x" .  $retangle->getHeight() . "<br>";

// $retangle -> resize(5);
// echo "Kích thước sau khi thay đổi của H.C.N:" . $retangle->getWidth() ."x" .  $retangle->getHeight() . "<br>"; 




// -------------------------------------------------------------------------------------------------------------------------------


// Tạo một interface "Logger" với các phương thức "logInfo", "logWarning" và "logError". 
// Tạo một lớp "FileLogger" (Ghi log vào file) và một lớp "DatabaseLogger" (Ghi log vào cơ sở dữ liệu) và triển khai interface Logger cho cả hai lớp.

// interface Logger {
//     public function loginfo($message);
//     public function logWarning($message);
//     public function logError($message);
// }

// class FileLogger implements Logger {
//     public $logfile;

//     public function __construct($logfile) {
//         $this->logfile = $logfile;
//     }

//     public function loginfo($message) {
//         $logEntry = $this->formatLogEntry('INFO', $message);
//         $this->writeToFile($logEntry);
//     }

//     public function logWarning($message) {
//         $logEntry = $this->formatLogEntry('WARNING', $message);
//         $this->writeToFile($logEntry);
//     }

//     public function logError($message) {
//         $logEntry = $this->formatLogEntry('ERROR', $message);
//         $this->writeToFile($logEntry);
//     }

//     private function formatLogEntry($level, $message) {
//         $timestamp = date('Y-m-d H:i:s');
//         return "[$timestamp][$level] $message";
//     }

//     private function writeToFile($logEntry) {
//         file_put_contents($this->logfile, $logEntry . PHP_EOL, FILE_APPEND);
//     }
// }

// class DatabaseLogger implements Logger {
//     private $dbConnection;

//     public function __construct($dbConnection) {
//         $this->dbConnection = $dbConnection;
//     }

//     public function logInfo($message) {
//         $this->writeLogToDatabase('INFO', $message);
//     }

//     public function logWarning($message) {
//         $this->writeLogToDatabase('WARNING', $message);
//     }

//     public function logError($message) {
//         $this->writeLogToDatabase('ERROR', $message);
//     }

//     private function writeLogToDatabase($level, $message) {
//         $timestamp = date('Y-m-d H:i:s');
//         $query = "INSERT INTO logs (timestamp, level, message) VALUES (?, ?, ?)";
//         $statement = $this->dbConnection->prepare($query);
//         $statement->execute([$timestamp, $level, $message]);
//     }
// }


// $filelogger = new FileLogger('logs.txt');
// $filelogger->loginfo("This is an information log");
// $filelogger->logWarning("This is a warning log");
// $filelogger->logError("This is an error log");

// $dbConnection = new PDO("mysql:host=localhost;dbname=phamvandoan", "root", "");
// $databaseLogger = new DatabaseLogger($dbConnection);
// $databaseLogger->logInfo("This is an information log");
// $databaseLogger->logWarning("This is a warning log");
// $databaseLogger->logError("This is an error log");

// -------------------------------------------------------------------------------------------------------------------------------

// Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw". 
// Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable và triển khai phương thức draw cho mỗi hình.


// interface Drawable {
//     public function draw();
// }

// class circle implements Drawable{
//     protected $radius;

//     public function __construct($radius)
//     {
//         $this -> radius = $radius;
//     }
    
//     public function draw(){
//         echo "Vẽ đường tròn với bán kính " . $this -> radius . " cm" . "<br>";
//     }
// }

// class Square implements Drawable{
//     protected $length;
//     protected $width;

//     public function __construct($length, $width){
//         $this -> length = $length;
//         $this -> width = $width;
//     }
    
//     public function draw(){
//         echo "Vẽ hình chữ nhật có chiều dài là " . $this -> length . " cm chiều rộng là " . $this -> width . "cm" ;
//     }
// }

// $Circle = new circle(5);
// $Circle -> draw();

// $square = new Square(8,6);
// $square -> draw();

// -------------------------------------------------------------------------------------------------------------------------------

// Tạo một interface "Sortable" với phương thức "sort". 
// Tạo một lớp "ArraySorter" (Sắp xếp mảng) và một lớp "LinkedListSorter" (Sắp xếp danh sách liên kết) 
// triển khai interface Sortable cho cả hai lớp.

interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function sort() {
        sort($this->data);
        return $this->data;
    }
}

$arraySorter = new ArraySorter([9, 34, 452, 92, 5, 2]);
$sortedArray = $arraySorter->sort();
echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
















?>