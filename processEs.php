<link rel="stylesheet" href="Custom.css">
<?php include 'condb.php' ?>


        <?php
        
        $member_id = $_POST['member_id'];
        $Reg_number = $_POST['Reg_number'];
        $Biz_name = $_POST['Biz_name'];
        $Biz_address = $_POST['Biz_address'];
        $Status_Es = $_POST['Status_Es'];
        $Coordinates = $_POST['Coordinates'];
        $Document_file = $_POST['Document_file'];
        $Note = $_POST['Note'];
        

        $query = "INSERT INTO business
        (member_id, Reg_number, Biz_name, Biz_address, Status_Es, Coordinates, Document_file, Note)
        VALUES
        ('$member_id', '$Reg_number', '$Biz_name', '$Biz_address', '$Status_Es', ' $Coordinates','$Document_file', ' $Note')
        ";

        $result = mysqli_query($con, $query)or die("Error in sql : $query". mysqli_error($query));
         
        mysqli_close($con); 

        if($result){
            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มข้อมูลสำเร็จ');";
            echo "</script>";
        }else {
            echo 'ERROR !!';
        }

        ?>