<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title>ใบอนุญาต</title>
<?php
include('condb.php');
$query = "SELECT * FROM business_licence
WHERE No_license "or die("Error:" . mysqli_error()); 
$result = mysqli_query($con, $query);

echo '<h4 align="center"> รายการใบอนุญาต </h4>';
echo "<table border='1' align='center' class='table table-hover'>";
  echo "
  <tr align='center' bgcolor='#CCCCCC'>
    <td>เลขที่ใบอนุญาต</td>
    <td>ชื่อสถานประกอบการ</td>
    <td>ที่อยู่</td>
    <td>รหัสใบินุญาต</td>
    <td>แบบใบอนุญาต</td>
    <td>ค่าใบอนุญาต</td>
    <td>เล่มที่ใบอนุญาต</td>
    <td>วันที่ออกใบอนุญาต</td>
    <td>วันหมดอายุใบอนุญาต</td>
  </tr>";

  foreach( $result as $row ) {
  
  echo "<tr>";
    echo "<td>" .$row["No_license"] .  "</td> ";
    echo "<td>" .$row["Biz_name"] .  "</td> ";
    echo "<td>" .$row["Biz_address"] .  "</td> ";
    echo "<td>" .$row["Pass_license"] .  "</td> ";
    echo "<td>" .$row["Type_license"] .  "</td> ";
    echo "<td>" .$row["Price_license"] .  "</td> ";
    echo "<td>" .$row["Book_license"] .  "</td> ";
    echo "<td>" .$row["Date_mfg"] .  "</td> ";
    echo "<td>" .$row["Date_Exp"] .  "</td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
echo '<hr>';

?>