<!doctype html>
<html lang="en">
<head>
    <?php
    require 'connection_pdo.php';
    require 'links.php';
    require 'menu.php';

    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-1">

            <div class=" text-right shadow-lg  " dir="rtl">
                <?php
                $read =$conn->prepare("SELECT name,view FROM userview");
                $read->execute();
                $res=$read->fetchAll();
                echo '<table class="table table-bordered table-striped comment-show">';
                echo'<tr class="bg-info">';
                echo'<th>نام</th>';
                echo'<th>دیدگاه</th>';
                echo '</tr>';
                foreach ($res as $view){
//                                    echo '<div class="row" style="color: #0b2e13">';
//                                   echo '<div class="col-lg-12">';
//                                    echo '<div class="comment-show">';
//                                   echo '<p dir="rtl" class="h6">';
//                                    echo$view['name'];
//                                     echo '</p>';
//                                   echo '<p>';
//                                echo $view['view'];
//                                echo '</p>';
//                                echo '</div>';
//                                   echo '</div>';
//                                    echo '</div>';
                    echo '<tr class="bg-light">';
                    echo '<td class="">'.$view['name'].'</td>';

                    echo '<td>'.$view['view'].'</td>';
                    echo '</tr>';
}
                echo '</table>';
                ?>
                                                </div>

                                            </div>
                                        </div>
</div>


</body>
</html>
