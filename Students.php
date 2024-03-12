<?php
class Students{
    public  function __construct() {
        echo "i am form constructor";
    }
    public function __destruct(){
        echo " i am form destructor";
    }
    public function test(){
        echo "i am form test method";
    }
}
$obj=new Students();
$obj->test();
new Students();