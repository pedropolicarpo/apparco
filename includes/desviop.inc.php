<?php
include_once 'dbh.inc.php';

session_start();

 if(isset($_SESSION['u_id'])) {

$uid = $_SESSION['u_id'];

$sql = "SELECT desviop FROM calibrar WHERE u_id ='".$uid."'";



$res = mysqli_query($conn,$sql);
 
$obj = mysqli_fetch_object($res);

$desvio = $obj->desviop; 

echo $desvio;
 
}
 
 mysqli_close($conn);
