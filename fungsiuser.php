<?php
	include 'koneksi.php';

	function tambah_data($data){



		$username =$data['username'];
		$email =$data['email'];
		$password =$data['password'];
		

		$query ="INSERT INTO user VALUES(null,'$username','$email','$password')";
		$sql = mysqli_query($GLOBALS['conn'], $query);

		return true;
	}

	function ubah_data($data){
		$id =$data['id'];
		$username =$data['username'];
		$email = $data['email'];
		$password = $data['password'];
		


		$query ="UPDATE user SET id='$id', username= '$username', email='$email', password='$password' WHERE id='$id';";
		$sql =mysqli_query($GLOBALS['conn'], $query);

		return true;

	}

	function hapus_data($data){

		$id = $data['hapus'];
		$query = "DELETE FROM user WHERE id ='$id';";
		$sql= mysqli_query($GLOBALS['conn'], $query);

		return true;


	}

?>
