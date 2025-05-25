<?php
$users=array("kashish","anuj","harsh");
//$users=["kashish","anuj","harsh"];
if(is_array($users)){
    echo "it is an array";
}else{
    echo "it is not an array";
}
echo "<br/>";
unset($users[0]);//remove the element from the array 
print_r($users);
echo"<hr/>";
echo $users[0];
echo "<br/>";
echo $users[1];
echo "<br/>";
echo $users[2];
echo "<br/>";
echo"<hr/>";
sort($users);//ascending order
foreach($users as $x):
    echo $x;
    echo "<br/>";
endforeach;
echo"<hr/>";
for($i=0;$i<count($users);$i++){
    echo "<h2 style='color:pink;'>".$users[$i]."</h2>";
    echo "<br/>";
}
echo"<hr/>";
rsort($users);//descending order
foreach($users as $x): 
    echo $x;
    echo "<br/>";
endforeach;
echo"<hr/>";
$users[2]="niharika";
echo $users[2];
echo"<hr/>";
echo"<br/>";
array_push($users,"shivangi");
foreach($users as $value){
    echo $value;
    echo "<br/>";
}
echo"<hr/>";
array_pop($users);//remove from the end automatically and delete the last element
foreach($users as $x):
    echo $x;
    echo "<br/>";
endforeach;
echo"<hr/>";
array_splice($users,-2);//delete from the end
//array_splice($users,0,2);//delete from the start and 2 items will be deleted
// array_splice($users,1,1);//delete from the 1 index and 1 items will be deleted
for($i=0;$i<count($users);$i++){
    echo "<h2 style='color:pink;'>".$users[$i]."</h2>";
    echo "<br/>";
}
echo"<hr/>";
$arr1=[1,2,3];
$arr2=[4,5,6];
array_shift($arr1);//remove from the start automatically and delete the first element
array_unshift($arr2,9);// add the element in the start
for($i=0;$i<count($arr1);$i++){
    echo "<h2 style='color:pink;'>".$arr1[$i]."</h2>";
    echo "<br/>";
}
echo"<hr/>";
for($i=0;$i<count($arr1);$i++){
    echo "<h2 style='color:pink;'>".$arr1[$i]."</h2>";
    echo "<br/>";
}
echo"<hr/>";
array_reverse($arr1);//reverse the array
for($i=0;$i<count($arr1);$i++){
    echo "<h2 style='color:pink;'>".$arr1[$i]."</h2>";
    echo "<br/>";
}
echo"<hr/>";
$arr3=array_merge($arr1,$arr2);//merge two arrays
print_r($arr3);
echo"<hr/>";
echo"<br/>";
echo in_array(4,$arr2);//check if the element is present in the array
echo"<hr/>";
echo"<br/>";
echo array_search(4,$arr2);//return the index of the element   
echo"<hr/>";
echo"<br/>";
print_r(array_unique($arr1));//return the unique values of the array
echo"<hr/>";
echo"<br/>";
echo array_sum($arr2);//return the sum of the array
echo"<hr/>";
echo"<br/>";
echo array_product($arr1);//return the product of the array
echo"<hr/>";

?>