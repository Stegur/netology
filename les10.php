<?php
class Product
{
    public $name;
    public $category;
    public $price = 0;
    public $discount;
    public $warranty = false;

    public function getPrice()
    {
        $discount = 20;
        if ($discount) {
            $this->price = $this->price - $this->price * $discount / 100;
        }
        return $this->price;
    }
    
    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
    
    /**
     * @return bool
     */
    public function isWarranty(): bool
    {
        if ($this->price > 50000)
            $this->warranty = true;
        return $this->warranty;
    }
}

$simpleObject = new Product();
$simpleObject->name = "Smartphone";
$simpleObject->category = "phones";
$simpleObject->price = 50000;
$simpleObject->discount = 10;
$simpleObject->getPrice();
$simpleObject->name = 'iPhone 8';
$simpleObject->category = 'Smartphones';
//$simpleObject->warranty = true;
//$simpleObject->setPrice(40000);
$simpleObject->getPrice();
$simpleObject->getPrice();
$simpleObject->price = '55000';
$simpleObject->isWarranty();


echo '<pre>';
var_dump($simpleObject);

class Vehicle
{
    public $color = 'Белая';
    
    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

}

$audi = new Vehicle();
$bmw = new Vehicle();

$audi->setColor('Красный');

$anotherAudi = new Vehicle();


//
//echo '<pre>';
//var_dump($bmw);
//var_dump($audi);
//var_dump($anotherAudi);