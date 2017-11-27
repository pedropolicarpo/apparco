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


$sql = "SELECT pitch0, roll0, pitch1, roll1, pitch2, roll2, pitch3, roll3, pitch4, roll4 FROM teste_valores WHERE pitch0 <= pitch0media + pitch0desvio AND roll0 <= roll0media + roll0desvio AND pitch1 <= pitch1media + pitch1desvio AND roll1 <= roll1media + roll1desvio AND pitch2 <= pitch2media + pitch2desvio AND roll2 <= roll2media + roll2desvio AND pitch3 <= pitch3media + pitch3desvio AND roll3 <= roll3media + roll3desvio AND pitch4 <= pitch4media + pitch4desvio AND roll4 <= roll4media + roll4desvio AND u_id ='". $uid ."'";

$sql4 = "SELECT temperatura FROM clima_datas WHERE temperatura <= '$inmedia' + '$indesvio' AND u_id ='".$uid."'";

$res2 = mysqli_query($conn,$sql4);

$boa = mysqli_num_rows($res2);



$res = mysqli_query($conn,$sql);
 
$ma = mysqli_num_rows($res);

//$info = $obj->temperatura; 


echo ($boa);



 
}
 
 mysqli_close($conn);
