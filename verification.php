<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Verification</title>
</head>
<body>
<div>

<?php
include 'connection.php';
include 'variable_database_input.php';
?>

<div class="container">
    <div class="log-in_box"><center>
        <br><b style="font-size: 25px;">Enter the code!</b></br><br/>

        We just sent a verification code to your E-Mail<br/>
        
        <form method="post" action=""><br/>
            <div style="position: relative; bottom: 10px">
                <table width="80%">
                    <tr>
                        <td>
                            <input type="number" name="verifiet">
                        </td>
                        <td>
                            <input type="submit" name="submit">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>
    
</div> 
</body>
</html>