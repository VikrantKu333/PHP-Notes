<!-- PHP OOP - Inheritance -->
<title>PHP OOP - Inheritance</title>

<?php
// Define A Class
class Animal
{
    // Properties
    public $name;
    protected $color;
    private $leg;
    // Method
    protected function intro()
    {
        echo "The Animal/Bird Name is : $this->name and the Color is $this->color <br>";
    }
    // Constructor Method
    function __construct($animalName, $animalColor, $animalLeg)
    {
        $this->name = $animalName;
        $this->color = $animalColor;
        $this->leg = $animalLeg;
        $this->intro();
    }
    // Destructor Method
    function __destruct()
    {
        echo "$this->name - $this->color - $this->leg <br>";
    }
}



// Bird is Inherited from Animal
class Bird extends Animal
{
    // Properties
    public $feather;
    // Method
    function message()
    {
        echo "Am I a Animal or Bird?<br>";
        // Call protected method from within derived class - OK
        $this->intro();
    }
    // Constructor Method
    function __construct($birdName, $birdColor, $birdLeg, $birdFeather)
    {
        $this->name = $birdName;
        $this->color = $birdColor;
        $this->leg = $birdLeg;
        $this->feather = $birdFeather;
    }
    // Destructor Method
    function __destruct()
    {
        echo "$this->name - $this->color - $this->leg - $this->feather <br>";
    }
}

echo "<hr><b>Constructor : - </b><br>";

// Define An Object
$dog = new Animal('Dog', 'Brown', 4);
$ox = new Animal('Ox', 'White', 4);

echo "<hr><b>Object Method : - </b><br>";

// Define An Object
$parrot = new Bird('Parrot', 'Green', 2, 2);
$parrot->message();
$pigeon = new Bird('Pigeon', 'Blue', 2, 2);
$pigeon->message();

echo "<hr><b>Destructor : - </b><br>";
?>