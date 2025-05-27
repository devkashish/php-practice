<?php
trait parent1{
    public function father(){
        echo "father";
    }
    public function age(){
        echo 40;
    }
}
trait parent2{
    public function mother(){
        echo "mother";
    }
    public function age(){
        echo 30;
    }
}
class child {
    public function child(){
        echo "child";
    }
    public function age(){
        echo 20;
    }
    use parent1;
    use parent2;
}
class parentdetails{
    use parent1;
}
$obj=new child();
$obj->child();
echo "<br/>";
$obj->father();
echo "<br/>";
$obj->mother();
echo "<br/>";
$obj2=new parentdetails();
$obj2->father();
echo "<br/>";
$obj->age();//output 20 child class function will be called 
// multiple inheritance not possible using classes
// class parent1{
//     public function father(){
//         echo "father";
//     }
// }
// class parent2{
//     public function mother(){
//         echo "mother";
//     }
// }
// class child extends parent1,parent2{
//     public function child(){
//         echo "child";
//     }
    
// }

// $obj=new child();
// $obj->child();
// echo "<br/>";
// $obj->father();
// echo "<br/>";
// $obj->mother();
// echo "<br/>";


?>
