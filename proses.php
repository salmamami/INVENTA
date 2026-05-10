<?php

include 'fungsi.php';

if(isset($_POST['aksi'])){
	$kamar = $_POST['Kamar'];
	$lantai = substr($kamar,2,2);
	echo "lantai : ".$lantai;
	if($_POST['aksi'] =="add"){
		
		$berhasil =tambah_data($_POST);
		
		if($berhasil){
			header("location: lantai.php?lantai=".$lantai);
		} else {
			echo $berhasil;
		}

		
	} else if ($_POST['aksi'] =="edit") {

		$berhasil =ubah_data($_POST);

		if($berhasil){
			header("location: lantai.php?lantai=".$lantai);
		} else {
			echo $berhasil;
		}
	}

}
if(isset($_GET['hapus'])){
	
	$berhasil= hapus_data($_GET);
	$lantai = $_GET['lantai'];

	if($berhasil){
			header("location: lantai.php?lantai=".$lantai);

		} else {
			echo $berhasil;
		}
}

?>

