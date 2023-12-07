<?php
include 'connection.php';
function check_login(){
		if(isset($_SESSION['user_data'])){
            $user_id = $_SESSION['user-data'];
            $query = "select * from user_data where user_id = '$user_id' limit 1";

            $result = mysqli_query($db, $query);
        }
	}
?>