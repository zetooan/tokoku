<?php
	session_start();
	$_SESSION['buka'] = "ok";
	$_SESSION['halaman'] = "ok";
	if (isset($_SESSION['buka']) && $_SESSION['buka'] == "ok") {
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Toko</title>
			<?php
			include 'halaman/style.php';
			?>
		</head>
		<body>
		<?php
		$_SESSION['halaman'] = isset($_GET['hal1']) ? $_GET['hal1']: "";
		$halaman[2]= isset($_GET['hal2']) ? $_GET['hal2']: "";
		include 'fungsi/fungsi.php';
		include 'halaman/header.php';
		?>
			<div class="isi">
		<?php
		if ($_SESSION['halaman'] == 'barang') {
			include 'halaman/barang.php';
		}
		elseif ($_SESSION['halaman'] == 'pemasukan') {
			include 'halaman/pemasukan.php';
		}
		else{
			include 'halaman/barang.php';
		}
				?>
			</div>
		</body>
		</html>
		<?php
	}
	else{
		include 'halaman/404.php';
	}
	unset($_SESSION['buka']);
?>