<?php
    include 'koneksi.php';

    session_start();
         
    if (!isset($_SESSION['username'])) {
            header("Location: hahaha.php");
    }


    $query ="SELECT * FROM barang_kamar;";
    $sql = mysqli_query($conn, $query);
    $no = 0;


?>
<!DOCTYPE html>
<html lang="en">

<head>

   <?php include 'header.php';  ?>

    <title>inventaweb</title>   
</head>

<body id="page-top">
    <?php include 'menu.php'; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                   

                        <!-- Earnings (Monthly) Card Example -->
                       <div class="col-xl-0 col-md-10 mb-5" align="left">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><div class="container-logout">
                                            <form action="" method="POST" class="login-usename">
                                                <?php echo "<h1>Selamat Datang di Inventa, " . $_SESSION['username'] ."!". "</h1>"; ?>
                                                 
                                                <br>
                                                  <br>
                                                  <h3>Kelola data asrama akan lebih aman dan mudah dengan Inventa</h3>
                                                    <br>
                                                      <br>
                                                        <br>
                                                        <h4 align="right">-Ozza-</h4>
                                                        <br>
                                            </form>
                                        </div>
                                        </div>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    

            </div>
</div>
            <!-- End of Main Content -->

            <?php include 'footer.php';?>

<?php include'profil.php';?>
    
</body>

</html>