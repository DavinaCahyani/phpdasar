<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body class="container py-5">
    <div class="card w-50 justify-content-center mx-auto" style="width: 20rem;">
  <div class="card-body">
    <form action="connect_register.php" method="post"> 
    <h5 class="card-title text-center">Register Page</h5>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email </label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email" name="email">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username" name="username">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="password" name="password">
</div>
<div class= "text-center">
<button type="submit" class="btn btn-primary" >Register</button>
</div>
    </form>
    <br> 
          <p class="text-center">sudah punya akun? <a href="login.php">login akun</a></p>
  </div>
</div>
</body>
</html>