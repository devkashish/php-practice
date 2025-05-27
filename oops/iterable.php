<?php
function list1(iterable $list){
    foreach($list as $x){
        echo $x;
        echo "<br/>";
    }
}
$arr=[1,2,3,4];
list1($arr);
?>