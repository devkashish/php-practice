<?php
trait A{
    public function show(){
        echo "A";
    }
}
trait B{
    public function show(){
        echo "B";
    }
}
class C{
    use A;
    use B{
        B::show insteadof A;//trait B overrides trait A trait overriding
        A::show as show1;//alias of show of trait A if we need to call both at the same time
    }
   
}
$obj=new C();
//$obj->show();//error as compiler gets confused which trait method to call
$obj->show();
$obj->show1();
?>