<?php
abstract class Car{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    abstract public function display();

}
class Audi extends Car{
    public function display(){
        echo "Audi";
    }
}
class Volvo extends Car{
    public function display(){
        echo "Volvo";
    }
}
$audi=new Audi("Audi");
$volvo=new Volvo("Volvo");
$audi->display();
echo "<br/>";
$volvo->display();
?>
<?php
abstract class ProductFeature{
    abstract public function ProductDetails();
    abstract public function ProductImages();
    abstract public function ProductOwner();
    function ProductPrice(){
        echo "Product Price";
    }
}
class Product extends ProductFeature{
    public function ProductDetails(){
        echo "Product Details";
    }
    public function ProductImages(){
        echo "Product Images";
    }
    public function ProductOwner(){
        echo "Product Owner";
    }
}
//$product=new ProductFeature();//cannot create object of abstract classs
$product=new Product();
$product->ProductDetails();
echo "<br/>";
$product->ProductImages();
echo "<br/>";
$product->ProductOwner();
echo "<br/>";
$product->ProductPrice();//we can access non-abstract methods of abstract class through object of its child class
?>