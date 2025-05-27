<?php
class constants{
    const PI=3.14;
    function area($radius){
        return self::PI*$radius*$radius;//self is used to access class constant inside the class
}}
echo constants::PI;//:: is used to access class constant outside the class
echo "<br/>";
//echo constants::area(5);
$c=new constants();
echo $c->area(5);
?>