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
        } else {
            echo mysqli_errno($this->conn);
        }
    }
    function ShowData(){
        $selectQuery="SELECT * FROM users";
        $getQuery=mysqli_query($this->conn,$selectQuery);
        $responses=array();
        $count=1;
    while($getData=mysqli_fetch_array($getQuery)){
        $responses[]=$getData;
    }
    return $responses;
    }

}
$user = new Users();
$record=$user->ShowData();
?>
<table border="1" width="80%">
    <thead>
        <tr>
            <th>Sn</th>
            <th>Name:</th>
            <th>Email:</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($record as $value){?>
        <tr>
            <td><?php echo $value['uid']?></td>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['email'];?></td>
            <td><?php echo $value['address'];?></td>
            <td><?php echo $value['phone'];?></td>
            <td>
                <a href="edit.php?id=<?php echo $value['uid'];?>">edit</a>
                <a href="">update</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>