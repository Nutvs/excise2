<?php

include('condb.php'); 
$query = "SELECT * FROM businessman
WHERE member_id "or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);




echo "<div class='container-fluid'>";

echo '<h4 align="center"> ข้อมูล </h4>';
echo "<table border='1' align='center' class='table table-hover'>";
  echo "
  <tr align='center' bgcolor='#CCCCCC' width='30px' height=''>
    <td>รหัสบัตรประชาชน</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>ที่อยู่</td>
    <td>เบอร์โทรศัพท์</td>
  </tr>";

  foreach( $result as $row ) {
  
  echo "<tr>";
    echo "<td>" .$row["member_id"] .  "</td> ";
    echo "<td>" .$row["First_name"] .  "</td> ";
    echo "<td>" .$row["Last_name"] .  "</td> ";
    echo "<td>" .$row["address"] .  "</td> ";
    echo "<td>" .$row["Tel"] .  "</td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
echo '<hr>';



?>