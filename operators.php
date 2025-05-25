<?php
$a=1;
$b=1;
//arithmetic operators
echo $a+$b;
echo "<br/>";
echo $a-$b;
echo "<br/>";
echo $a*$b;
echo "<br/>";
echo $a/$b;
echo "<br/>";
echo $a%$b;
echo "<br/>";
echo $a**$b;
echo "<br/>";
//assignment operators
$a=$b;
echo $a;
echo "<br/>";
$a+=1;
echo $a;
echo "<br/>";
$a-=1;
echo $a;
echo "<br/>";
$a*=1;
echo $a;
echo "<br/>";
$a/=1;
echo $a;
echo "<br/>";
$a%=1;
echo $a;
echo "<br/>";
$a**=1;
echo $a;
echo "<br/>";
//comparison operators
$c="1";
var_dump($a===$c);//fals
var_dump($a==$c);//true
$d=true;
var_dump($a===$d);//false
var_dump($a==$d);//true
var_dump($a!==$c);
//spaceship operator
var_dump($a <=> $b);//0 if a<b then -1 if a>b then 1 and if a=b then 0
var_dump($a <=> $c);//0
//increment and decrement operators
echo ++$a;//2
echo "<br/>";
echo --$a;//1
echo "<br/>";
echo $a++;//1
echo "<br/>";
echo $a--;//2 now a=1
echo "<br/>";
//logical operators
var_dump($a && $b);//true
var_dump($a || $b);//true
var_dump($a xor $b);//false 
var_dump($a and $b);//true
var_dump($a or $b);//true
var_dump(!$a);//false
?>
