<?php
class Fruit {
// Properties
public $name;
public $color;
// Methods
function set_name($name) {
$this->name = $name;
}
function get_name() {
return $this->name;
}
}
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
?>

<?php
class calisthenics {
// Properties
public $name;
// Methods
function set_name($name) {
$this->name = $name;
}
function get_name() {
return $this->name;
}
}
$apple = new calisthenics();
$banana = new calisthenics();
$apple->set_name('static');
$banana->set_name('dynamic');
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";


function myTest() {
static $x = 0;
echo $x;
$x++;
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";


$num = (float)'1.10';
echo"this is $num";
echo "<br>";    

$cars = array("Volvo","BMW","Toyota");
for ($x = 0; $x < count($cars); $x++) {
echo "The number is:" .$cars[$x]. "<br>";
}
?>