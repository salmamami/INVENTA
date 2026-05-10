<?php
    include 'koneksi.php';
    $query ="SELECT * FROM gudang;";
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
                                <h6 class="m-0 font-weight-bold text-primary">Data Barang-Barang Gudang</h6>
                                </div>
                                <div class="table-responsive">
                                  <table class="table align-middle table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th><center>no.</center></th>
                                        <th><center>nama barang</center></th>
                                        <th>jumlah</th>
                                        <th>keterangan</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while ($result = mysqli_fetch_assoc($sql)) {    
                                    ?>
                                      <tr>
                                        <td><center><?php echo ++$no; ?></center></td>
                                        <td><center>
                                            <?php echo $result['nama_barang']; ?> 
                                            </center></td>
                                        <td><?php echo $result['jumlah']; ?> </td>
                                        <td><?php echo $result['keterangan']; ?>    </td>
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