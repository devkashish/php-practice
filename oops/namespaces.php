<?php
namespace classes;

class A {
    public function show() {
        echo "A<br>";
    }
}

class B {
    public function show() {
        echo "B<br>";
    }
}

//  We're still in the global scope
$obj = new A();
$obj->show();  // Output: A

$obj1 = new \classes\B();//use this way to call outside this page 
$obj1->show(); // Output: B
?>
