<?php

namespace App\controllers;
use mysqli;
class Database{ 
    public function _construct(){
        $servername = "localhost";
$username = "root";
$password = "mysql" ;
$conn = new mysqli($servername, $username, $password);
if (!$conn) {
//die("Connection failed: ". mysqli_connect_error());
die("Connection failed: ". $conn->connect_error());
    
}
echo "Connected successfully";
    }
public function Helloworld(){
echo "Hello World";
    }

}
// Bai2,3
namespace Controller\Database;

// Bai 4
// namespace App\Controller\Database;
use PDOException;
use PDO;

class DatabaseController
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "mysql";
    
    public $conn;
    
    public function __construct()
    {
        
        try {
            $conn = new PDO("mysql:host=$this->servername", $this->username, $this->password);
            // Bật chế độ PDO MODE ERROR KHI CÓ LỖI XẢY RA TRONG QUÁ TRÌNH TRUY VẤN
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Kết nối thành công!";
        } catch (PDOException $e) {
            echo "PDOException Lỗi kết nối cơ sở dữ liệu" . $e->getMessage();
        }
    }
}
