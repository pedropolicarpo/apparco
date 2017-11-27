<?php
include_once 'dbh.inc.php';

session_start();

 if(isset($_SESSION['u_id'])) {

$uid = $_SESSION['u_id'];



$rs = mysqli_query("SELECT regiao, intensidade FROM dor WHERE u_id ='".$uid."'");

echo "<ul>";
while( false !== ($row = mysqli_fetch_assoc($rs)));
{
echo $row;
 };
 mysqli_close($conn);