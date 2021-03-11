<link rel="stylesheet" href="Custom.css">
<?php include 'condb.php' ?>


        <?php
        
        $member_id = $_POST['member_id'];
        $No_license = $_POST['No_license'];
        $Biz_name = $_POST['Biz_name'];
        $Biz_address = $_POST['Biz_address'];
        $Pass_license = $_POST['Pass_license'];
        $Type_license = $_POST['Type_license'];
        $Price_license = $_POST['Price_license'];
        $Book_license = $_POST['Book_license'];
        $Date_mfg = $_POST['Date_mfg'];
        $Date_Exp = $_POST['Date_Exp'];

        $query = "INSERT INTO business_licence
        (member_id, No_license, Biz_name, Biz_address, Pass_license, Type_license, Price_license, Book_license, Date_mfg, Date_Exp)
        VALUES
        ('$member_id', '$No_license', '$Biz_name', '$Biz_address', '$Pass_license', '$Type_license', '$Price_license', '$Book_license', '$Date_mfg', '$Date_Exp')
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