<?php
    include 'koneksi.php';
    $lantai =1;
    if(isset($_GET['lantai'])) {
        $lantai = $_GET['lantai'];
    }
    
    if( $lantai == '1') {
        $query ="SELECT * FROM barang_kamar;";
        $sql = mysqli_query($conn, $query);
        $no = 0;
    } else if ( $lantai == '2') {
        $query ="SELECT * FROM barang_lt2;";
        $sql = mysqli_query($conn, $query);
        $no = 0;
    } else {
        $query ="SELECT * FROM barang_lt3;";
        $sql = mysqli_query($conn, $query);
        $no = 0;
    }
   
   
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
                                <h6 class="m-0 font-weight-bold text-primary">Lantai <?php echo $lantai  ?></h6>
                                </div>
                                <div class="table-responsive">
                                  <table class="table align-middle table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th><center>No.</center></th>
                                        <th><center>Kamar</center></th>
                                        <th>Loker</th>
                                        <th>Gantungan baju</th>
                                        <th>Gantungan tas</th>
                                        <th>Stopkontak</th>
                                        <th>Gorden++</th>
                                        <th>Cermin</th>
                                        <th>Lampu putih</th>
                                        <th>Lampu kuning</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while ($result = mysqli_fetch_assoc($sql)) {    
                                    ?>
                                      <tr>
                                        <td><center><?php echo ++$no; ?></center></td>
                                        <td><center>
                                            <?php echo $result['Kamar']; ?> 
                                            </center></td>
                                        <td><?php echo $result['Loker']; ?> </td>
                                        <td><?php echo $result['Gantungan_baju']; ?>    </td>
                                        <td><?php echo $result['Gantungan_tas']; ?> </td>
                                        <td><?php echo $result['Stopkontak']; ?>    </td>
                                        <td><?php echo $result['Gorden']; ?>    </td>
                                        <td><?php echo $result['Cermin']; ?>    </td>
                                        <td><?php echo $result['Lampu_putih']; ?>   </td>
                                        <td><?php echo $result['Lampu_kuning']; ?>  </td>
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