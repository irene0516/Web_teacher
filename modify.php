<?php session_start();?>
<?php
include("mysql_connect.inc.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$username = $_POST['username'];
$userpw = sha1($_POST['userpw']);
$useremail = $_POST['useremail'];
$userphone = $_POST['userphone'];

$newun = $_POST['nname'];
$npw = sha1($_POST['npw']);
$nemail = $_POST['nemail'];
$nphone = $_POST['nphone'];

$dename=$_POST['dename'];

if ($username != null) {
    $sql = "UPDATE user SET `name` = '$username', `password`='$userpw',`email`='$useremail',`phone`='$userphone' WHERE`user`.`id` = '$_SESSION[username]'";
    $result = $link->query($sql);
    if ($result) {
        echo '<p align="center">修改成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
}else if ($name != null) {
    $sql1 = "UPDATE teachername SET `email` = '$email', `name`='$name',`phone`='$phone' WHERE `teachername`.id = '1'";
    $result1 = $link->query($sql1);
    if ($result1) {
        echo '<p align="center">修改成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
}else if ($newun != null) {
    $sql2 = "INSERT INTO user (`id`, `name`, `password`, `email`, `phone`) VALUES ('$newun','$newun', '$npw','$nemail','$nphone')";
    $result2 = $link->query($sql2);
    if ($result2) {
        echo '<p align="center">新增成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
}else if($dename!=null){
    $sql3="DELETE FROM user WHERE `user`.`id`='$dename'";
    $result3=$link->query($sql3);
    if($result3){
        echo $result2;
        echo '<p align="center">刪除成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
    }
}
?>

