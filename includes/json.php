<?php
include "dbh.inc.php";
$data=array();
$q=mysqli_query($conn,"SELECT * FROM `arco`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
