<?php
$users=[
    ["no"=>1,"name"=>"kashish","age"=>20,"gender"=>"female"],
    ["no"=>2,"name"=>"anuj","age"=>20,"gender"=>"male"],
    ["no"=>3,"name"=>"harsh","age"=>20,"gender"=>"male"]
];
$arr=[
    [1,2,3,4],
    ['a','b','c','d','e'],
    ['A','B','C'],
];
for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr[$i]);$j++){
        echo $arr[$i][$j];
        echo "<br/>";
    }
}
foreach($arr as $x){
    foreach($x as $y){
        echo $y;
        echo "<br/>";
    }
}
echo "<pre>";
print_r($users);
echo "</pre>";
echo "<br/>";
echo $users[0]["no"];
echo "<br/>";
echo $users[0]["name"];
echo "<br/>";
echo $users[0]["age"];
echo "<br/>";
echo $users[0]["gender"];
echo "<br/>";
echo $users[1]["no"];
echo "<br/>";
echo $users[1]["name"];
echo "<br/>";
echo $users[1]["age"];
echo "<br/>";
echo $users[1]["gender"];
echo "<br/>";
echo $users[2]["no"];
echo "<br/>";
echo $users[2]["name"];
echo "<br/>";
echo $users[2]["age"];
echo "<br/>";
for($i=0;$i<count($users);$i++){
    echo "<ul>";
    // for($j=0;$j<count($users[$i]);$j++){
    //     echo $users[$i][$j];
    //     echo "<br/>";
    // } //for loop is for indexed array 
    foreach($users[$i] as $key=>$value){
        echo "<li>$key=$value</li>";
        echo "<br/>";
    }
    echo "</ul>";
}
foreach($users as $value){
    echo "<ul>";
    foreach($value as $key=>$value){
        echo "<li>$key=$value</li>";
        echo "<br/>";
    }
    echo "</ul>";
}
?>
