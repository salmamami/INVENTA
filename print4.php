<?php
    include 'koneksi.php';
    $query ="SELECT * FROM barang_rusak;";
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
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="card shadow mb-4">
                             <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Barang Rusak</h6>
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
                                        <td><?php echo $result['diperbaiki']; ?>    </td>

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
    <?php include'profil.php';?>
    <script>
        window.print();
    </script>
    
</body>

</html>