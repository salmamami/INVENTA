
<!DOCTYPE html>

<?php
    include 'koneksi.php';


        $nama_barang = '';
        $jumlah = '';
        $keterangan = '';
        $catatan ='';
      

    if(isset($_GET['ubah'])){
        $id = $_GET['ubah'];
        //echo $id;

        $query = "SELECT * FROM gudang WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);
        
        $result = mysqli_fetch_assoc($sql);

        $nama_barang = $result['nama_barang'];
        $jumlah = $result['jumlah'];
        $keterangan = $result['keterangan'];
        $catatan =$result['catatan'];
        //var_dump($result);

        //die();
    }
?>
<html>


<head>
   
   <?php include'header.php';?>

    <title>inventaweb</title>

   

</head>

<body id="page-top">

   <?php include'menu.php';?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Barang Gudang</h1>
                
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gudang</h6>
                            </div>
                        <div class="card-body">
            </nav>
             <div class="container">
        <form method="POST" action="prosesgudang.php" enctype="form-data">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
             <div class="mb-3 row">
                <label for="nama_barang" class="col-sm-2 col-form-label">nama barang</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="ex:lengser" value="<?php echo $nama_barang; ?>">
              </div>
              </div>
                <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
                <div class="col-sm-10">
                  <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="ex:2" value="<?php echo $jumlah; ?>">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
                <div class="col-sm-10">
                     <select required id="keterangan" name="keterangan" class="form-select">
                        <option value="lengkap">lengkap</option>
                        <option value="lengkap">tidak lengkap</option></select>
                  
                </div>
              </div>
               <div class="mb-3 row">
                <label for="catatan" class="col-sm-2 col-form-label">catatan</label>
                <div class="col-sm-10">
                  <input type="textarea" name="catatan" class="form-control" id="catatan" placeholder="note" value="<?php echo $catatan; ?>">
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
                <a href="gudang.php"type="button" class="btn btn-danger">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    Batal
                </a>
              </div>
          </div>
        </form>
    </div>
    <?php include'footer.php';?>
    
    <?php include'profil.php';?>

   
</body>

</html>