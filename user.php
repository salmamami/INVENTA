<?php
    include 'koneksi.php';
    $query ="SELECT * FROM user;";
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
                    <h1 class="h3 mb-4 text-gray-800">Halaman user</h1>


                     

                        <div class="card shadow mb-4">
                             <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">User</h6>
                                </div>
                                <div class="card-body">
                                    <p>Tambahkan atau ubah jika ada user baru atau mengedit identitas user</p>
                                    <a href="kelolauser.php" type="button" class="btn btn-outline-primary mb-3">
                                    <i class="fa fa-plus fa-lg">Tambah User</i></a>
                                <div class="table-responsive">
                                  <table class="table align-middle table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th><center>no.</center></th>
                                        <th><center>username</center></th>
                                        <th>email</th>
                                        <th>password</th>
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
                                            <?php echo $result['username']; ?> 
                                            </center></td>
                                        <td><?php echo $result['email']; ?> </td>
                                        <td><?php echo $result['password']; ?>    </td>
                                        <td>
                                            <a href="kelolauser.php?ubah=<?php echo $result['id']; ?>" type="button" class="btn btn-outline-success btn-sm">
                                               <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                
                                            <a href="prosesuser.php?hapus=<?php echo $result['id']; ?>" type="button" class="btn btn-outline-danger btn-sm" onClick="return confirm('Anda Yakin Ingin Menghapus?')">
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