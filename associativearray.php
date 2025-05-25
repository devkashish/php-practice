<?php
$users=["name"=>"kashish","age"=>20,"gender"=>"female"];
echo $users["name"];
echo "<br/>";
echo $users["age"];
echo "<br/>";
echo $users["gender"];
echo "<br/>";
echo"<hr/>";
print_r(array_keys($users));// give keys only
echo"<hr/>";
print_r(array_values($users));//give values only
echo"<hr/>";
//sort($users);//sort associative array in ascending order
echo implode($users);//convert the array to string
echo"<hr/>";
echo"<br/>";
$str="kashish,anuj,harsh";
print_r(explode(",",$str));//convert the string to array ( , -> separator) 
echo"<hr/>";
print_r(explode("h",$str));
echo "<br/>";
echo"<hr/>";
foreach($users as $key=>$value){
    echo "$key=$value";
    echo "<br/>";
}
echo"<hr/>";
asort($users);//sort associative array in ascending order acc to the value
foreach($users as $key=>$value){
    echo "$key=$value";
    echo "<br/>";
}
echo"<hr/>";
ksort($users);//sort associative array in ascending order acc to the key
foreach($users as $key=>$value){
    echo "$key=$value";
    echo "<br/>";
}
echo"<hr/>";
arsort($users);//sort associative array in descending order acc to the value
foreach($users as $key=>$value){
    echo "$key=$value";
    echo "<br/>";
}
echo"<hr/>";
krsort($users);//sort associative array in descending order acc to the key
foreach($users as $key=>$value){
    echo "$key=$value";
    echo "<br/>";
}
?>