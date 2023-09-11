<?php
     include 'connect.php';
     session_start(); // Pastikan Anda sudah memanggil session_start() di file lain yang memproses login 
 
     if (!isset($_SESSION['email'])) { 
         // Jika pengguna belum login, tampilkan pesan kesalahan dan arahkan mereka kembali ke halaman login 
         echo "<script>alert('Maaf, Anda belum login!');</script>"; 
         echo "<script>window.location.href = 'login.php';</script>"; // Gantilah 'login.php' dengan nama halaman login Anda 
         exit; 
     }

     $id = $_GET['id'];
     $get_data = "select * from data where id=$id";
     $result_data = mysqli_query($conn, $get_data);
     $row = mysqli_fetch_assoc($result_data);
     $nama = $row['nama'];
     $alamat = $row['alamat'];
     $email = $row['email'];
     $umur = $row['umur'];
     $tempat_lahir = $row['tempat_lahir'];
     if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $umur = $_POST['umur'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $sql = "update data set nama='$nama', alamat='$alamat',email='$email', umur='$umur', tempat_lahir='$tempat_lahir'  where id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location:read.php');
        } else {
            die($conn->connect_error);
     }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Update</h3>
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur" value="<?php echo $umur; ?>">
            </div>
            <div class="mb-3">
                <label for="tempat lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>