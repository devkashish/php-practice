<?php
class Properties{
    public $name,$age;
    function __construct(){
        $this->age=21;
    }
    function setname($name){
        $this->name=$name;

    }
    function getname(){
        return $this->name;
    }
}
$p1=new Properties();
$p1->setname("kashish");
echo $p1->getname();
echo "<br/>";
$p1->name="anuj";
echo $p1->getname();
echo "<br/>";
var_dump($p1);
echo "<br/>";
var_dump($p1 instanceof Properties);//boolean
echo "<br/>";
echo $p1->age;
echo "<br/>";
$p1->age=20;
echo $p1->age;
?>