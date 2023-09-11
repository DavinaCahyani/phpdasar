<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>