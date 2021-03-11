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
        <h1 align="center">เพิ่มข้อมูลทะเบียน</h1>
        <form action="processReg.php" method="post" autocomplete="off" align="center">
            <input type="text" name="member_id" placeholder="รหัสบัตรประชาชน">
            <input type="text" name="Reg_number" placeholder="เลขทะเบียนสรรพสามิต"><br>
            <input type="text" name="No_license" placeholder="หมายเลขใบเสร็จ"> 
            <input type="text" name="Date_collect" placeholder="วันที่จัดเก็บรายได้ Y/M/D เช่น 2021/2/25"><br>
            <input type="text" name="Price_vat" placeholder="ภาษีที่ชำระ (บาท)">
            <input type="text" name="Owner_name" placeholder="ชื่อสถานประกอบการ"><br>
            <input type="text" name="Note" placeholder="หมายเหตุ (ไม่มี ใช้สัญลักษณ์ขีด - )"> <br>
            
            <input type="submit"  value="เพิ่มข้อมูล" class="btn btn-success">
        </form>
        </div>
    </div>
</div>

    
</body>

</html>