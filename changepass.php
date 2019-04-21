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
<div class="col-lg-6">
    <div class="changepass text-center" onclick="changepass()">
        <p class="text-danger text-center h2">
            <?php
            if(isset($_POST['changepass'])){
                if(md5($_POST['cpass']) != $row['user_password']){
                    echo "رمز عبور فعلی اشتباه وارد شد";
                }else if($_POST['newpass']!= $_POST['newpassre']){
                    echo "رمز عبور جدید با تکرار آن تطابق ندارد";
                }else if(empty($_POST['cpass']) || empty($_POST['newpass'])){
                    echo "رمز عبور نمی تواند خالی باشد";
                }else{
                    $newpass=md5($_POST['newpass']);
                    $changepass = mysqli_query($db, "UPDATE users SET user_password='$newpass' WHERE user_email='$_COOKIE[remember]'");
                    echo "رمز عبور شما با موفقیت تغییر کرد.";
                }
            }
            ?>
        </p>
        <button id="changepassgo" class="btn btn-warning">می خواهم رمز ورودم را تغییر
            دهم</button>
        <div class="changepassform">
            <form action="profile.php" method="post">

                <label>رمز عبور فعلی:</label>
                <input type="password" name="cpass" class="form-control"
                       placeholder="رمز عبور فعلی"><br>
                <label>رمز عبور جدید:</label>
                <input type="password" name="newpass" class="form-control"
                       placeholder="رمز عبور جدید"><br>
                <label>تکرار رمز عبور جدید:</label>
                <input type="password" name="newpassre" class="form-control"
                       placeholder="تکرار رمز عبور جدید"><br>
                <input type="submit" name="changepass" class="btn btn-dark"
                       value="تغییر رمز عبور">
            </form>
        </div>
    </div>
</div>
</body>
<script>
// $(".changepassform").hide();

function changepass() {
$("#changepassgo").fadeOut();
$(".changepassform").fadeIn();
}
</script>
</html>