<!-- PHP OOP - Constructor -->
<title>PHP OOP - Constructor</title>

<!-- Tip: As constructors and destructors helps reducing the amount of code, they are very useful! -->

<?php
// Define A Class
class Car
{
    // Properties
    public $name;
    public $color;
    // Constructor Method  
    function __construct($carName, $carColor)
    {
        $this->name = $carName;
        $this->color = $carColor;
    }
}
// Define An Object
$bmw = new Car('BMW', 'Blue');
// Outside the Class (Directly Accessing the Property Value)
echo $bmw->name . " : " . $bmw->color;
?>