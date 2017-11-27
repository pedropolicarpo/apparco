<?php

session_start();

if (isset($_POST['login'])) {

include_once 'dbh.inc.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

//erros
if (empty($email) || empty($pwd)) 		{
			echo "failed";
		} else {
	$sql = "SELECT * FROM users WHERE user_email='$email'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck < 1)		{
			echo "failed";
		}else{
        	if ($row = mysqli_fetch_assoc($result)) {
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) 		{
			echo "senha";
		} elseif ($hashedPwdCheck == true) 		{
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_nomec'] = $row['user_nomec'];
					$_SESSION['u_email'] = $row['user_email'];
			echo "success";
		}
		}
	}



}
} else 		{
			echo "failed";
		}