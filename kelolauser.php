
<!DOCTYPE html>
<?php
    include 'koneksi.php';

        $username = '';
        $email = '';
        $password = '';

    if(isset($_GET['ubah'])){
        $id = $_GET['ubah'];
        //echo $id;

        $query = "SELECT * FROM user WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);
        
        $result = mysqli_fetch_assoc($sql);

        $username = $result['username'];
        $email = $result['email'];
        $password = $result['password'];
        
        //var_dump($result);

        //die();
    }
?>
<html>

<head>
    
 <?php include 'header.php';?>

    <title>inventaweb</title>

</head>

<body id="page-top">

  <?php include'menu.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambahkan/Ubah User</h1>          

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User</h6>
                            </div>
                        <div class="card-body">
            </nav>
              <div class="container">
                <form method="POST" action="prosesuser.php" enctype="form-data">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
              <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" id="username" placeholder="username" value="<?php echo $username; ?>">
                </div>
                </div>
                <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="email" placeholder="ini@gmail.com" value="<?php echo $email; ?>">
                </div>
                </div>
                <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                  <input type="password" name="password" class="form-control" id="password" placeholder="" value="<?php echo $password; ?>">
                </div>
              </div>
              
              <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                        if(isset($_GET['ubah'])){
                    ?>
                    <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Simpan Perubahan
                    </button>
                    <?php
                        } else {
                    ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Tambahkan
                    </button>
                    <?php
                        } 
                    ?>
                <a href="user.php"type="button" class="btn btn-danger">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    Batal
                </a>
              </div>
          </div>
        </form>
    </div>
    <!-- End of Page Wrapper -->
    <?php include'footer.php';?>

   <?php include'profil.php';?>
    
</body>
</html>