<?php
include_once 'dbh.inc.php';

session_start();

 if(isset($_SESSION['u_id'])) {

$uid = $_SESSION['u_id'];



$sqlQuery = "SELECT data, pitch0, roll0, pitch1, roll1, pitch2, roll2, pitch3, roll3, pitch4, roll4 FROM teste_valores WHERE uid ='".$uid."'";
$qry = mysqli_query($conn, $sqlQuery);
    


echo "<table class='bordered centered highlight responsive-table'>
<thead>
          <tr>
              <th>Data</th>
              <th>Eixo Y 1</th>
              <th>Eixo X 1</th>
              <th>Eixo Y 2</th>
              <th>Eixo X 2</th>
              <th>Eixo Y 3</th>
              <th>Eixo X 3</th>
              <th>Eixo Y 4</th>
              <th>Eixo X 4</th>
              <th>Eixo Y 5</th>
              <th>Eixo X 5</th>

          </tr>
        </thead>
        <tbody>";
while($row = mysqli_fetch_assoc($qry)){
echo "
<tr>
<td>".$row["data"]."</td>
<td>".$row["pitch0"]."</td>
<td>".$row["roll0"]."</td>
<td>".$row["pitch1"]."</td>
<td>".$row["roll1"]."</td>
<td>".$row["pitch2"]."</td>
<td>".$row["roll2"]."</td>
<td>".$row["pitch3"]."</td>
<td>".$row["roll3"]."</td>
<td>".$row["pitch4"]."</td>
<td>".$row["roll4"]."</td>
</tr>
";
}
}
echo "
</tbody>
</table>";
?>