<!-- OOP Code sample  -->

<!-- This example creates a Car class with properties for make, model, year, and color, 
and methods for getting and setting each property. 
It also has a method called displayCar that shows all the car's properties.
A new instance of the car class is created using the constructor and then the method displayCar is called on it to display all the properties. -->
<?php 
class Car {

    private $make;
    private $model;
    private $year;
    private $color;

    public function __construct($make, $model, $year, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function displayCar() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

$myCar = new Car("Ford", "Mustang", 2019, "Red");
$myCar->displayCar();
