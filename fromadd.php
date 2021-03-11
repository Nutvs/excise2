<link rel="stylesheet" href="Custom.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูล</title>

    <style>
        label {
            display : inline-block;
            width : 200px;
            margin-bottom : 10px;
        }    
    
    
    </style>



</head>
<body>

<div class="containner">
    <div class="row">
        <div class="col-12"><br>
        <h1 align="center">เพิ่มข้อมูลใบอนุญาต</h1>
        <form action="processlicense.php" method="post" autocomplete="off" align="center">
            <input type="text" name="member_id" placeholder="รหัสบัตรประชาชน">
            <input type="text" name="No_license" placeholder="เลขที่ใบอนุญาต/ปีใบอนุญาต"><br>
            <input type="text" name="Biz_name" placeholder="ชื่อสถานประกอบการ"> 
            <input type="text" name="Biz_address" placeholder="ที่อยู่สถานประกอบการ"><br>
            <input type="text" name="Pass_license" placeholder="รหัสใบอนุญาต">
            <input type="text" name="Type_license" placeholder="แบบใบอนุญาต"><br>
            <input type="text" name="Price_license" placeholder="ค่าชำระใบอนุญาต (บาท) ">
            <input type="text" name="Book_license" placeholder="เล่มที่ใบอนุญาต"><br>
            <input type="text" name="Date_mfg" placeholder="วันที่ออกใบอนุญาต Y/M/D เช่น 2021/2/25">
            <input type="text" name="Date_Exp" placeholder="วันหมดอายุบอนุญาต Y/M/D เช่น 2021/2/25"> <br>
            <input type="submit"  value="เพิ่มข้อมูล" class="btn btn-success">
        </form>
        </div>
    </div>
</div>

    
</body>

</html>