
<!DOCTYPE html>
<?php
    include 'koneksi.php';


        $Kamar = '';
        $Loker = '';
        $Gantungan_baju = '';
        $Gantungan_tas = '';
        $Stopkontak = '';
        $Gorden = '';
        $Cermin = '';
        $Lampu_putih = '';
        $Lampu_kuning = '';
 $lantai = $_GET['lantai'];
    if(isset($_GET['ubah'])){
        $id = $_GET['ubah'];
       
        //echo $id;
        if ($lantai == '1') {
            $query ="SELECT * FROM barang_kamar WHERE id = '$id'";
        } else if ($lantai == '2') {
            $query ="SELECT * FROM barang_lt2 WHERE id = '$id'";
        } else {
            $query ="SELECT * FROM barang_lt3 WHERE id = '$id'";
        }
        
        // $query = "SELECT * FROM barang_kamar WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);
        
        $result = mysqli_fetch_assoc($sql);

        $Kamar = $result['Kamar'];
        $Loker = $result['Loker'];
        $Gantungan_baju = $result['Gantungan_baju'];
        $Gantungan_tas = $result['Gantungan_tas'];
        $Stopkontak = $result['Stopkontak'];
        $Gorden = $result['Gorden'];
        $Cermin = $result['Cermin'];
        $Lampu_putih = $result['Lampu_putih'];
        $Lampu_kuning = $result['Lampu_kuning'];

        //var_dump($result);

        //die();
    }
?>
<html>
<html lang="en">

<head>
    
 <?php include 'header.php';?>

    <title>inventaweb</title>

</head>

<body id="page-top">

  <?php include'menu.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Barang Kamar Lantai  <?php echo $_GET['lantai'] ?></h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lantai  <?php echo $_GET['lantai'] ?></h6>
                            </div>
                        <div class="card-body">
            </nav>
              <div class="container">
                <form method="POST" action="proses.php" enctype="form-data">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
              <div class="mb-3 row">
                    <label for="Kamar" class="col-sm-2 col-form-label">Kamar</label>
                <div class="col-sm-10">
                      <input type="text" name="Kamar" class="form-control" id="Kamar" placeholder="ex:DN 1.1" value="<?php echo $Kamar; ?>">
                </div>
                </div>
                <div class="mb-3 row">
                <label for="Loker" class="col-sm-2 col-form-label">Loker</label>
                <div class="col-sm-10">
                  <input type="text" name="Loker" class="form-control" id="Loker" placeholder="ex:32" value="<?php echo $Loker; ?>">
                </div>
                </div>
                <div class="mb-3 row">
                <label for="Gantungan_baju" class="col-sm-2 col-form-label">Gantungan baju</label>
                <div class="col-sm-10">
                  <input type="text" name="Gantungan_baju" class="form-control" id="Gantungan baju" placeholder="ex:2" value="<?php echo $Gantungan_baju; ?>">
                </div>
              </div>
               <div class="mb-3 row">
                <label for="Gantungan_tas" class="col-sm-2 col-form-label">Gantungan tas</label>
                <div class="col-sm-10">
                  <input type="text" name="Gantungan_tas" class="form-control" id="Gantungan tas" placeholder="ex:2" value="<?php echo $Gantungan_tas; ?>">
                </div>
              </div>
                <div class="mb-3 row">
                <label for="Stopkontak" class="col-sm-2 col-form-label">Stopkontak</label>
                <div class="col-sm-10">
                  <input type="text" name="Stopkontak" class="form-control" id="Stopkontak" placeholder="ex:2" value="<?php echo $Stopkontak; ?>">
                </div>
              </div>
                <div class="mb-3 row">
                <label for="Gorden++" class="col-sm-2 col-form-label">Gorden++</label>
                <div class="col-sm-10">
                  <input type="text" name="Gorden" class="form-control" id="Gorden" placeholder="ex:2" value="<?php echo $Gorden; ?>">
                </div>
              </div>
                <div class="mb-3 row">
                <label for="Cermin" class="col-sm-2 col-form-label">Cermin</label>
                <div class="col-sm-10">
                  <input type="text" name="Cermin" class="form-control" id="Cermin" placeholder="ex:2" value="<?php echo $Cermin; ?>">
                </div>
              </div>
                <div class="mb-3 row">
                <label for="Lampu_putih" class="col-sm-2 col-form-label">Lampu putih</label>
                <div class="col-sm-10">
                  <input type="text" name="Lampu_putih" class="form-control" id="Lampu putih" placeholder="ex:2" value="<?php echo $Lampu_putih; ?>">
                </div>
              </div>
                <div class="mb-3 row">
                <label for="Lampu_kuning" class="col-sm-2 col-form-label">Lampu kuning</label>
                <div class="col-sm-10">
                  <input type="text" name="Lampu_kuning" class="form-control" id="Lampu kuning" placeholder="ex:2" value="<?php echo $Lampu_kuning; ?>">
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
                <a href="lantai.php?lantai=<?php echo $lantai ?>"type="button" class="btn btn-danger">
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