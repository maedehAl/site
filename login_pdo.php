<?php
require 'menu.php';
require 'connection_pdo.php';
if(isset($_COOKIE["CUser"])){
    header("Location: profile_pdo.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود</title>
</head>
<body>
<div class="container mt-5 p-4 " align="center">
    <!--<div class="card m-4" >-->
    <div class="card text-white bg-info mb-3 shadow-lg" style="max-width: 18rem;">
        <div class="card-header">ورود به سایت</div>
        <div class="card-body">
            <form action="login_pdo.php" method="post">
                <p class="text-danger h4 mb-4">
                    <?php
                    if(isset($_POST['btnLogin'])) {
                        $email = $_POST['InputEmail1'];
                        if (empty($email)) {
                            alert("لطفا ایمیل خود را وارد کنید.");
                        } elseif (empty($_POST['InputPassword1'])) {
                            alert("لطفا رمز عبور خود را وارد کنید.");
                        } else {
                            $check = $conn->prepare("SELECT id FROM register WHERE (email=:email || password=:password)");
                            $check->bindParam(':email', $email);
                            $pass = hash('sha256', $password);
                            $check->bindParam(':password', $pass);
                            $check->execute();
                            $userRow = $check->fetch(PDO::FETCH_OBJ);
                            if ($check->rowCount() == 1) {
                            if (empty($_POST['rememberme'])){
                                setcookie("CUser", $email, time() + 86400 , "/");
                                header("Location: profile_pdo.php");
                                exit;
                            }
                            elseif (!empty($_POST['rememberme'])){
                                setcookie("CUser", $email, time() + (86400 * 30), "/");
                                header("Location: profile_pdo.php");
//                                exit;
                            }
                            else{
                                echo "nothing";
                            }
                            }

                        }
                    }
//                    alert if empty
                    function alert($msg)
                    {
                        echo "<script type='text/javascript'>alert('$msg');</script>";
                    }
                    ?>
                </p>
                <div class="form-group">
<!--                    <label for="exampleInputEmail1">ایمیل</label>-->
                    <input type="email" class="form-control text-center" name="InputEmail1" aria-describedby="emailHelp" placeholder=" ایمیل ">
                </div>
                <div class="form-group">
<!--                    <label for="exampleInputPassword1">رمز عبور</label>-->
                    <input type="password" class="form-control text-center" name="InputPassword1" placeholder="رمز عبور">
                </div>
                <div class="form-group">

                <input type="checkbox" name="rememberme"> <label>مرا به خاطر بسپار</label>
                </div>

                <button type="submit" class="btn btn-primary" name="btnLogin">ورود</button>
                <small id="dirreg" class="form-text text-muted">کاربر جدید هستید؟<a href="registerForm_pdo.php"> ثبت نام</a> </small>

            </form>
        </div>
    </div>
</div>
</body>
</html>

