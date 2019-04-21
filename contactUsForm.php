<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    require 'connection_pdo.php';
    ?>
    <title>contact us</title>
</head>
<body>
<?php
require 'links.php';

include 'menu.php';
?>
<div  class="container mt-5">
    <div class="card">
        <h5 class="card-header text-right">ارسال نظرات</h5>
        <div class="card-body">
    <form action="contactUsForm.php" method="post">
        <div class="container">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control text-right my-4" placeholder="نام و نام خانوادگی" name="inpName">
                <input type="email" class="form-control text-right my-4" id="exampleFormControlInput1" placeholder="ایمیل" name="inpEmail">
<!--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control text-right my-4" id="exampleFormControlTextarea1" rows="3" name="txtView" placeholder="متن پیام"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="direction: rtl" name="submit">ارسال</button>
    </form>
</div>
    </div>
</div>

<?php
if (isset($_POST['submit'])){
    $stmt=$conn->prepare("INSERT INTO userview (name,email,view)  VALUES (:name,:email,:view)");
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':view',$view);


    $name=$_REQUEST['inpName'];
    $email=$_REQUEST['inpEmail'];;
    $view=$_REQUEST['txtView'];;
    $stmt->execute();

    $conn=null;

//header("location: contactUsForm.php?submitV=40");
    echo '<div class="alert alert-danger"><strong>پیام شما ثبت شد.</strong> </div>';
}

?>


</body>
</html>