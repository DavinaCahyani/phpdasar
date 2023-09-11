<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
</head> 
<body> 
    <!-- PHP OOP --> 
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
    ?> 
 
    <!-- CONSTRUCTOR --> 
    <?php 
    class komputer 
    { 
        public $prosesor; 
        public $memory; 
        public $ram; 
 
        public function __construct($prosesor = "prosesor", $memory = "memory", $ram = "ram") 
        { 
            $this->prosesor = $prosesor; 
            $this->memory = $memory; 
            $this->ram = $ram; 
        } 
 
        public function getData() 
        { 
            return "$this->prosesor | $this->memory | $this->ram"; 
        } 
    } 
    $komputer1 = new komputer("core i7", "255 GB", "8 GB"); 
    $komputer2 = new komputer("core i9", "50 GB"); 
    echo "Spek komputer sekolah : " . $komputer1->getData(); 
    echo "<br> "; 
    echo "Spek komputer rumah : " . $komputer2->getData(); 
    ?> 
 
    <!-- DESTRUCTOR --> 
    <?php 
        class product { 
            public $ram; 
 
            function __construct($ram = "RAM") { 
                $this->ram = $ram; 
            } 
            function __destruct() { 
                echo "{$this->ram}."; 
            } 
        } 
 
        $komputer1 = new product("240 GB"); 
    ?> 
    <!-- Manual --> 
<?php echo "hello world"; ?> 
<br> 
<!-- Penggunaan Variabel --> 
<?php $txt = "Hello world!"; echo $txt; ?> 
<br> 
<!-- Penggunaan Tipe Data --> 
<?php $x = "Hello World!!"; echo $x; ?> 
<br> 
<!-- For Each Loop --> 
<?php 
$colors = array("red", "green", "blue", "yellow"); 
 
foreach ($colors as $value) { 
  echo "$value <br>"; 
} 
?> 
<br> 
<!-- If Else --> 
<?php 
$t = date("H"); 
 
if ($t < "20") { 
  echo "Have a good day!"; 
} else { 
  echo "Have a good night!"; 
} 
?> 
<br> 
<!-- Switch Case --> 
<?php 
$favcolor = "red"; 
 
switch ($favcolor) { 
  case "red": 
    echo "Your favorite color is red!"; 
    break; 
  case "blue": 
    echo "Your favorite color is blue!"; 
    break; 
  case "green": 
    echo "Your favorite color is green!"; 
    break; 
  default: 
    echo "Your favorite color is neither red, blue, nor green!"; 
} 
?> 
<br> 
<!-- Function --> 
<?php 
function name($name) { 
  echo "Hello my name is $name"; 
} 
 
name("Dewi"); // call the function 
?> 
<br> 
<!-- Array --> 
<?php 
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; 
?> 
<!-- Date and Time --> 
<?php 
echo "Today is " . date("Y/m/d") . "<br>"; 
echo "Today is " . date("Y.m.d") . "<br>"; 
echo "Today is " . date("Y-m-d") . "<br>"; 
echo "Today is " . date("l"); 
?> 
<br>
</body> 
</html>