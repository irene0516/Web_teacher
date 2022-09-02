
<?php
header('Content-Type: text/html; charset=utf8');
//header('Content-Type:style.css');
function bar($a){
echo '<li class="bar"';if($a==1){echo 'id="active"';}echo '><a href="index.php">首頁</a></li>';
echo '<li class="bar"';if($a==2){echo 'id="active"';}echo '><a href="resume.php"> 簡歷</a></li>';
echo '<li class="bar"';if($a==3){echo 'id="active"';}echo '><a href="Academic.php" > 學術</a></li>';
echo '<li class="bar"';if($a==4){echo 'id="active"';}echo '><a href="about.php"> 著作</a></li>';
echo '<li class="bar"';if($a==5){echo 'id="active"';}echo '><a href="student.php" > 學生</a></li>';
echo '<li class="barlast"';if($a==6){echo 'id="barlastactive"';}echo '><a href="link.php"> 常用連結</a></li>';
 }


function ulback(){
    echo '<li id="barback"><div ></div></li>
    <li id="barback" ><div ></div></li>
    <li  id="barback"><div></div></li>
    <li id="barback"  ><div ></div></li>
    <li id="barback"  ><div ></div></li>
    <li  id="barback" ><div ></div></li>';
}
?>
