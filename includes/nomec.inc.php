<?php
include_once 'dbh.inc.php';

session_start();

 if(isset($_SESSION['u_id'])) {

$uid = $_SESSION['u_id'];

$sql = "SELECT user_nomec FROM users WHERE user_id ='".$uid."'";



$res = mysqli_query($conn,$sql);
 
$obj = mysqli_fetch_object($res);

$nome = $obj->user_nomec; 

echo $nome;
 
}
 
 mysqli_close($conn);
