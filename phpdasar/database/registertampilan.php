<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Register Page</span></div>
        <form action="connect_register.php" method="post"> 
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Register">
            <p class="text-center py-5">Sudah punya akun? <a href="logintampilan.php">Login akun</a></p>
          </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>