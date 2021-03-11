<link rel="stylesheet" href="Custom.css">
<?php include 'condb.php' ?>


        <?php
        
        $member_id = $_POST['member_id'];
        $First_name = $_POST['First_name'];
        $Last_name = $_POST['Last_name'];
        $AddressOwn = $_POST['AddressOwn'];
        $Tel = $_POST['Tel'];

        
    

        $query = "INSERT INTO businessman
        (member_id, First_name, Last_name, AddressOwn, Tel)
        VALUES
        ('$member_id', '$First_name', '$Last_name', '$AddressOwn', '$Tel')
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