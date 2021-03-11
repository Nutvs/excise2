<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">

<?php
session_start();
include('condb.php');

$ID    = $_SESSION['ID'];
$name  = $_SESSION['name'];
$level = $_SESSION['level'];
if ($level != 'admin') {
    Header("Location: ../logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ตรวจสอบข้อมูลสรรพสามิต</title>
</head>
<body>
<navbar>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/Excise_2/admin.php"><img src="../img/logoexcise.png" alt="" width="40px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Excise_2/admin.php">หน้าแรก<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
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
</navbar>
    
    <form action="logout.php" align="right">
    <p>  <?php
echo $name;
?> สถานะ <?php
echo $level;
?> </p>
    <input type="submit" value="ออกจากระบบ" class="btn btn-danger">
    </form>
  </div>
</nav>

<header>
                <br>
                <h2 class="head4" align="center">สรรพสามิตพื้นที่ชลบุรี 2</h2>
                <h2 class="head4" align="center">A comprehensive database of entrepreneurs</h2>
                <h2 class="head4" align="center">ฐานข้อมูลผู้ประกอบการเบ็ดเสร็จ</h2>
                
                
    </header>  
                
                
                
                <?php

$search = (isset($_REQUEST['search']) ? $_REQUEST['search'] : '');

include('from.php');
if ($search != '') {
    include('show_web.php');
    include('show_list.php');
    
    echo '<h4 align="left"> สถานประกอบการ </h4>';
}


?>
   
</body>
</html>