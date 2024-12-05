<?php
// 02/12/2024
// CLASS AND OBJECTS

echo "<br>";
class fruit {
    // these are the properties
    public $name;
    public $colour;
    protected $type;

    // these are the methods
    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function setColour($colour) {
        $this->colour = $colour;
    }

    function getColour() {
        return $this->colour;
    }

}

$apple = new fruit();
$apple->setName("apple");
$apple->setColour("red");

echo $apple->getName()."<br>";
echo $apple->getColour();

echo "<br>";
echo "<br>";
$mango = new fruit();
$mango->setName("mango");
$mango->setColour("green");

echo $mango->getName()."<br>";
echo $mango->getColour();


// CONSTRUCT

echo "<br>";
echo "<br>";
class car {
    public $colour;
    public $model;

    function __construct($model) {
        $this->model = $model;
    }

    function getModel() {
        return $this->model;
    }
}

$toyota = new car("2025");

echo $toyota->getModel()."<br>";

$toyota->colour = "red";

class vegetable extends fruit {
    public $nutrient;

    function setType($type) {
        $this->type = $type;
    }

    function getType() {
        return $this->type;
    }

}

$pumpkinLeaf = new vegetable();
$pumpkinLeaf->setName("pumpkin leaf");

echo $pumpkinLeaf->getName();

echo "<br>";
$pumpkinLeaf->setType("Pome");
echo $pumpkinLeaf->getType();



?>