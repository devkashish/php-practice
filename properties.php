<?php
class Properties{
    public $name;
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
var_dump($p1 instanceof Properties);
?>