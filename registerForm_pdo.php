<?php
require 'connection_pdo.php';
require 'menu.php';

//check user register before
if (isset($_COOKIE["CUser"])){
    header("location: profile_pdo.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ثبت نام</title>
</head>
<body >
    <div class="container mt-5 p-4" align="center">
        <!--<div class="card m-4" >-->
            <div class="card text-white bg-info mb-3 shadow-lg" style="max-width: 18rem;">
                <div class="card-header">فرم ثبت نام</div>
                <div class="card-body">
            <form action="registerForm_pdo.php" method="post">
                <p class="text-danger h4 mb-4">
                <?php
                if (isset($_POST['btnRegister'])){
                    $email=trim($_POST['InputEmail1']);
                    $name=trim($_POST['InputName']);
//                    $password=$_POST['InputPassword1'];
                    $repassword=$_POST['reInputPassword1'];

                    if(empty($email)){
//                        echo "لطفا ایمیل خود را وارد کنید";
                        echo '<div class="alert alert-danger"><strong>لطفا ایمیل خود را وارد کنید</strong> </div>';
                    }
                    else if(empty($name)){
                        echo'<div class="alert alert-danger"><strong>نام کاربری نمی‌تواند خالی باشد.</strong> </div>';
                    }
                    else if($_POST['InputPassword1']=='' || $repassword==''){
                        echo'<div class="alert alert-danger"><strong>رمز عبور نمیتواند خالی باشد</strong> </div>';
                    }
                    else if ($_POST['InputPassword1']!=$repassword){

                        echo '<div class="alert alert-danger"><strong>رمز عبور با تکرار آن مطابقت ندارد</strong> </div>';
                    }
                    else{
//                        check user already exist

                        $stmt=$conn->prepare("SELECT id FROM register WHERE email= :email" );
//                        $stmt->execute(':email',$email);
                        $stmt->bindParam(':email',$email);
                        $stmt->execute();
                         $row=$stmt->fetch();
                        if ($stmt->rowCount()==1){
                            alert("شما قبلا ثبت نام کردید") ;
//                            echo "شما قبلا با این ایمیل ثبت نام کردید!<br>";
                            echo "<div class=\"alert alert-danger\"><strong><a href='login_pdo.php'>ورود به سایت</a></strong> </div>";
//                            exit;
                        }
                        else{
                            $pass = hash('sha256', $password);
                            $addUser=$conn->prepare("INSERT INTO register (email,name,password) VALUES (:email,:name,:password)");
                            $addUser->bindParam(":email",$email);
                            $addUser->bindParam(":name",$name);
                            $addUser->bindParam(":password",$pass);
                            $addUser->execute();
                            setcookie("CUser",$email,time()+86400,"/");
                            header("location: profile_pdo.php");
                        }
                    }
                }
//                function alert($msg)
//                {
//                    echo "<script type='text/javascript'>alert('$msg');</script>";
//                }
                ?>
                </p>
                <div class="form-group ">
<!--                    <label for="exampleInputEmail1">ایمیل</label>-->
                    <input type="email" class="form-control text-center" name="InputEmail1" aria-describedby="emailHelp" placeholder="ایمیل">
<!--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <div class="form-group">
                    <input type="name" class="form-control text-center" name="InputName" aria-describedby="nameHelp" placeholder="نام کاربری">
                </div>
                <div class="form-group">
<!--                    <label for="exampleInputPassword1">رمز عبور</label>-->
                    <input type="password" class="form-control text-center" name="InputPassword1" placeholder="رمز عبور">
                </div>
                <div class="form-group">
<!--                    <label for="exampleInputPassword1">تکرار رمز عبور</label>-->
                    <input type="password" class="form-control text-center" name="reInputPassword1" placeholder="تکرار رمز عبور">
                </div>
                <button type="submit" class="btn btn-primary" name="btnRegister">ثبت نام</button>
                <small id="dirlogin" class="form-text text-muted">قبلا ثبت نام کردید؟<a href="login_pdo.php"> ورود</a> </small>

            </form>
        </div>
            </div>
    </div>





<!--links-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>