<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
      <!-- Function -->
    <?php
      function nama($nama, $ulangtahun) {
        echo "Nama saya adalah = $nama, Ulangtahun saya tanggal =$ulangtahun";
      }
      nama("davina","29")
    ?>
    <br>
    <!-- Array -->
    <?php
      $cars = array("Volvo","BMW","Toyota");
      echo "I like" . $cars[0];
    ?>
    <br>
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
    <br>
 
      <!-- Data and Time -->
      <?php 
echo "Today is " . date("Y/m/d") . "<br>"; 
echo "Today is " . date("Y.m.d") . "<br>"; 
echo "Today is " . date("Y-m-d") . "<br>"; 
echo "Today is " . date("l"); 
?> 
<br>
    <!-- Constructor -->
    <?php
      class komputer
      {
          public $prosesor;
          public $memory;
          public $ram;

          public function __construct( $prosesor = "prosesor",$memory = "memory",$ram= "ram") 
          {
          $this->prosesor = $prosesor;
          $this->memory = $memory;
          $this->ram = $ram;
          }
          
            public function getData()
          {
          return "$this->prosesor |$this->memory |$this->ram"; 
          }
      }
      $komputer1 = new komputer("core i7","225 GB","8 GB");
      $komputer2 = new komputer("core i9","500GB");
      echo "spek komputer sekolah : " . $komputer1->getData();
      echo "<br> ";
      echo "spek komputer rumah : " . $komputer2->getData();
    ?> 
    <br>
    <!-- Descructor -->
    <?php
    class product
    {
        public function __descruct()
        {
            echo "Objek telah dihapus dari memory";
        }
    }
    $komputer1 = new product();
    unset($komputer1)
    ?>
    <br>
    <!-- Session -->  
  
<?php  
    session_start();  
    echo 'Id user saya adalah' .$_SESSION['logged_in_user_id'];  
    echo '<br>';  
    echo 'Username saya adalah' .$_SESSION['logged_in_user_name'];  
?> 
    



</body>
</html>