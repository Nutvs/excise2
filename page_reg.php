<meta charset="UTF-8">
<link rel="stylesheet" href="Custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<title>ตรวจสอบทะเบียน</title>

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
        <a class="nav-link" href=""><span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
    </navbar>
<header>
                <h2 class="head4" align="center">สำนักงานสรรพสามิตพื้นที่ ชลบุรี 2</h2>
                <h2 class="head4" align="center">A comprehensive database of entrepreneurs</h2>
                <h2 class="head4" align="center">ฐานข้อมูลผู้ประกอบการเบ็ดเสร็จ</h2>
                
    
</header>
            <div class="Container-fluid">
                

                   
                    <br><br><br>
                                <h2 class="head3" align="center">ตรวจสอบทะเบียนสรรพสามิต</h2>
                            

                                <?php
                                    $btn2 = (isset($_POST['btn2']) ? $_POST['btn2'] : '');
                                    if($btn2 != ''){
                                        include ('show_Reg.php');
                                    }
                   
                                ?>


                    </div>
                </div>
            </div>


            <form action="addReg.php" method="post">
            <input  type="submit" value="เพิ่มข้อมูล" class="btn btn-danger" />
            </form>
</body>
