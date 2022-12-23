<!-- PHP OOP - Destructor -->
<title>PHP OOP - Destructor</title>

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
    // Destructor Method
    function __destruct()
    {
        echo "Car Name : $this->name | Car Color : $this->color<br>";
    }
}
// Define An Object
$bmw = new Car('BMW', 'Blue');
$tesla = new Car('Tesla', 'Red');
$mercedes = new Car('Mercedes', 'Green');
?>