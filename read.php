<?php
require 'connection_pdo.php';
require 'links.php';


//        $read=$conn->prepare("SELECT name FROM register");
$read =$conn->prepare("SELECT id,name FROM register");

$read->execute();
//        $data=array();
//        while ($row=$read->fetch(PDO::FETCH_ASSOC)>0) {
//            echo $row['name'];
//        }
//while ($res=$read->fetchAll()>0){
//    echo $res['name'];
//}
$res=$read->fetchAll();
echo '<table class="table table-bordered table-striped">';
echo'<tr>';
echo'<th>ایدی</th>';
echo'<th>نام</th>';
echo '</tr>';
$num=1;
foreach ($res as $c){
    echo'<tr>';
//    echo '<td>'.$num.'</td>';
    echo '<td>'.$c['id'].'</td>';

    echo '<td>'.$c['name'].'</td>';
    echo '</tr>';
    $num ++;
}
echo '</table>';
?>

<!--$data='<table class="table table-bordered table-striped">-->
<!--    <tr>-->
<!--        <th>ایدی</th>-->
<!--        <th>نام</th>-->
<!--    </tr>';-->
<!---->
<!---->
<!--    $users = $obj->readData();-->
<!--    if(count($users)>0){-->
<!--    $num=1;-->
<!--    foreach ($users as $user){-->
<!--    $data .= '<tr>-->
<!--        <td>' . $num . '</td>-->
<!--        <td>' . $user['name'] . '</td>-->
<!--    <tr>';-->
<!--        $num++;-->
<!--        }-->
<!--        }-->
<!--        $data.='</table>';-->
<!--echo $data;-->
