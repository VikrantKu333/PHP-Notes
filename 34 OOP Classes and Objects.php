<!-- PHP OOP - Classes and Objects -->
<title>PHP OOP - Classes and Objects</title>

<!-- OOP stands for Object-Oriented Programming -->

<?php
// Note: In a class, variables are called properties and functions are called methods!
#Define A Class
class Fruit
{
    #Properties
    public $name;
    public $color;
    #Method
    function set_name($fruitName)
    {
        $this->name = $fruitName;
    }
    function set_color($fruitColor)
    {
        $this->color = $fruitColor;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_color()
    {
        return $this->color;
    }
}
#Define An Objects
$apple = new Fruit();
$banana = new Fruit();
// Set Object Properties
$apple->set_name('Apple');
$apple->set_color('Red');
$banana->set_name('Banana');
$banana->set_color('Yellow');
// Get Object Properties
echo $apple->get_name() . " : " . $apple->get_color();
echo "<br>";
echo $banana->get_name() . " : " . $banana->get_color();
echo "<br>";

#You can use the instanceof keyword to check if an object belongs to a specific class
var_dump($apple instanceof Fruit);
?>



<hr>



<!-- Outside the Class (Directly Changing and Accessing the Property Value) -->
<?php
// Define A Class
class Mobile
{
    // Properties
    public $name;
    public $model;
    public $color;
}
// Define An Object
$samsung = new Mobile();
// Outside the Class (Directly Changing the Property Value)
$samsung->name = "Samsung Galaxy";
$samsung->model = "Galaxy A52s 5G";
$samsung->color = "Black";
// Outside the Class (Directly Accessing the Property Value)
echo $samsung->name;
echo "<br>";
echo $samsung->model;
echo "<br>";
echo $samsung->color;
echo "<br>";
?>