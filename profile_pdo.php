<?php
require_once 'connection_pdo.php';

if(!isset($_COOKIE["CUser"])){
    header("Location: registerForm_pdo.php");

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require 'menu.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-9 ">
            <div class="card">
                <div class="card-header" ><h3 class="text-right mt-2 text-info">رقبای جدید</h3></div>

                <div class="card-body">
                    <?php
                    require 'read.php';
                    ?>
                </div>
            </div>

        </div>
<!--    <div class="row">-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header text-center">
                    <i class="fas fa-user fa-5x" style="color: hotpink"></i>
                    <p>خوش آمدید</p>
<!--                    <h4>--><?php //echo $fname . " " . $lname;?><!--</h4>-->

<br>
                    <a href="#"><button class="btn btn-sm btn-outline-danger">تغییر رمز عبور</button></a>
<br>
                    <br>
                    <a href="user_logout.php"><button class="btn btn-sm btn-outline-danger">خروج از حساب کاربری</button></a>
                </div>
                <div class="card-body">
                    <a href="comment.php" id="comments" class="btn btn-outline-info btn-block"> مشاهده نظرات</a>
                </div>


            </div>

<!--        </div>-->



    </div>



</div>

</body>
</html>