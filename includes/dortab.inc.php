<?php
include_once 'dbh.inc.php';

session_start();

 if(isset($_SESSION['u_id'])) {

$uid = $_SESSION['u_id'];



$sqlQuery = "SELECT regiao, intensidade, tempo FROM dor WHERE u_id ='".$uid."'";
$qry = mysqli_query($conn, $sqlQuery);
    


echo "<table class='centered highlight'>        <thead>
          <tr>
              <th>Região</th>
              <th>Intensidade</th>
              <th>Data</th>
          </tr>
        </thead>
        <tbody>";
while($row = mysqli_fetch_assoc($qry)){
echo "<tr><td>".$row["regiao"]."</td><td>".$row["intensidade"]."</td><td>".$row["tempo"]."</td></tr>";
}
}
echo "</tbody>
</table>";
?>