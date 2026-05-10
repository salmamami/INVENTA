<?php
	include 'koneksi.php';

	function tambah_data($data){



		$Kamar =$data['Kamar'];
		$Loker =$data['Loker'];
		$Gantungan_baju =$data['Gantungan_baju'];
		$Gantungan_tas =$data['Gantungan_tas'];
		$Stopkontak =$data['Stopkontak'];
		$Gorden =$data['Gorden'];
		$Cermin =$data['Cermin'];
		$Lampu_putih =$data['Lampu_putih'];
		$Lampu_kuning =$data['Lampu_kuning'];

		$lantai = substr($Kamar,2,2);
		print $lantai;
		echo $lantai;
		if ($lantai == "1"){
			$table = "barang_kamar";
		} else if ($lantai =="2") {
			$table = "barang_lt2";
		} else if ($lantai == "3") {
			$table = "barang_lt3";
		}
		$query ="INSERT INTO $table VALUES(null,'$Kamar','$Loker','$Gantungan_baju','$Gantungan_tas','$Stopkontak','$Gorden','$Cermin','$Lampu_putih','$Lampu_kuning')";
		$sql = mysqli_query($GLOBALS['conn'], $query);

		return true;
	}

	function ubah_data($data){
		$id =$data['id'];
		$Kamar =$data['Kamar'];
		$Loker = $data['Loker'];
		$Gantungan_baju = $data['Gantungan_baju'];
		$Gantungan_tas =$data['Gantungan_tas'];
		$Stopkontak =$data['Stopkontak'];
		$Gorden =$data['Gorden'];
		$Cermin =$data['Cermin'];
		$Lampu_putih =$data['Lampu_putih'];
		$Lampu_kuning =$data['Lampu_kuning'];

		$lantai = substr($Kamar,2,2);
		if ($lantai == "1"){
			$table = "barang_kamar";
		} else if ($lantai =="2") {
			$table = "barang_lt2";
		} else if ($lantai == "3") {
			$table = "barang_lt3";
		}

		$query ="UPDATE $table SET id='$id', Kamar= '$Kamar', Loker='$Loker', Gantungan_baju='$Gantungan_baju', Gantungan_tas='$Gantungan_tas', Stopkontak='$Stopkontak', Gorden='$Gorden', Cermin='$Cermin', Lampu_putih='$Lampu_putih', Lampu_kuning='$Lampu_kuning' WHERE id='$id';";
		$sql =mysqli_query($GLOBALS['conn'], $query);

		return true;

	}

	function hapus_data($data){

		$id = $data['hapus'];
		
		$lantai = $data['lantai'];
		if ($lantai == "1"){
			$table = "barang_kamar";
		} else if ($lantai =="2") {
			$table = "barang_lt2";
		} else if ($lantai == "3") {
			$table = "barang_lt3";
		}
		$query = "DELETE FROM $table WHERE id ='$id';";
		$sql= mysqli_query($GLOBALS['conn'], $query);

		return true;


	}

?>
