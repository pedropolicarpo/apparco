<?php
include_once 'dbh.inc.php';

session_start();

 if(isset($_SESSION['u_id'])) {

$uid = $_SESSION['u_id'];

$sql = "SELECT media FROM calibrar WHERE u_id ='".$uid."'";



$res = mysqli_query($conn,$sql);
 
$obj = mysqli_fetch_object($res);

$media = $obj->media; 

echo $media;
 
}
 
 mysqli_close($conn);