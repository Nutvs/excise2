<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">
<title>ข้อมูลผู้ประกอบการ</title>


    <?php
    include('condb.php'); 
    echo "<div class='wrapper'>";
    
    
    echo "<div class='container'>";
    echo '<h4 align="left"> ข้อมูลผู้ประกอบการ </h4>';
    echo "<table border='1' align='center' class='table table-hover'>";
      echo "
      <tr align='center' cellspacing='0' bgcolor='#CCCCCC' width='30px' height=''>
        <td>รหัสบัตรประชาชน</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>ที่อยู่</td>
        <td>เบอร์โทรศัพท์</td>       
      </tr>";
      
      
      
        $query = "SELECT * FROM businessman WHERE member_id LIKE '$search' "or die("Error:" . mysqli_error());
        $result = mysqli_query($con, $query);
        while($row =  mysqli_fetch_array($result)) {
        ?>
        

        <tr>
              <td><?php echo $row['member_id'];?></td> 
              <td><?php echo $row['First_name'];?></td>
              <td><?php echo $row['Last_name'];?></td>
              <td><?php echo $row['AddressOwn'];?></td>
              <td><?php echo$row['Tel'];?></td>
        </tr>
        
       <?php } echo '<hr>';  ?>
    
       

