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
		.isi{
			width: 90%;
			position: absolute;
			margin: 130px 10px 10px 10px;
			padding: 10px 5% 40px 5%;
			z-index: 1;
			font-family: "segoe UI",calibri, arial;
		}
		.isi .judul{
			margin: 5px 0px 10px 5px;
		}
		form br{
			margin: 0px 0px 5px 0px;
		}
		.isi table{
			column-span: none;
		}
		.isi table tr th{
			color: #FFFFFF;
			padding: 5px 5px 10px 5px;
			background-color: #90979b;
			margin: 10px 0px 10px 0px;
		}
		/*button*/
		.btn1{
			text-decoration: none;
			color: #FFFFFF;
			padding: 5px 20px 5px 20px;
			background-color:  #362bb5;
			border-radius: 5px;
			border: none;
			margin: 5px 0px 5px 0px;
		}
		.btn1:hover{
			background-color:  #7970e6;	
		}
		.btn2{
			text-decoration: none;
			color: #FFFFFF;
			padding: 5px 20px 5px 20px;
			background-color:  #26a2d5;
			border-radius: 5px;
			border: none;
			margin: 5px 0px 5px 0px;
		}
		.btn2:hover{
			background-color:  #7ed4f7;
		}
		.btn3{
			text-decoration: none;
			color: #FFFFFF;
			padding: 5px 20px 5px 20px;
			background-color:  #d52626;
			border-radius: 5px;
			border: none;
			margin: 5px 0px 5px 0px;
		}
		.btn3:hover{
			background-color:  #d78181;	
		}
		/*form input*/
		.ipt1{
			font-family: "segoe UI",calibri, arial;
			width: 350px;
			padding: 5px 20px 5px 20px;
		}
		.ipt2{
			font-family: "segoe UI",calibri, arial;
			width: 90%;
			padding: 5px 0px 5px 0px;
		}
		.ipt3{
			font-family: "segoe UI",calibri, arial;
			width: 70%;
			padding: 5px 0px 5px 0px;
		}
		.ipt4{
			font-family: "segoe UI",calibri, arial;
			width: 20%;
			padding: 5px 0px 5px 0px;
		}
		/*keteranagan*/
		.ket1{
			color:  #d52626;
		}
		.ket2{
			color: #25820b;
		}
	</style>

	<?php
}
else{
	header("Location: 404.php");
}

?>
