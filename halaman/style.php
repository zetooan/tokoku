<?php
if (isset($_SESSION['buka']) && $_SESSION['buka'] == "ok") {
	?>

	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		/*header dan navigasi*/
		header{
			margin: 0px 0px 0px 0px;
			width: 100%;
			padding: 20px 10px 20px 30px;
			color: #FFFFFF;
			background-color: #25258a;
			font-family: "segoe UI",calibri, arial;
			font-size: 30px;
			position: fixed;
			z-index: 5;
		}
		nav{
			width: 100%;
			color: #FFFFFF;
			font-size: 10px;
			background-color: #3939cc;
			font-family: "segoe UI",calibri, arial;
			margin: 80px 0px 0px 0px;
			padding: 5px 40px 5px 20px;
			text-align: right;
			position: fixed;
			z-index: 5;
		}
		nav .navigasi{
			display:inline-block;
			font-size: 15px;
			padding: 5px 20px 5px 20px;
			margin: 0px 5px 0px 5px;
			background-color: #353599;
			border-radius: 5px;
		}
		nav .navigasi:hover{
			background-color: #7272dd;
		}
		nav a{
			text-decoration: none;
			color: #FFFFFF;
		}
		.isi{
			position: absolute;
			margin: 130px 10px 10px 10px;
			z-index: 1;
		}
		table{
			font-size: 12px;
			font-family: "segoe UI",calibri, arial;
		}
	</style>

	<?php
}
else{
	header("Location: 404.php");
}

?>
