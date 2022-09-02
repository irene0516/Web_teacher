<?php //session_start() ?>
<?php include("mysql_connect.inc.php");
$id = $_POST['id'];
$name = $_POST['teachername'];
$phone = $_POST['teacherphone'];
$email = $_POST['teachermail'];

$year = $_POST['year'];
$book = $_POST['book'];

$bookid = $_POST['bookid'];


$inside = $_POST['resumeinside'];
$resumeid = $_POST['resumeid'];
$resumeid2 = $_POST['resumeid2'];
$inside2 = $_POST['resumeinside2'];



$awardsid=$_POST['awardsid'];
$award=$_POST['award'];
$awardid2=$_POST['awardid2'];
$awardinside2=$_POST['awardinside2'];
//echo $tphone;

//$sql = "SELECT * FROM teachername WHERE `id`='1'";
//echo $sql.'"<br>"';

if ($name != null) {
    $sql1 = "UPDATE teachername SET `name` = '$name',`email`='$email',`phone`='$phone' WHERE`teachername`.`id` = '1'";
    $result = $link->query($sql1);
    if ($result) {
        echo '<p align="center">修改成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
} else if ($year != null) {
    $sql2 = "INSERT INTO about (`year`,`inside`) VALUES ('$year','$book')";
    $result2 = $link->query($sql2);
    echo $sql2;
    echo $year;
    echo $book;
    if ($result2) {
        echo '<p align="center">新增成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }

} else if ($bookid != null) {
    $sql3 = "DELETE FROM about WHERE `about`.`id`='$bookid'";
    $result3 = $link->query($sql3);
    if ($result3) {
        echo '<p align="center">刪除成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }

} else if ($inside != null) {
    $sql4 = "INSERT INTO resume (`inside`) VALUES ('$inside')";
    $result4 = $link->query($sql4);
    if ($result4) {
        echo '<p align="center">新增成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
} else if ($resumeid != null) {
    $sql5 = "DELETE FROM resume WHERE `resume`.`id`='$resumeid'";
    $result5 = $link->query($sql5);
    if ($result5) {
        echo '<p align="center">刪除成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }

} else if ($resumeid2 != null) {

    $sql6 = "UPDATE resume SET `inside` ='$inside2' WHERE`resume`.`id` = '$resumeid2'";
    $result6 = $link->query($sql6);
    if ($result6) {
        echo '<p align="center">修改成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
}else if ($award != null) {
    $sql7 = "INSERT INTO Academic (`inside`) VALUES ('$award')";
    $result7 = $link->query($sql7);
    echo $sql7;
    if ($result7) {
        echo '<p align="center">新增成功</p>';
        //echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
}else if ($awardsid != null) {
    $sql8 = "DELETE FROM Academic WHERE `Academic`.`id`='$awardsid'";
    $result8 = $link->query($sql8);
    if ($result8) {
        echo '<p align="center">刪除成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }

} else if ($awardid2 != null) {
    $sql9 = "UPDATE Academic SET `inside` ='$awardinside2' WHERE`Academic`.`id` = '$awardid2'";
    $result9 = $link->query($sql9);
    if ($result9) {
        echo '<p align="center">修改成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
}
?>