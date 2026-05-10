<?php
    include 'koneksi.php';
    $query ="SELECT * FROM barang_rusak;";
    $sql = mysqli_query($conn, $query);
    $no = 0;
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: hahaha.php");
}

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
                        <h1 class="h3 mb-0 text-gray-800">Data Barang Rusak</h1>
                        
                    </div>
                    
                     

                        <div class="card shadow mb-4">
                             <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Repair</h6>
                                </div>
                                <div class="card-body">
                                    <p>Laporkan jika ada barang yang rusak/hilang/kurang</p>
                                     <a href="keloladatarusak.php" type="button" class="btn btn-outline-primary mb-3">
                                    <i class="fa fa-plus fa-lg">Tambah Data</i></a>

                                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800"></h1>
                                        <a href="print4.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Print</a>
                                    </div>

                                <div class="table-responsive">
                                  <table class="table align-middle table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th><center>no.</center></th>
                                        <th><center>kamar</center></th>
                                        <th>tanggal_rusak</th>
                                        <th>nama_barang</th>
                                        <th>kategori</th>
                                        <th>keterangan</th>
                                        <th>jumlah</th>
                                        <th>tanggal_diperbaiki</th>
                                        <th>diperbaiki</th>
                                        <th>aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while ($result = mysqli_fetch_assoc($sql)) {    
                                    ?>
                                      <tr>
                                        <td><center><?php echo ++$no; ?></center></td>
                                        <td><center>
                                            <?php echo $result['kamar']; ?> 
                                            </center></td>
                                        <td><?php echo $result['tanggal_rusak']; ?> </td>
                                        <td><?php echo $result['nama_barang']; ?>    </td>
                                        <td><?php echo $result['kategori']; ?> </td>
                                        <td><?php echo $result['keterangan']; ?>    </td>
                                        <td><?php echo $result['jumlah']; ?>    </td>
                                        <td><?php echo $result['tanggal_diperbaiki']; ?>    </td>
                                        <td>
                                               <input type="checkbox" name="diperbaiki[]" id="diperbaiki" value="<?php echo $result['diperbaiki']; ?>">
                                        <td>
                                                <a href="keloladatarusak.php?ubah=<?php echo $result['id']; ?>" type="button" class="btn btn-outline-success btn-sm">
                                                    <i class="fa fa-pen"></i></a>
                                                    
                                                <a href="prosesrusak.php?hapus=<?php echo $result['id']; ?>" type="button" class="btn btn-outline-danger btn-sm" onClick="return confirm('Anda Yakin Ingin Menghapus?')">
                                                    <i class="fa fa-trash"></i></a></td>
                                     </tr>
                                      <?php
                                            }
                                        ?>
                                      </tbody>
                                    </table>
                                    
                                </div>
                                  
                                </div>
                            </div>

                        </div>

                    </div>

                <?php include'footer.php';?>
                <?php include 'profil.php';?>
    
</body>

</html>