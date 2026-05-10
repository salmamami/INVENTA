<?php
	include 'koneksi.php';

	function tambah_data($data){



		$nama_barang =$data['nama_barang'];
		$jumlah =$data['jumlah'];
		$keterangan =$data['keterangan'];
		$catatan =$data['catatan'];

		$query ="INSERT INTO gudang VALUES(null,'$nama_barang','$jumlah','$keterangan','$catatan')";
		$sql = mysqli_query($GLOBALS['conn'], $query);
		return true;
	}

	function ubah_data($data){
		$id =$data['id'];
		$nama_barang =$data['nama_barang'];
		$jumlah = $data['jumlah'];
		$keterangan =$data['keterangan'];
		$catatan =$data['catatan'];

		$query ="UPDATE gudang SET id='$id', nama_barang= '$nama_barang', jumlah='$jumlah', keterangan='$keterangan', catatan='$catatan' WHERE id='$id';";
		$sql =mysqli_query($GLOBALS['conn'], $query);

		return true;

	}

	function hapus_data($data){

		$id = $data['hapus'];
		$query = "DELETE FROM gudang WHERE id ='$id';";
		$sql= mysqli_query($GLOBALS['conn'], $query);

		return true;


	}

?>
