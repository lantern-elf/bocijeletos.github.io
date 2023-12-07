<?php
	session_start();
		$_SESSION;

		include'connection.php';
		include'variable_database_input.php';
		/*$user_data = check_login($db);*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Home</title>
</head>
<body>
<div>

<div class="square">
	<div class="row_bar">
		<div class="task_col">
			<div>
				<a href="index.php"><button class="button_home">Home</button></a>
			</div>
			<div>
				<a href="about.php"><button class="button_about">About</button></a>
			</div>
		</div>
		<div class="task_col">
			<a href="https://wa.me/6283143573222?text=Halo,%20Mau%20pesen%20Baso%20Aci%20apakah%20masih%20ready" target=”_blank”><button class="button_check_out">Check Out</button></a>
		</div>
	</div>
</div>

<div>
	<h1 align="center">Product Menu</h1><br/>
</div>

<div class="row_product" align="center">
	<div class="col">
		<div class="product_box">
			<img class="box_img" src="pict assets/baksobiasa.php.jpg">
			<div class="box_text" align="left">
				Baso Aci Original (5)<br/>
				<b style="font-size: 25px;">Rp. 5.000</b>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="product_box">
			<img class="box_img" src="pict assets/baso_aci_mie.jpg">
			<div class="box_text" align="left">				
				Baso Aci Mie (5)<br/>
				<b style="font-size: 25px;">Rp. 7.000</b>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="product_box">
			<img class="box_img" src="pict assets/baso_aci_ayam_suwir.jpg">
			<div class="box_text" align="left">				
				Baso Aci Ayam Suwir (5)</br>
				<b style="font-size: 25px;">Rp. 8.000</b>
			</div>
		</div>
	</div>
</div>
<br>
<hr></hr>
</br>
<center>
<div id="footer">
	<div class="container">
		<button><a href="https://www.instagram.com/boci_jeletos/?hl=id" target="blank"  style="color:white; text-decoration:none;">Instagram</a></button>
		<button><a href="https://wa.me/6283143573222?text=Halo,%20Mau%20pesen%20Baso%20Aci%20apakah%20masih%20ready"  style="color:white; text-decoration:none;" target="blank">WhatsApp</a></button>
		<button><a href="https://shopee.co.id/BAKSO_aci-i.1101843970.20985624253"  style="color:white; text-decoration:none;" target="blank">Shopee</a></button>
	</div>
</div>
</center>

</div>
</body>
</html>