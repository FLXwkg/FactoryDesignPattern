<?php

// Interface for the product
interface Shape {
    public function draw();
}

// Concrete implementation of the product
class Circle implements Shape {
    public function draw() {
        return "Drawing a circle";
    }
}

// Concrete implementation of the product
class Square implements Shape {
    public function draw() {
        return "Drawing a square";
    }
}

// Factory interface
class ShapeFactory {
    public function createShape(string $shapeType): Shape {
        if ($shapeType === 'circle') {
            return new Circle();
        } elseif ($shapeType === 'square') {
            return new Square();
        } else {
            throw new InvalidArgumentException('Invalid shape type');
        }
    }
}

// Client code
$shapeFactory = new ShapeFactory();

$circle = $shapeFactory->createShape('circle');
echo $circle->draw() . PHP_EOL;

$square = $shapeFactory->createShape('square');
echo $square->draw() . PHP_EOL;

?>
