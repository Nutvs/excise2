<meta charset="UTF-8">
<link rel="stylesheet" href="Custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<br><br><br><br><br>
 
 
 
 
                <form  action="member.php"  method="post"align="center"  autocomplete="off">
                    รหัสบัตรประชาชน 
                    <input type="text" name="search" />
                    <input  type="submit" value="ตรวจสอบ" class="btn btn-primary btn-lg" /> 
                    <br>
                    
                </form>

                <div class="containner">
            <div class="row">
                <div class="col-xl-1">
                    <form action="page_license.php" method="post">
                        <input type="hidden" name="btn1" value='<?=$_POST['search'];?>' />
                        <input  type="submit" value="ใบอนุญาต" class="btn btn-warning btn-lg" />
                
                    </form>
                </div>    

                &nbsp; &nbsp;

                <div class="col-xl-2">
                <form action="page_Reg.php" method="post">
                    <input type="hidden" name="btn2" value='<?=$_POST['search'];?>' />
                    <input  type="submit" value="ทะเบียน" class="btn btn-success btn-lg" />
                
                </form>
                </div>    
            </div>        
        </div>