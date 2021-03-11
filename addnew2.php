<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">

<!DOCTYPE html>
<html lang="en">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="../img/logoexcise.png" alt="" width="40px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Excise_2/admin.php">หน้าแรก<span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        เพิ่ม
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="http://localhost/Excise_2/addnew1.php">เพิ่มผู้ประกอบการ</a>
          <a class="dropdown-item" href="http://localhost/Excise_2/addnew2.php">เพิ่มสถานประกอบการ</a>
        </div>
      </li>
    </ul>
    </ul>
  </div>
</nav>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มผู้ประกอบการ</title>

    <style>
        label {
            display : inline-block;
            width : 200px;
            margin-bottom : 10px;
        }    
    
    
    </style>



</head>

<header>
                <br>
                <h2 class="head4" align="center">สรรพสามิตพื้นที่ชลบุรี 2</h2>
                <h2 class="head4" align="center">A comprehensive database of entrepreneurs</h2>
                <h2 class="head4" align="center">ฐานข้อมูลผู้ประกอบการเบ็ดเสร็จ</h2>
                
    </header> 
<body>


<form action="processEs.php" method="post" align="center" enctype="multipart/from-data">
<h1 align="center"> ข้อมูลสถานประกอบการ </h1>
<input type="text" name="member_id" placeholder="รหัสบัตรประชาชน">
<input type="text" name="Reg_number" placeholder="เลขทะเบียน"><br>
<input type="text" name="Biz_name" placeholder="ชื่อสถานประกอบการ">
<input type="text" name="Biz_type" placeholder="ประเภทสถานประกอบการ"><br>
<input type="text" name="Biz_address" placeholder="ที่อยู่สถานประกอบการ">
<input type="text" name="Status_Es" placeholder="สถานนะ"><br>
<input type="text" name="Coordinates" placeholder="พิกัดร้าน">
<input type="text" name="Note" placeholder="หมายเหตุ"><br>
<input type="text" name="Document_file" placeholder="link ไฟล์ PDF (google Drive)"/><br><br>
<input type="submit" value="เพิ่ม" class="btn btn-warning" >



</body>

</html>