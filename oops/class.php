<?php
class Mathoperations{
    public $val=10;
    function add($a,$b){
        return $a+$b+$this->val;
    }
    function sub($a,$b){
        return $a-$b;
    }
    function mul($a,$b){
        echo $a*$b;
    }

}
 $maths=new Mathoperations();
 echo $maths->add(2,3);
 echo "<br/>";
 echo $maths->sub(2,3);
 echo "<br/>";
  $maths->mul(2,3);
 ?>