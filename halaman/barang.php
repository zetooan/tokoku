<?php
if (isset($_SESSION['buka']) && $_SESSION['buka'] == "ok") {
	if ($halaman[2] == "tambah") {
		echo '<h3 class="judul">Tambah Barang</h3>';
		if (isset($_POST['tambah'])){
			$kode = $_POST['kode'];
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];

			$query_kode = "SELECT * FROM stok WHERE kode_barang = '$kode'";
			$cari_kode = $db->query($query_kode);

				echo'<form method="post" action="index.php?hal2=tambah">';
				echo'<input type="text" name="nama" placeholder="Nama Barang" value="'.$nama.'" class="ipt1"><br>';
				if (empty(trim($nama))) {
					echo '<div class="ket1">nama barang masih kosong<br></div>';
				}
				else{
					echo '<br>';
				}
				echo'<input type="text" name="kode" placeholder="Kode Barang" value="'.$kode.'" class="ipt1"><br>';
				if (empty(trim($kode))) {
					echo '<div class="ket1">kode barang masih kosong<br></div>';
				}
				elseif ($cari_kode->num_rows > 0) {
					echo '<div class="ket1">kode barang sudah ada<br></div>';
				}
				else{
					echo '<br>';
				}
				echo'<input type="number" name="harga" placeholder="Harga Jual" value="'.$harga.'" class="ipt1"><br>';
				if (empty(trim($harga))) {
					echo '<div class="ket1">harga barang masih kosong<br></div>';
				}
				else{
					echo '<br>';
				}
				echo'<input type="submit" name="tambah" value="Tambah" class="btn1">';
				echo'</form>';
			if (empty(trim($nama))||empty(trim($kode))||empty(trim($harga))||$cari_kode->num_rows > 0) {
					echo '<div class="ket1">gagal</div>';
			}
			else{
				$query = "INSERT INTO stok(kode_barang, nama_barang, harga_jual_barang) VALUES ('$kode', '$nama', '$harga')";
				if ($db->query($query)) {
					header("Location: index.php");
				}else{
					echo '<div class="ket1">gagal upload data dikarenakan ada kesalahan</div>';
				}
			}	
			
		}
		else{
			?>
				<form method="post" action="index.php?hal2=tambah">
					<input type="text" name="nama" placeholder="Nama Barang" class="ipt1"><br><br>
					<input type="text" name="kode" placeholder="Kode Barang" class="ipt1"><br><br>
					<input type="number" name="harga" placeholder="Harga Jual" class="ipt1"><br><br>
					<input type="submit" name="tambah" value="Tambah" class="btn1">
				</form>
			<?php
		}
	}
	elseif ($halaman[2] == "edit_dan_hapus") {
		if (isset($_POST['edit'])) {
			echo '<h3 class="judul">Edit Barang</h3>';
			$keterangan = $_POST['edit'];
			if (substr($keterangan, 0, 1) == "e") {
				$edit_ket = "e";
				$id = substr($keterangan, 1);
			}
			else {
				$edit_ket = "";
				$id = $keterangan;
			}

			$query = "SELECT * FROM stok WHERE id_barang = '$id'";
			$result = $db->query($query);
			$yai = mysqli_fetch_assoc($result);
			if ($edit_ket == "e") {
				$kode = $_POST['kode'];
				$nama = $_POST['nama'];
				$harga = $_POST['harga'];

				echo'<form method="post" action="index.php?hal2=edit_dan_hapus">';
				echo'<input type="text" name="nama" placeholder="Nama Barang" value="'.$nama.'"class="ipt1"><br>';
				if (empty(trim($nama))) {
					echo '<div class="ket1">nama barang masih kosong<br></div>';
				}
				else{
					echo '<br>';
				}
				echo'<input type="text" name="kode" placeholder="Kode Barang" value="'.$kode.'"class="ipt1"><br>';
				if (empty(trim($kode))) {
					echo '<div class="ket1">nama barang masih kosong<br></div>';
				}
				elseif(!cek_kode_jual($db, $id, $kode)){
					echo '<div class="ket1">kode barang sudah terpakai<br></div>';
				}
				else{
					echo '<br>';
				}
				echo'<input type="number" name="harga" placeholder="Harga Jual" value="'.$harga.'"class="ipt1"><br>';
				if (empty(trim($harga))) {
					echo '<div class="ket1">nama barang masih kosong<br></div>';
				}
				else{
					echo '<br>';
				}
				echo'<button name="edit" value="e'.$yai['id_barang'].'" class="btn2">Edit</button>';
				echo'</form>';

				if (empty(trim($nama))||empty(trim($kode))||empty(trim($harga))||!cek_kode_jual($db, $id, $kode)) {
						echo '<div class="ket1">gagal</div>';
				}
				else{
					$query = "UPDATE stok SET kode_barang='$kode',nama_barang='$nama', harga_jual_barang='$harga' WHERE id_barang = '$id'";
					if ($db->query($query)) {
						header("Location: index.php");
					}else{
						echo '<div class="ket1">gagal upload data dikarenakan ada kesalahan</div>';
					}
				}	

				}
			else{
				echo'<form method="post" action="index.php?hal2=edit_dan_hapus">';
				echo'<input type="text" name="nama" placeholder="Nama Barang" value="'.$yai['nama_barang'].'" class="ipt1"><br><br>';
				echo'<input type="text" name="kode" placeholder="Kode Barang" value="'.$yai['kode_barang'].'" class="ipt1"><br><br>';
				echo'<input type="number" name="harga" placeholder="Harga Jual" value="'.$yai['harga_jual_barang'].'" class="ipt1"><br><br>';
				echo'<button name="edit" value="e'.$yai['id_barang'].'" class="btn2">Edit</button>';
				echo'</form>';
			}
		}
		elseif (isset($_POST['hapus'])) {
			$id = $_POST['hapus'];
			$query = "DELETE FROM stok WHERE id_barang = '$id'";
			if ($db->query($query)) {
				header("Location: index.php");
			}else{
				echo 'gagal';
			}
		}
		else{
			header("Location: index.php");
		}
	}
	else{
		?>
		<h3 class="judul">Data Barang</h3>
		<table width="100%" cellspacing="0">
			<tr>
				<td align="right" colspan="5"><a href="index.php?hal2=tambah"><button  class="btn1">Tambah</button></a></td>
			</tr>
			<tr align="center" align="middle">
				<th>No</th>
				<th>Nama Barang</th>
				<th>Kode</th>
				<th>Harga Jual</th>
				<th>Option</th>
			</tr>
			<?php
			$query = "SELECT * FROM stok";
			$result = $db->query($query);
			$no = 0;
			if ($result->num_rows > 0) 
				{
					while($yai = mysqli_fetch_assoc($result))
						{
							$no++;
							echo '<tr>';
								echo '<td align="center" align="middle">'.$no.'</td>';
								echo '<td align="left" align="middle">'.$yai['nama_barang'].'</td>';
								echo '<td align="left" align="middle">'.$yai['kode_barang'].'</td>';
								echo '<td align="right" align="middle" class="ket2">Rp. '.$yai['harga_jual_barang'].'</td>';
								echo '<td align="center" align="middle"><form method="post" action="index.php?hal2=edit_dan_hapus">
									<button name="edit" value="'.$yai['id_barang'].'" class="btn2">Edit</button>
									<button name="hapus" value="'.$yai['id_barang'].'" class="btn3">Hapus</button>
									</form></td>';
							echo '</tr>';
						}
				}
			else{
				echo '<tr><td colspan="5">Belum Ada Barang</td></tr>';
			}
			?> 
		</table>
		<?php
		}
}
else{
	header("Location: 404.php");
}

?>