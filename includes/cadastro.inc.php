<?php

if (isset($_POST['submit'])) {

include_once 'dbh.inc.php';

   $nomec = mysqli_real_escape_string($conn, $_POST['nomec']); 
   $email = mysqli_real_escape_string($conn, $_POST['email']); 
   $pwd = mysqli_real_escape_string($conn, $_POST['pwd']); 

//Prevenção
if(empty($nomec) || empty($email) || empty($pwd)) {
	header("Location: ../cadastro.html?cadastro=empty");
	exit();

} else {
if(!preg_match("/^[a-zA-Z ]*$/", $nomec)){
	header("Location: ../cadastro.html?cadastro=invalid");
	exit();
} else {
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location: ../cadastro.html?cadastro=email");
	exit();
} else {
$sql= "SELECT * FROM users WHERE user_email='$email'";	
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck > 0) {
    header("Location: ../cadastro.html?cadastro=doublemail");
	exit();
} else {
	//senha
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	//Inserir usurario na bd
	$sql = "INSERT INTO users (user_nomec, user_email, user_pwd) VALUES ('$nomec', '$email', '$hashedPwd' );";
mysqli_query($conn, $sql);
	header("Location: ../cadastro.html?cadastro=success");
	exit();
}
}

}
}

	//Close first statement
	mysqli_stmt_close($stmt);
	//Close second statement
	mysqli_stmt_close($stmt2);

} else {
	header("Location: ../cadastro.html");
	exit();
}