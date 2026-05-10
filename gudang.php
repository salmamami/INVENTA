<?php
    include 'koneksi.php';
    $query ="SELECT * FROM gudang;";
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
                        <h1 class="h3 mb-0 text-gray-800">Data Barang-Barang Gudang</h1>
                        
                    </div>

                        <div class="card shadow mb-4">
                             <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Gudang</h6>
                                </div>
                                <div class="card-body">
                                    <p>Tambahkan data atau ubah data jika ada perubahan data barang gudang</p>
                                    <a href="kelolagudang.php" type="button" class="btn btn-outline-primary mb-3">
                                    <i class="fa fa-plus fa-lg">Tambah Barang</i></a>

                                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800"></h1>
                                        <a href="print5.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Print</a>
                                    </div>


                                <div class="table-responsive">
                                  <table class="table align-middle table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th><center>no.</center></th>
                                        <th><center>nama barang</center></th>
                                        <th>jumlah</th>
                                        <th>keterangan</th>
                                        <th>catatan</th>
                                        <th>aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while ($result = mysqli_fetch_assoc($sql)) {    
                                    ?>
                                      <tr>
                                        <td><center><?php echo ++$no; ?></center></td>
                                        <td>
                                            <?php echo $result['nama_barang']; ?> 
                                            </td>
                                        <td><?php echo $result['jumlah']; ?> </td>
                                        <td><?php echo $result['keterangan']; ?>    </td>
                                        <td><?php echo $result['catatan']; ?>    </td>
                                        <td>
                                            <a href="kelolagudang.php?ubah=<?php echo $result['id']; ?>" type="button" class="btn btn-outline-success btn-sm">
                                               <i class="fa fa-pen" aria-hidden="true"></i></a>

                                                
                                            <a href="prosesgudang.php?hapus=<?php echo $result['id']; ?>" type="button" class="btn btn-outline-danger btn-sm" onClick="return confirm('Anda Yakin Ingin Menghapus?')">
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
    <?php include'profil.php';?>
    
</body>

</html>