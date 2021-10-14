<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		/*header dan navigasi*/
		header{
			margin: 0px 0px 0px 0px;
			width: 100%;
			padding: 20px 0px 0px 0px;
			color: #FFFFFF;
			background-color: #13b2f2;
			font-family: "segoe UI",calibri, arial;
			font-size: 30px;
			position: fixed;
			z-index: 5;
		}
		header b{
			margin: 0px 0px 0px 50px;
		}
		nav{
			color: #FFFFFF;
			font-size: 10px;
			background-color: #5dc0e8;
			font-family: "segoe UI",calibri, arial;
			margin: 20px 0px 0px 0px;
			padding: 5px 10px 5px 60px;
			text-align: right;
			z-index: 5;
		}
		nav .navigasi{
			display:inline-block;
			font-size: 15px;
			padding: 5px 20px 5px 20px;
			margin: 0px 5px 0px 5px;
			background-color:  #13b2f2;
			border-radius: 5px;
		}
		nav .navigasi:hover{
			background-color: #78d2f7;
		}
		nav a{
			text-decoration: none;
			color: #FFFFFF;
		}
	</style>
</head>
<body>
	<header><b>TokoKU</b>
	<nav>
	<a href="index.php?hal1=barang" class="navigasi">Barang</a>
	<a href="index.php?hal1=pemasukan" class="navigasi">Pemasukan</a>
	<div class="navigasi">Sortir</div>
	<div class="navigasi">Penjualan</div>
	<div class="navigasi">Laporan</div>
	</nav>
	</header>
</body>
</html>