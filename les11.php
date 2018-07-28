<?php

class Bird
{
    public $color = 'black';
    public $sound;
    
    public function fly()
    {
        echo 'Я летаю';
    }
    
    public function makeSomeSound()
    {
        echo 'Я издаю звук ' . $this->sound;
    }
    
}

class Duck extends Bird
{
    public $sound = 'Кря';
}

//$duck = new Duck();
//$duck->makeSomeSound();
//$albinoDuck = new Duck();
//$albinoDuck->makeSomeSound();

//class Product
//{
//    public $price;
//    public $title;
//
//    public function __construct($title, $price)
//    {
//        $this->title = $title;
//        $this->price = $price;
//    }
//
//    public function getPrice()
//    {
//        return $this->price;
//    }
//
//    public function getTitle()
//    {
//        return $this->title;
//    }
//}
//
//class Book extends Product
//{
//    public $pages;
//    public $author;
//
//    public function setYear($year)
//    {
//        $this->year = $year;
//        return $this;
//    }
//
//
//    public function setAuthor($author)
//    {
//        $this->author = $author;
//        return $this;
//    }
//
//    public function setPages($pages)
//    {
//        $this->pages = $pages;
//        return $this;
//
//    }
//}
//
//$book = new Book('Lord of the rings', 199, 'R J Tolkien', 399);
//$book = new Book('Мастер и Маргарита', 199);
//$book->setAuthor('Михаил Булгаков')->setPages(399)->setYear(2017);
//echo '<pre>';
//var_dump($book);
//
//class Flash
//{
//    public $memory;
//
//    public function __construct($title, $price, $memory)
//    {
//        $this->title = $title;
//        $this->price = $price;
//        $this->memory = $memory;
//    }
//}
//
//$flash = new Flash('Kingstone', 59, 64);
//

///////////////////////////////////////////////////////////////////////////////////

abstract class Product
{
    public $price;
    public $title;
    
    public function getDescription()
    {
        echo $this->title . ' за ' . $this->price . ' рублей<br>';
        echo "Цена: {$this->price} <br>";
    }
}

class Flash extends Product
{
    public $memory;
    
    public function getDescription()
    {
        parent::getDescription();
        echo "флешка на {$this->memory} мегабайт";
    }
}

$njnj = new Flash();
$njnj->price = (string)30;
$njnj->title = 'Kingstone';
$njnj->memory = (int)"64";
$njnj->getDescription();

echo '<pre>';
//var_dump($njnj);

$yui = new Flash();
//var_dump($yui);

interface SimpleInterface {
    public function someFunction(int $arg1, string $arg2);
}

abstract class SimpleClass implements SimpleInterface {
    public function someFunction(int $a, string $b)
    {
        // TODO: Implement someFunction() method.
    }
}

