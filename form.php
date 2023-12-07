<?php
	session_start();
	include 'connection.php';
	include 'variable_database_input.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div>

<center>
<div class="log-in_box">
	<div>
		<br><b style="font-size: 30px;">Register</b></br><br/>
		
		<div>
			<form method="post" action="">
			<table width="80%">
				<tr>
					<td>
						<label>Create your username:<br/>
						<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>
						<label>E-mail:<br/>
						<input type="email" name="email">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit">
					</td>
				</tr>
			</table>
			</form>
			Already have an account? <a style="color:#605eeb; text-decoration:none;" href="login.php">Log in</a> Now.
		</div>
	</div>
	<br/>
	<div style="width: 80%; font-size: 17px;"><b>
		<?php
			if(!$username ||!$email){
				echo "Complete the data!";
			}
			else{
				$sql=$db->query("INSERT INTO user_data values('$user_id','$username','$email')") or die ('<span style="color:#f54040;">Error connecting to database, your email might already be used</span>');
				if($sql){
					echo"Data input";
					header("location: verification.php", true, 301);
				}
				else{
					echo"Try Again!";
				}
			}
		?>
	</div>
</div>
</center>

</div>
</body>
</html>