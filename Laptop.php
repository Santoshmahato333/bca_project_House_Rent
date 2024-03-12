<?php
trait Bca{
    public $x=10;
}
class Laptop{
    public function brand(){
        return 'Laptop';
    }
}
class Dell extends Laptop{
    use Bca;

}
$obj = new Laptop();
$obj =new Dell();
$obj->brand();