<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">
<title>ข้อมูลใบอนุญาตของผู้ประกอบการ</title>


    <?php
    include('condb.php'); 
    echo "<div class='wrapper'>";
    
    
    echo "<div class='container'>";
    echo '<h4 align="left"> ข้อมูลผู้ประกอบการ </h4>';
    echo "<table border='1' align='center' class='table table-hover'>";
      echo "
      <tr align='center' bgcolor='#CCCCCC' width='30px' height=''>
        <td>เลขที่ใบอนุญาต</td>
        <td>ชื่อสถานประกอบการ</td>
        <td>ที่อยู่สถานประกอบการ</td>
        <td>รหัสใบอนุญาต</td>
        <td>แบบใบอนุญาต</td>
        <td>ราคาชำระใบอนุญาต (บาท)</td>
        <td>เล่มที่ใบอนุญาต</td>
        <td>วันที่ออกใบอนุญาต</td> 
        <td>วันหมดอายุใบอนุญาต</td>     
      </tr>";
      
      
      
        $query = "SELECT * FROM business_licence WHERE member_id LIKE '$btn1' "or die("Error:" . mysqli_error());
        $result = mysqli_query($con, $query);
        while($row =  mysqli_fetch_array($result)) {
        ?>
    

        <tr>
               
              <td><?php echo $row['No_license'];?></td>
              <td><?php echo $row['Biz_name'];?></td>
              <td><?php echo $row['Biz_address'];?></td>
              <td><?php echo$row['Pass_license'];?></td>
              <td><?php echo$row['Type_license'];?></td>
              <td><?php echo$row['Price_license'];?></td>
              <td><?php echo$row['Book_license'];?></td>
              <td><?php echo$row['Date_mfg'];?></td>
              <td><?php echo$row['Date_Exp'];?></td>
        </tr>
        
       <?php } echo '<hr>';  ?>
    
       

