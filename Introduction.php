<?php
class Introduction{
    public $x=10;
    public $y=20;
     public static function add(int $a,int $b){
        //what is static method
        
        echo self::$x;
        return $a+$b;
         
    }
    function sub(int $a,int $b){
        // return $a-$b;
        echo $this->x -$this->y;
    }
    function mul(int $a,int $b){
        return $a*$b;
    }
    function div(int $a,int $b){
        return $a/$b;
    }
    // function run(){
    //     // $a=new Introduction();
    //     // echo "hello world".$a->x;
    //     echo $this->x;
    // }
}   
// $obj= new Introduction();
// $obj->run();
// echo $obj->x;
$obj= new Introduction();
// $obj->add(12,12,);
$obj->sub(12,12,);
$obj->mul(12,12,);
$obj->div(12,12);
Introduction::add(1,2);

