
<!DOCTYPE html>

<?php
    include 'koneksi.php';


        $kamar = '';
        $tanggal_rusak = '';
        $nama_barang = '';
        $kategori = '';
        $keterangan = '';
        $jumlah = '';
        $tanggal_diperbaiki='';
        $diperbaiki='';
        

    if(isset($_GET['ubah'])){
        $id = $_GET['ubah'];
        //echo $id;

        $query = "SELECT * FROM barang_rusak WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);
        
        $result = mysqli_fetch_assoc($sql);

        $kamar = $result['kamar'];
        $tanggal_rusak = $result['tanggal_rusak'];
        $nama_barang = $result['nama_barang'];
        $kategori = $result['kategori'];
        $keterangan = $result['keterangan'];
        $jumlah = $result['jumlah'];
        $tanggal_diperbaiki = $result['tanggal_diperbaiki'];
        $diperbaiki = $result['diperbaiki'];
        
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
                    <h1 class="h3 mb-4 text-gray-800">Data Barang Rusak</h1>
                    
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Barang Rusak</h6>
                            </div>
                        <div class="card-body">
            </nav>
             <div class="container">
        <form method="POST" action="prosesrusak.php" enctype="form-data">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
             <div class="mb-3 row">
                <label for="kamar" class="col-sm-2 col-form-label">kamar</label>
                <div class="col-sm-10">
                  <input type="text" name="kamar" class="form-control" id="kamar" placeholder="ex:DN 1.1" value="<?php echo $kamar; ?>">
              </div>
              </div>
               <div class="mb-3 row">
                <label for="tanggal_rusak" class="col-sm-2 col-form-label">tanggal rusak</label>
                <div class="col-sm-10">
                  <input type="date" name="tanggal_rusak" class="form-control" id="tanggal_rusak" placeholder="DD/MM/YYYY" value="<?php echo $tanggal_rusak; ?>">
                </div>
              </div>
               <div class="mb-3 row">
                <label for="nama_barang" class="col-sm-2 col-form-label">nama barang</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_barang" class="form-control" id="Gantungan baju" placeholder="nama_barang" value="<?php echo $nama_barang; ?>">
                </div>
              </div>
               <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">kategori</label>
                <div class="col-sm-10">
                  <input type="text" name="kategori" class="form-control" id="Gantungan tas" placeholder="elektronik/tidak" value="<?php echo $kategori; ?>">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
                <div class="col-sm-10">
                  <input type="text" name="keterangan" class="form-control" id="Gantungan tas" placeholder="ket" value="<?php echo $keterangan; ?>">
                </div>
              </div>

                <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
                <div class="col-sm-10">
                  <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="ex:2" value="<?php echo $jumlah; ?>">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="tanggal_diperbaiki" class="col-sm-2 col-form-label">tanggal diperbaiki</label>
                <div class="col-sm-10">
                  <input type="date" name="tanggal_diperbaiki" class="form-control" id="tanggal_diperbaiki" placeholder="DD/MM/YYYY" value="<?php echo $tanggal_diperbaiki; ?>">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="diperbaiki" class="col-sm-2 col-form-label">diperbaiki</label>
                <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="<?php echo $diperbaiki; ?>" id="diperbaiki">
                 
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
                <a href="barangrusak.php"type="button" class="btn btn-danger">
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
