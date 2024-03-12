<?php
class User{
    public static function getVal(){
        return "test".static::$c;
    }
}
class B extends User{
    static $c=8;
}
echo B::getVal();