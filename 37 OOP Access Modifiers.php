<!-- PHP OOP - Access Modifiers -->
<title>PHP OOP - Access Modifiers</title>

<!-- 
    There are three access modifiers : -

public - The property or method can be accessed from everywhere. This is default
protected - The property or method can be accessed within the class and by classes derived from that class
private - The property or method can ONLY be accessed within the class
 -->

<?php
// Define A Class
class Fruit
{
    // Properties
    public $name;
    protected $color;
    private $weight;
}
// Define An Object
$mango = new Fruit();

$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>



<hr>



<?php
// Define A Class
class Fruits
{
    // Properties
    public $name;
    public $color;
    public $weight;
    // Method
    function set_name($n)
    {  // a public function (default)
        $this->name = $n;
    }
    protected function set_color($n)
    { // a protected function
        $this->color = $n;
    }
    private function set_weight($n)
    { // a private function
        $this->weight = $n;
    }
}
// Define An Object
$mango = new Fruits();

$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>