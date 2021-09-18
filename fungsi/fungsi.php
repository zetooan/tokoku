<?php
if (isset($_SESSION['buka']) && $_SESSION['buka'] == "ok") {
	$db = new mysqli("localhost","root","","bartok");

	if ($db->connect_errno) {
		echo 'error bro'.$db->connect_eror;
	}

	function cek_kode_jual($db, $id, $kode)
	{
		$query = "SELECT * FROM stok WHERE kode_barang = '$kode'";
		$cari_kode = $db->query($query);

		if ($cari_kode->num_rows > 1) {
			return false;
		}elseif ($cari_kode->num_rows == 1) {
			$kode_sama = mysqli_fetch_assoc($cari_kode);
			if($kode_sama['id_barang'] == $id){
				return true;
			}else{
				return false;
			}
			
		}else{
			return true;
		}
	}
}
else{
	header("Location: 404.php");
}
	


?>