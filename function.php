<?php
function myTest() {
        $x = 0;
        echo $x;
        $x++;
    }
    
    myTest();//0
    echo "<br/>";
    myTest();//0
    echo "<br/>";
    myTest();//0
    echo "<br/>";
    function myTest1() {
        static $x = 0;
        echo $x;
        $x++;
    }
    
    myTest1();//0
    echo "<br/>";
    myTest1();//1
    echo "<br/>";
    myTest1();//2
    echo "<br/>";
function add($a,$b){
    return $a+$b;
}
echo add(2,3);//5
echo "<br/>";
$a=add(2,30);
echo $a;//32
echo "<br/>";
function mul($a=2,$b=3){
    echo $a*$b;
}
mul(7,8);//56
echo "<br/>";
mul();//6
echo "<br/>";
mul(1);//3 a=1 b=3
echo "<br/>";
mul(1,2);//2
echo "<br/>";
mul(1,2,3);//2 a=1 b=2
echo "<br/>";
mul(1,2,3,4);//2 a=1 b=2
echo "<br/>";
$name="anuj";
function getname(){
    $n="kashish";
    echo $GLOBALS["name"];
    echo "<br/>";
    global $name; // global variable and local variable have same name  and value of global variable can be changed inside the funcn by making loval variabe of same name
    echo $name;
    echo "<br/>";
    $name ="nikku";
    echo $name;
    echo "<br/>";
    echo $n;
    echo "<br/>";
    
}
getname();
echo $name;
echo "<br/>";
//echo $n;//error local variable cannot be called outside 
?>