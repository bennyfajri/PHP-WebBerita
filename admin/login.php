<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Halaman Login</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="/berita/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="signin.css">
  
</head>
<body class="text-center">

    <form method="post" action="" class="form-login">
      <h1 class="h3 mb-3 font-weight-normal">Welcome</h1>
      <label for="username" class="sr-only">Email/Username</label>
      <input type="text" name="username" class="form-control" autofocus="" required="" placeholder="Email/Username" >
      <label for="pass" class="sr-only">Password</label>
      <input type="password" name="pass" class="form-control" placeholder="Password" required="">
      <input type="submit" name="btnSubmit" class="btn btn-primary" value="Login">
      
    </form>

  
  <?php
    if(isset($_POST['btnSubmit'])){
      include 'koneksi.php';
      $pass  = md5($_POST['pass']);

      $cek=mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$_POST[username]'AND password='$pass'");

      $data = mysqli_fetch_array($cek);
      $result = mysqli_num_rows($cek);
      if($result==1){
        session_start();
        $_SESSION['user']=$data['username'];
        $_SESSION['iduser']=$data['id'];
        $_SESSION['level']=$data['level'];

        header('location:index.php');
      }
      else
        echo "<script>alert('Username dan password Invalid')</script>";
    }
  ?>
</body>
</html>