<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: utamaa.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = ($_POST['password']);
 
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: utamaa.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Login Admin</title>
  </head>
  <body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" method="POST">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <input name="submit" type="submit" value="Login" class="btn solid" />
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <img src="1.png" class="image" alt="" />
            <p>
              Mengelola data fasilitas inventaris asrama dengan mudah.
            </p>
            
                <a href="index.php"type="button" class="btn btn-primary">
                   
                   back to
                </a>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
      </div>
    </div>

  </body>
</html>
