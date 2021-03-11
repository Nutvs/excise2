<link rel="stylesheet" href="Custom.css">
<?php include 'condb.php' ?>


        <?php
        
        $member_id = $_POST['member_id'];
        $Reg_number = $_POST['Reg_number'];
        $No_license = $_POST['No_license'];
        $Date_collect = $_POST['Date_collect'];
        $Price_vat = $_POST['Price_vat'];
        $Owner_name = $_POST['Owner_name'];
        $Note = $_POST['Note'];
       

        $query = "INSERT INTO register
        (member_id, Reg_number, No_license, Date_collect, Price_vat, Owner_name, Note)
        VALUES
        ('$member_id', '$Reg_number', '$No_license', '$Date_collect', '$Price_vat','$Owner_name', '$Note')
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