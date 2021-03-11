<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">
<title>ข้อมูลผู้ประกอบการ</title>
<body>


    <?php
    include('condb.php'); 
 
    echo "<div class='container'>";
    echo "<div class='col-xl-12 col-lg-12 col-md-12 col-12 logo text-center'>";
    echo "<table border='1' align='center' class='table table-hover'>";
      echo "
      <tr align='center' bgcolor='#CCCCCC' width='30px' height=''>
        <td>เลขทะเบียน</td>
        <td>ชื่อสถานประกอบการ</td>
        <td>ประเภทสถานประกอบการ</td> 
        <td>ที่อยู่สถานประกอบการ</td>
        <td>สถานะ</td>
        <td>พิกัดร้าน</td>
        <td>ไฟล์</td> 
        <td>หมายเหตุ</td>      
      </tr>";
      
      
      
        $query = "SELECT * FROM business WHERE member_id  LIKE '$search' "or die("Error:" . mysqli_error());
        $result = mysqli_query($con, $query);
        
        while($row =  mysqli_fetch_array($result)) {
        ?>
        

        <tr>
              <td><?php echo $row['Reg_number'];?></td>
              <td><?php echo $row['Biz_name'];?></td>
              <td><?php echo $row['Biz_type'];?></td>
              <td><?php echo$row['Biz_address'];?></td>
              <td><?php echo$row['Status_Es'];?></td>
              <td><?php echo$row['Coordinates'];?></td>
              <!-- ลิ้งข้อมูลที่บันทึกไว้ใน database -->
              <td><?php echo'<a href='.$row['file_link'].'>'.$row['file_link'].'</a>';
                  ?></td>
              <td><?php echo $row['Note'];?></td> 
        </tr>
        
       <?php } echo '<hr>';  ?>
    
</body>       

