<?php
class UserAuth {
    function login($usertype){
        echo " $usertype Login";
    }
}
class Students extends UserAuth{
    function getname(){
        echo "Kashish";
    }
}
class Teachers extends UserAuth{
    function getskill(){
        echo "PHP";
    }
    
}
$s1=new Students();
$s1->login("student");
echo "<br/>";
$s1->getname();
echo "<br/>";
$t1=new Teachers();
$t1->login(
    "teacher"
);
echo "<br/>";
$t1->getskill();
?>