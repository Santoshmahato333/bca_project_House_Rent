<?php
class Users{
    private $conn;
    public function __construct(){
        $this->conn = mysqli_connect('localhost', 'root', '', 'crud1');
        if(mysqli_connect_error()){
            echo "Connection failed: " . mysqli_connect_error();
        } else {
            
        }
    }
    function addrecord($data){
        $query = "INSERT INTO users SET name='".$data['name']."', email='".$data['email']."', address='".$data['address']."', phone='".$data['phone']."'";
        $runQuery = mysqli_query($this->conn, $query);
        if($runQuery){
            echo "Successfully data inserted";
            header("Location: display.php");
        } else {
            echo mysqli_errno($this->conn);
        }
    }


}
$user = new Users();
if(isset($_POST['submit'])){
    $user->addrecord($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register Student</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address"><br><br>
        <label for="phone">Phone:</label>
        <input type="number" name="phone" id="phone"><br><br>
        <button type="submit" name="submit" value="submit">Add users</button>
    </form>
</body>
</html>
