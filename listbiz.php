<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">
<?php
include('condb.php');
$query = "SELECT * FROM business
WHERE member_id "or die("Error:" . mysqli_error()); 
$result = mysqli_query($con, $query);
echo "<div class='container'>";
echo '<h4 align="center"> รายการสถานประกอบการ </h4>';
echo "<table border='1' align='center' class='table table-hover'>";
  echo "
  <tr align='center' bgcolor='#CCCCCC'>
    <td>เลขทะเบียน</td>
    <td>ชื่อสถานประกอบการ</td>
    <td>ประเภทสถานประกอบการ</td>
    <td>ที่อยู่สถานประกอบการ</td>
    <td>สถานะ</td>
    <td>พิกัดร้าน</td>
    <td>หมายเหตุ</td>
  </tr>";

  foreach( $result as $row ) {
  
  echo "<tr>";
  
    echo "<td>" .$row["Reg_number"] .  "</td> ";
    echo "<td>" .$row["Biz_name"] .  "</td> ";
    echo "<td>" .$row["Biz_type"] .  "</td> ";
    echo "<td>" .$row["Biz_address"] .  "</td> ";
    echo "<td>" .$row["Status"] .  "</td> ";
    echo "<td>" .$row["Coordinates"] .  "</td> ";
    echo "<td class='head5'>" .$row["Note"] .  "</td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
echo '<hr>';

?>

