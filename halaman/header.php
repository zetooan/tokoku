<?php
if (isset($_SESSION['buka']) && $_SESSION['buka'] == "ok")
{
	?>
	<header><b>TokoKU</b></header>
	<nav>
	<a href="index.php?hal1=barang" class="navigasi">Barang</a>
	<a href="index.php?hal1=pemasukan" class="navigasi">Pemasukan</a>
	<div class="navigasi">Sortir</div>
	<div class="navigasi">Penjualan</div>
	<div class="navigasi">Laporan</div>
	</nav>
	<?php
}
else
{
	header("Location: 404.php");
}



?>
