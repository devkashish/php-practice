<?php
class A{
    static $name="kashish";
    public static function hello(){
        echo "hello world";
    }
    public function display(){
        echo self::$name ;
       }
}
class B extends A{
    public $greeting;
    public function __construct(){
        $this->greeting=parent::hello();
    }
}
$obj=new A();
$obj->display();
A::hello();
A::$name="anuj";
echo A::$name;
echo "<br/>";
$b=new B();
echo "$b->greeting ";
?>