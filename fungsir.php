<?php
	include 'koneksi.php';

	function tambah_data($data){



		$kamar =$data['kamar'];
		$tanggal_rusak =$data['tanggal_rusak'];
		$nama_barang =$data['nama_barang'];
		$kategori =$data['kategori'];
		$keterangan =$data['keterangan'];
		$jumlah =$data['jumlah'];
		$tanggal_diperbaiki=$data['tanggal_diperbaiki'];
		$diperbaiki=$data['diperbaiki'];

		$query ="INSERT INTO barang_rusak VALUES(null,'$kamar','$tanggal_rusak','$nama_barang','$kategori','$keterangan','$jumlah','$tanggal_diperbaiki','$diperbaiki')";
		$sql = mysqli_query($GLOBALS['conn'], $query);

		return true;
	}

	function ubah_data($data){
		$id =$data['id'];
		$kamar =$data['kamar'];
		$tanggal_rusak = $data['tanggal_rusak'];
		$nama_barang = $data['nama_barang'];
		$kategori =$data['kategori'];
		$keterangan =$data['keterangan'];
		$jumlah =$data['jumlah'];
		$tanggal_diperbaiki=$data['tanggal_diperbaiki'];
		$diperbaiki=$data['diperbaiki'];
		

		$query ="UPDATE barang_rusak SET id='$id', kamar= '$kamar', tanggal_rusak='$tanggal_rusak', nama_barang='$nama_barang', kategori='$kategori', keterangan='$keterangan', jumlah='$jumlah' ,tanggal_diperbaiki='$tanggal_diperbaiki', diperbaiki='$diperbaiki' WHERE id='$id';";
		$sql =mysqli_query($GLOBALS['conn'], $query);

		return true;

	}

	function hapus_data($data){

		$id = $data['hapus'];
		$query = "DELETE FROM barang_rusak WHERE id ='$id';";
		$sql= mysqli_query($GLOBALS['conn'], $query);

		return true;


	}

?>
