<?php
interface ProductFeature{
    //$prodcountry="india"; // interface cannot have properties
    public function ProductDetails();
    public function ProductImages();
    public function ProductOwner();
    public function ProductPrice();
}
class Product implements ProductFeature{
    public function ProductDetails(){
        echo "Product Details";
    }
    public function ProductImages(){
        echo "Product Images";
    }
    public function ProductOwner(){
        echo "Product Owner";
    }
    public function ProductPrice(){
        echo "Product Price";
    }
}
$prod = new Product();
$prod->ProductDetails();
echo "<br/>";
$prod->ProductImages();
echo "<br/>";
$prod->ProductOwner();
echo "<br/>";
$prod->ProductPrice();
?>