<?php
	session_start();
		$_SESSION;

		include'connection.php';
		include'variable_database_input.php';
		/*$user_data = check_login($db);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link rel="stylesheet" href="style.css">
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
				<a href=""><button class="button_about">About</button></a>
			</div>
		</div>
		<div class="task_col">
			<a href="checkout.php"><button class="button_check_out">Check Out</button></a>
		</div>
	</div>
</div>

<center>
<div class="order_box">
	<form method="post" action="" id="orderform">
		<table>
		<br><b style="font-size: 30px;">Order</b></br><br/>
			<tr>
				<td>
					<Label>E-mail: </label>
					<input type="email" name="email_order">
				</td>
			</tr>
			<tr>
				<td>
					<label>Address: </label>
					<textarea rows="4" cols="50" type="text" name="address" form="orderform"></textarea>
				</td>
			</tr>
			<tr>	
			</tr>
		</table>
		<table>
			<tr>
				<td>
					<label>Baso Aci Original: </label>
					<input type="number" name="original">
				</td>
				<td>
					<label>Baso Aci Mie: </label>
					<input type="number" name="mie">
				</td>
				<td>
					<label>Baso Aci Ayam Suwir: </label>
					<input type="number" name="suwir">
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td>
					<input type="submit" class="button" value="Submit">
				</td>
			</tr>
		</table>
	</form>
	<?php
		if(!$email_order ||!$address){
			echo "Complete your E-mail and Address";
		}
		else{
			$sql = $db->query("INSERT INTO order values('$order_id','$email_order','$address','$original','$mie','$suwir')") or die ('error');
			if($sql){
				echo "Success";
			}
			else{
				echo "Failed";
			}
		}
	?>
</div>
</center>

</div>
</body>
</html>