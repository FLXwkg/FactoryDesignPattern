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
interface ShapeFactory {
    public function createShape(): Shape;
}

// Concrete implementation of the factory
class CircleFactory implements ShapeFactory {
    public function createShape(): Shape {
        return new Circle();
    }
}

// Concrete implementation of the factory
class SquareFactory implements ShapeFactory {
    public function createShape(): Shape {
        return new Square();
    }
}

// Client code
$circleFactory = new CircleFactory();
$circle = $circleFactory->createShape();
echo $circle->draw() . PHP_EOL;

$squareFactory = new SquareFactory();
$square = $squareFactory->createShape();
echo $square->draw() . PHP_EOL;

?>
