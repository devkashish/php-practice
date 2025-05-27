<?php
class A{ 
    public function show(){ 
        echo "A<br>"; 
    } 
} 
class B extends A{ 
    public function show(){ 
        echo "B<br>"; 
    } 
} 
$a=new A(); //parent class
$a->show(); //output A
$b=new B(); //child class
$b->show(); //output B
?>
<?php
class Teacher{
    public $city = "Delhi";
    function nextexam(){
        echo "Next Exam is Maths <br>";
    }
     function age(){
        echo "Teacher age is 40<br>";
    }
}
class Student extends Teacher{

    public $city = "Mumbai";
  
    function age(){
        echo "Student age is 20<br>";
    }
}
$teacher=new Teacher();

echo $teacher->city;
echo "<br/>";
$teacher->nextexam();
$teacher->age();
$student=new Student();
$student->nextexam();
echo $student->city;
echo "<br/>";
$student->age();//Overriding 
//final keyword prevent parent class from method overriding
?>