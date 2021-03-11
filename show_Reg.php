<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">
<title>ใบอนุญาต</title>

<body>
  

    <?php
    include('condb.php'); 
    echo "<div class='wrapper'>";
    
    echo "<table border='1' align='center' class='table table-hover'>";
      echo "
      <tr align='center' bgcolor='#CCCCCC'>
        <td>เลขทะเบียนสรรพสามิต</td>
        <td>หมายเลขใบเสร็จ</td>
        <td>วันที่จัดเก็บรายได้</td>
        <td>ภาษีที่ชำระ (บาท)</td>
        <td>ชื่อสถานประกอบการ</td>
        <td>หมายเหตุ</td>
      </tr>";
      
      
      
        $query = "SELECT * FROM register WHERE member_id LIKE '$btn2' "or die("Error:" . mysqli_error());
        $result = mysqli_query($con, $query);
        
        while($row =  mysqli_fetch_array($result)) {
        ?>
        

        <tr>
              <td><?php echo $row['Reg_number'];?></td> 
              <td><?php echo $row['No_license'];?></td>
              <td><?php echo $row['Date_collect'];?></td>
              <td><?php echo $row['Price_vat'];?></td>
              <td><?php echo $row['Owner_name'];?></td>
              <td><?php echo$row['Note'];?></td>
        </tr>
        
       <?php }   ?>

</body>
