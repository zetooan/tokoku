<?php
if (isset($_SESSION['buka']) && $_SESSION['buka'] == "ok")
{
	echo '<h3 class="judul">Data Pemasukan Barang</h3>';
	?>
	<form method="post" action="index.php?hal2=tambah">
		<table width="100%" cellspacing="0">
			<tr>
				<th>Kode Barang</th>
				<th>Jumlah Barang</th>
				<th>Tanggal Kadaluarsa</th>
				<th>Harga Beli</th>
				<th>Option</th>
			</tr>
			<?php
			$jum = !empty($jum) ? $jum: 1;

			if (isset($_POST['tbh_masuk'])) {
				if(!empty(trim($_POST['masukkan']))){
					$tam_jum = $_POST['masukkan'];
					$jum = $tam_jum + $jum;
				}
			}
			var_dump($jum);
			
			?>
			<tr align="center">
				<td><button class="btn2">Cari</button> | <input type="text" name="kode_barang" class="ipt3"> 
				</td>
				<td><input type="number" name="kode_barang" class="ipt2"></td>
				<td><input type="date" name="kode_barang" class="ipt2"></td>
				<td>Rp. <input type="number" name="kode_barang" class="ipt3" align="right"></td>
				<td><button class="btn3">Hapus</button></td>
			</tr>

			<tr>
				<td><input type="number" name="masukkan" class="ipt4"> | <button name="tbh_masuk" class="btn1">Tambah Masukan</button> 
				</td>
				<td colspan="4" align="center"> <button class="btn1">Upload</button></td>
			</tr>
		</table>
	</form>
	<?php

}
else{
	header("Location: 404.php");
}
?>