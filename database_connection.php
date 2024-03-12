<?php
class users{
    private $conn;
    public function __construct(){
        $this->conn = mysqli_connect('localhost', 'root', '', 'crud1');
        if(mysqli_connect_error()){
            echo "Connection failed: " . mysqli_connect_error();
        } else {
            
        }
    }
    }
?>