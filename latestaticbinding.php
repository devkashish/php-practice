<?php
class A{
    public static function hello(){
        echo "hello <br/>";
    }

    public static function display(){
        echo static::hello();
    }
}
class B extends A{
    public static function hello(){
        echo "hello world <br/>";
    }
}
B::hello();
A::hello();
B::display();// late static binding (calling from class B so it will give hello world)
A::display();//calling from class A so it will give hello only
?>