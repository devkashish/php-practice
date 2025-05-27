<?php
function add (int $a,int $b){//with type hinting
    return $a+$b;
}
echo add(10,20);
function sub($a,$b){//without type hinting
    return $a-$b;
}   
echo sub(10,20);
?>