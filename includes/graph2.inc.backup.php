<?php
include_once 'dbh.inc.php';

session_start();

 if(isset($_SESSION['u_id'])) {

$uid = $_SESSION['u_id'];

//media

$sql2 = "SELECT media FROM calibrar WHERE u_id ='" .$uid."'";

$rmedia = mysqli_query($conn,$sql2);

$objmedia = mysqli_fetch_object($rmedia);

$inmedia = $objmedia->media;

//desvio

$sql3 = "SELECT desviop FROM calibrar WHERE u_id ='" .$uid."'";

$rdesvio = mysqli_query($conn,$sql3);

$objdesvio = mysqli_fetch_object($rdesvio);

$indesvio = $objdesvio->desviop;

//calculo

//resultado


$sql = "SELECT temperatura FROM clima_datas WHERE temperatura >= '$inmedia' + '$indesvio' AND u_id ='".$uid."'";

$sql4 = "SELECT temperatura FROM clima_datas WHERE temperatura <= '$inmedia' + '$indesvio' AND u_id ='".$uid."'";

$res2 = mysqli_query($conn,$sql4);

$boa = mysqli_num_rows($res2);



$res = mysqli_query($conn,$sql);
 
$ma = mysqli_num_rows($res);

//$info = $obj->temperatura; 


echo ($ma);



 
}
 
 mysqli_close($conn);
