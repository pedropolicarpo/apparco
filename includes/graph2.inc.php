<?php
include_once 'dbh.inc.php';

session_start();

 if(isset($_SESSION['u_id'])) {

$uid = $_SESSION['u_id'];

//mediapitch0

$sql2 = "SELECT pitch0media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia = mysqli_query($conn,$sql2);

$objmedia = mysqli_fetch_object($rmedia);

$mediapitch0 = $objmedia->pitch0media;

//mediaroll0
$sql3 = "SELECT roll0media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia1 = mysqli_query($conn,$sql3);

$objmedia1 = mysqli_fetch_object($rmedia1);

$mediaroll0 = $objmedia1->roll0media;

//mediapitch1
$sql4 = "SELECT pitch1media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia2 = mysqli_query($conn,$sql4);

$objmedia2 = mysqli_fetch_object($rmedia2);

$mediapitch1 = $objmedia2->pitch1media;

//mediaroll1
$sql5 = "SELECT roll1media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia3 = mysqli_query($conn,$sql5);

$objmedia3 = mysqli_fetch_object($rmedia3);

$mediaroll1 = $objmedia3->roll1media;

//mediapitch2
$sql6 = "SELECT pitch2media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia4 = mysqli_query($conn,$sql6);

$objmedia4 = mysqli_fetch_object($rmedia4);

$mediapitch2 = $objmedia4->pitch2media;

//mediaroll2
$sql7 = "SELECT roll2media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia5 = mysqli_query($conn,$sql7);

$objmedia5 = mysqli_fetch_object($rmedia5);

$mediaroll2 = $objmedia5->roll2media;

//mediapitch3
$sql8 = "SELECT pitch3media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia6 = mysqli_query($conn,$sql8);

$objmedia6 = mysqli_fetch_object($rmedia6);

$mediapitch3 = $objmedia6->pitch3media;

//mediaroll3
$sql9 = "SELECT roll3media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia8 = mysqli_query($conn,$sql9);

$objmedia8 = mysqli_fetch_object($rmedia8);

$mediaroll3 = $objmedia8->roll3media;

//mediapitch4
$sql10 = "SELECT pitch4media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia9 = mysqli_query($conn,$sql10);

$objmedia9 = mysqli_fetch_object($rmedia9);

$mediapitch4 = $objmedia9->pitch4media;

//mediaroll4
$sql11 = "SELECT roll4media FROM calibragem WHERE uid ='" .$uid."'";

$rmedia10 = mysqli_query($conn,$sql11);

$objmedia10 = mysqli_fetch_object($rmedia10);

$mediaroll4 = $objmedia10->roll4media;


//desviopitch0

$sql12 = "SELECT pitch0desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio0 = mysqli_query($conn,$sql12);

$objdesvio0 = mysqli_fetch_object($rdesvio0);

$desviopitch0 = $objdesvio0->pitch0desvio;

//desvioroll0

$sql13 = "SELECT roll0desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio1 = mysqli_query($conn,$sql13);

$objdesvio1 = mysqli_fetch_object($rdesvio1);

$desvioroll0 = $objdesvio1->roll0desvio;

//desviopitch1

$sql14 = "SELECT pitch1desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio2 = mysqli_query($conn,$sql14);

$objdesvio2 = mysqli_fetch_object($rdesvio2);

$desviopitch1 = $objdesvio2->pitch1desvio;

//desvioroll1

$sql15 = "SELECT roll1desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio3 = mysqli_query($conn,$sql15);

$objdesvio3 = mysqli_fetch_object($rdesvio3);

$desvioroll1 = $objdesvio3->roll1desvio;

//desviopitch2

$sql16 = "SELECT pitch2desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio4 = mysqli_query($conn,$sql16);

$objdesvio4 = mysqli_fetch_object($rdesvio4);

$desviopitch2 = $objdesvio4->pitch2desvio;

//desvioroll2

$sql17 = "SELECT roll2desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio5 = mysqli_query($conn,$sql17);

$objdesvio5 = mysqli_fetch_object($rdesvio5);

$desvioroll2 = $objdesvio5->roll2desvio;

//desviopitch3

$sql18 = "SELECT pitch3desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio6 = mysqli_query($conn,$sql18);

$objdesvio6 = mysqli_fetch_object($rdesvio6);

$desviopitch3 = $objdesvio6->pitch3desvio;

//desvioroll3

$sql19 = "SELECT roll3desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio7 = mysqli_query($conn,$sql19);

$objdesvio7 = mysqli_fetch_object($rdesvio7);

$desvioroll3 = $objdesvio7->roll3desvio;

//desviopitch4

$sql20 = "SELECT pitch4desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio8 = mysqli_query($conn,$sql20);

$objdesvio8 = mysqli_fetch_object($rdesvio8);

$desviopitch4 = $objdesvio8->pitch4desvio;

//desvioroll4

$sql21 = "SELECT roll4desvio FROM calibragem WHERE uid ='" .$uid."'";

$rdesvio9 = mysqli_query($conn,$sql21);

$objdesvio9 = mysqli_fetch_object($rdesvio9);

$desvioroll4 = $objdesvio9->roll4desvio;

//calculo

//resultado


$sql41 = "SELECT pitch0, roll0, pitch1, roll1, pitch2, roll2, pitch3, roll3, pitch4, roll4 FROM teste_valores WHERE pitch0 <= '$mediapitch0' + '$desviopitch0' AND pitch0 >= '$mediapitch0' - '$desviopitch0' AND roll0 <= '$mediaroll0' + '$desvioroll0' AND roll0 >= '$mediaroll0' - '$desvioroll0' AND pitch1 <= '$mediapitch1' + '$desviopitch1' AND pitch1 >= '$mediapitch1' - '$desviopitch1' AND roll1 <= '$mediaroll1' + '$desvioroll1' AND roll1 >= '$mediaroll1' - '$desvioroll1' AND pitch2 <= '$mediapitch2' + '$desviopitch2' AND pitch2 >= '$mediapitch2' - '$desviopitch2' AND roll2 <= '$mediaroll2' + '$desvioroll2' AND roll2 >= '$mediaroll2' - '$desvioroll2' AND pitch3 <= '$mediapitch3' + '$desviopitch3' AND pitch3 >= '$mediapitch3' - '$desviopitch3' AND roll3 <= '$mediaroll3' + '$desvioroll3' AND roll3 >= '$mediaroll3' - '$desvioroll3' AND pitch4 <= '$mediapitch4' + '$desviopitch4' AND pitch4 >= '$mediapitch4' - '$desviopitch4' AND roll4 <= '$mediaroll4' + '$desvioroll4' AND roll4 >= '$mediaroll4' - '$desvioroll4' AND uid ='". $uid ."'";

$sql42 = "SELECT pitch0, roll0, pitch1, roll1, pitch2, roll2, pitch3, roll3, pitch4, roll4 FROM teste_valores WHERE uid ='". $uid ."'";


$res = mysqli_query($conn,$sql41);

$res2 = mysqli_query($conn,$sql42);
 
$boa = mysqli_num_rows($res);

$todas = mysqli_num_rows($res2);

//$ma = mysqli_num_rows($res - $res2);

//$info = $obj->temperatura; 


echo ($todas-$boa);



 
}
 
 mysqli_close($conn);
