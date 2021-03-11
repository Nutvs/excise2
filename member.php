<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="Custom.css">

<?php session_start();  
include('condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='member'){
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
  <a class="navbar-brand" href="#"><img src="../img/logoexcise.png" alt="" width="60px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=""><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form action="logout.php" align="right">
	<p>  <?php echo $name; ?> สถานะ <?php echo $level; ?> </p>
	<input type="submit" value="ออกจากระบบ" class="btn btn-danger">
	</form>
  </div>
</nav>
    </navbar>

    <header>
                <br>
                <h2 class="head4" align="center">สำนักงานสรรพสามิตพื้นที่ชลบุรี 2</h2>
                <h2 class="head4" align="center">A comprehensive database of entrepreneurs</h2>
                <h2 class="head4" align="center">ฐานข้อมูลผู้ประกอบการเบ็ดเสร็จ</h2>
                
    </header>
                
                
                <?php
                
                $search = (isset($_REQUEST['search']) ? $_REQUEST['search'] : '');

                include ('from2.php');
                    if($search !=''){
                        include ('show_web.php');
                        include ('show_list.php');   
                        echo '<h4 align="left"> สถานประกอบการ </h4>';
                    }
                

                    ?>
</body>
</html>