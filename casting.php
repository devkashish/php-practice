<?php
$a=1;
$b=(string)$a;
echo $b;
echo "<br/>";
var_dump($b);
echo "<br/>";
$a=(int)$a;
echo $a;
echo "<br/>";
$c=(float)$a;
echo $c;
echo "<br/>";
$d=(bool)$a;
echo $d;
echo "<br/>";
$e=(array)$a;
echo "<br/>";
var_dump($e);
echo "<br/>";
// $f=(object)$a;
// echo $f;
// echo "<br/>";//object is not supported
//$a=(unset)$a;// unset is used to unset a variable to null that no longer exists
echo "<br/>";
$f="hii";
$g=(int)$f;
var_dump($g);
echo "<br/>";
echo $g;
echo "<br/>";
$h=(float)$f;
var_dump($h);
echo "<br/>";
echo $h;
echo "<br/>";
$i=(array)$f;
var_dump($i);
echo "<br/>"; 


?>
