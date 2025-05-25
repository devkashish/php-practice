<?php
 $name=" kashish dhawan ";
 echo "my name is $name<br/>";
// echo 'my name is $name' (error)
echo "my name is ".$name ;
echo"<br/>";
echo  'my name is '.$name;
echo "<br/>";
echo strlen($name);
echo "<br/>";
echo str_word_count($name);//2
echo "<br/>";
echo strtoupper($name);
echo "<br/>";
echo strtolower($name);
echo "<br/>";
echo str_replace("dhawan","yadav",$name);
echo "<br/>";
echo strrev($name);
echo "<br/>";
echo trim($name);
echo "<br/>";
$x="hello";
$y="world";
echo $x.$y;
echo "<br/>";
echo $x. " ".$y;
echo "<br/>";
echo "$x $y";
//slicing
echo "<br/>";
echo substr($x,2,3);
echo "<br/>";
echo substr($x, 1);
echo "<br/>";
echo substr($x, -2,3);
echo "<br/>";
echo "value of \$name is".$name;
echo "<br/>";
?>