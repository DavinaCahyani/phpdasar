<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>materi 1</title> 
</head> 
<body> 
     
<!-- input nama --> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
  Nama: <input type="text" name="name"> 
  <br> <br>
  Umur: <input type="text" name="umur"> 
  <br> <br>
  Gender: <input type="radio" name="gender" value="Pria">Pria
   <input type="radio" name="gender" value="Wanita">Wanita
  <br><br>
  Makanan Kesukaan: <input type="checkbox" name="makanan[]" value="Rendang">Rendang
  <input type="checkbox" name="makanan[]" value="Ayam">Ayam
  <input type="checkbox" name="makanan[]" value="Sop">Sop
  <br><br>
  <input type="submit"> 
</form> 
 
<br> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Mengambil nilai dari input field 
    $name = $_POST['name']; 
    $umur = $_POST['umur']; 
    $gender = $_POST['gender']; 
    $makanan = $_POST['makanan']; 
     
    // Validasi data 
    if (empty($name) & empty($umur)) { 
      echo "Nama dan umur kosong"; 
    } else { 
      // Menampilkan hasil 
      if (!empty($name)) { 
        echo "Nama saya" . " " . $name; 
      } 
      
      if (!empty($umur)) { 
        echo " dan umur ku" . " " . $umur; 
      } 
      
      if (!empty($gender)) { 
        echo " saya seorang" . " " . $gender; 
      } 
      if (is_array($makanan) && !empty($makanan)) {
        echo "Dan makanan kesukaan saya adalah " . implode(', ', $makanan);
    } else {
        echo "Anda belum memilih makanan kesukaan.";
    }
      
    } 
  } 
  ?> 
 <br>
</body> 
</html>