<?php

if (isset($_POST['registra'])) {

include_once 'dbh.inc.php';

session_start();

 if(isset($_SESSION['u_id'])) {


   $regiao = mysqli_real_escape_string($conn, $_POST['regiao']); 
   $inten = mysqli_real_escape_string($conn, $_POST['inten']); 
   $uid = $_SESSION['u_id'];

   if(empty($regiao)) {
	header("Location: ../dor.html?registro=vazio");
	exit();

} else {

$sql = "INSERT INTO dor (regiao, intensidade, tempo, u_id) VALUES ('$regiao', '$inten', CURRENT_TIMESTAMP, '$uid' );";
mysqli_query($conn, $sql);
	header("Location: ../dor.html?cadastro=sucesso");
	exit();
};
};
};
	