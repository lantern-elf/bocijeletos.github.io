<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log-in</title>
</head>
<body>
<div>    

<?php
include 'connection.php'
?>

<center><div class="log-in_box"><center>
	<div>
		<br><b style="font-size: 30px;">Log In</b></br><br/>
	</div>
	<div>
		<form method="post" action="">
		<table width="80%">
			<tr>
				<td>
					<Label>Username: </label>
					<input class="input" type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					<label>E-mail: </label>
					<input class="input" type="email" name="email">
				</td>
			</tr>
			<tr>
				<td align="right"><input type="submit" class="button" value="Submit"></td>
			</tr>
		</table>
		</form>
        Have no account? <a style="color:#605eeb; text-decoration:none;" href="form.php">Register</a> Now.
	</div>
</center></div></center>
</div>
</body>
</html>