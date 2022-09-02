<?php session_start();
header("Content-type:
 text/html;charset=utf-8"); ?>
<?php
header('Content-Type: text/html; charset=utf8');
include("mysql_connect.inc.php");
include("css/style.php");
if (isset($_SESSION['username'])) {
    $sql = "SELECT * FROM user where id = '$_SESSION[username]'";
    $result = $link->query($sql);
    $row = $result->fetch_row();
}
$sql1 = "SELECT * FROM Academic";
$result1 = $link->query($sql1);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function getPosition(element) {
            // 搭配上面的示意圖可比較輕鬆理解為何要這麼計算
            var x = 0;
            var y = 0;
            while (element) {
                x += (element.offsetLeft - element.scrollLeft + element.clientLeft);
                y += (element.offsetTop - element.scrollTop + element.clientTop);
                element = element.offsetParent;
            }
            return {x: x, y: y};
        }

        $(document).ready(function () {
            $(window).resize({
                var x = 0;
            var y = 0;
            while (element) {
                x += (element.offsetLeft - element.scrollLeft + element.clientLeft);
                y += (element.offsetTop - element.scrollTop + element.clientTop);
                element = element.offsetParent;
            }
            return {x: x, y: y};
            var a = (1920 - position.x) / 1920 * 100;
            document.getElementById("logoutbtn").style.right = a + "px";
        })
            ;
        });
        var count = 0;

        function add() {
            count = count + 1;
            if (count % 2 == 1) {
                var elem = document.getElementById("hi");
                var position = getPosition(elem);
                document.getElementById("logoutbtn").style.display = "block";
                var a = (1920 - position.x) / 1920 * 100;
                document.getElementById("logoutbtn").style.right = a + "px";
            } else if (count % 2 == 0) {
                document.getElementById("logoutbtn").style.display = "none";
            }
        }
    </script>
    <meta charset="UTF-8">
    <title>楊鎮華教授\'s web</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menustyle.css">
    <link rel="stylesheet" href="css/flipTimer.css"/>
    <link rel="stylesheet" href="css/calendar.css"><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
</head>

<body>

<div id="img" class="inner">
    <header id="header">
        <h1><span>Life is real, </span><span>life is earnest.</span></h1>
        <!--        <h1 style="background-color: black"></h1>-->
        <ul id="setbar">
<!--            <li class="english"><a href="mail/sendmail.php">寄信</a></li>-->
            <!--                              <div class="loginlist" style="background-color: #1E88E5;position: relative;"></div>-->
            <?php
            if (isset($_SESSION['username'])) {
                echo '<li class="english"><a href="TeacherModify.php">控制台</a></li>
                       <div class="dropdown loginlist">
                       <li><a  href="#" class="login"data-toggle="dropdown">Hi !   ' . $row[1] . '</a >
                                    <ul class="dropdown-menu logoutbtn">
                                        <li><a  href="member.php">修改我的資料</a></li>
                                        <li><a href="logout.php">登出</a></li>
                                     </ul>
                         </li>
                         </div>
                    <script>var elem = document.getElementById("hi");
                    var position = getPosition(elem);
                      </script>
                ';
            } else {
                echo '<li ><a  class="login"href="login.php">login</a></li>';
            }
            ?>
        </ul>
        <div id="threebtn" style="position: absolute;left:20px;bottom:32px;">
            <div class="btn" class="btn btn-primary" data-toggle="collapse"
                 data-target="#navopen" data-target="#ulback">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
            </div>
        </div>
    </header>
</div>
<!--<ul id="logoutbtn" class="dropdown-menu" aria-labelledby="hi">-->
<!--    <li><a class="dropdown-item" href="indexnew.php">新增使用者</a></li>-->
<!--    <li><a class="dropdown-item" href="indexdelete.php">刪除使用者</a></li>-->
<!--    <li><a class="dropdown-item" href="member.php">修改我的資料</a></li>-->
<!--    <li><a class="dropdown-item" href="logout.php">登出</a>-->
<!--</ul>-->

</div>

<div id="content" class="inner">
    <div id="main">
        <div id="back">
            <div id="ulback">
                <?php ulback(); ?>
            </div>
            <div id="nav2">
                <ul>
                    <?php bar(3); ?>
                </ul>
            </div>
        </div>

        <div id="navopen" class="collapse">
            <div id="nav">
                <ul>
                    <?php bar(3); ?>
                </ul>
            </div>
        </div>
        <div id="intro">
            <h2>獲獎</h2>
            <?php while($row1 = $result1->fetch_row()){
                echo '<p style="font-size:1.7em">'.$row1[1].'</p>';
            }?>

            <h2>研究計畫 (科技部、教育部)</h2>
            <div id="admtable">
                <table>
                    <thead>
                    <tr>
                        <th>計畫名稱</th>
                        <th>補助單位及編號</th>
                        <th>擔任工作</th>
                        <th style="width:95px">補助金額</th>
                        <th>起訖日期</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>應用巨量資料於改善MOOCs學習分析之實證研究：以大學微積分為例</td>
                        <td>科技部 MOST 106-2511-S-008-004-MY3</td>
                        <td>主持人</td>
                        <td>4,489,000</td>
                        <td>2017/08/01至2020/07/31</td>
                    </tr>
                    <tr>
                        <td>應用巨量資料技術探討MOOCs學習者之課程影片關聯性分析與適性化教材推薦</td>
                        <td>科技部 MOST 105-2511-S-008-003-MY3</td>
                        <td>主持人</td>
                        <td>4,286,000</td>
                        <td>2016/08/01至2019/07/31</td>
                    </tr>
                    <tr>
                        <td>教育部專案辦公室計畫 ｢4G行動寬頻暨教育雲創新應用推動辦公室」第二期</td>
                        <td>教育部</td>
                        <td>主持人</td>
                        <td>7,000,000</td>
                        <td>2016/05/01至2017/12/31</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div id="side">
        <div id="date">
            <p>行事曆</p>
            <div id="calendar" class="calendar"></div>
        </div>
        <div id="time">
            <p>現在時間</p>
            <div class="flipTimer" align="center">
                <div class="hours"></div>
                <div class="minutes"></div>
                <div class="seconds"></div>
            </div>
        </div>
    </div>
</div>
<footer id="footer" class="inner">
    <p id="copyright" style="margin-top:20px; ">
        <small>Copyright © 亞洲大學 Asia University, Taiwan.　本網站所有內容未經許可授權，禁止以任何方式發表使用</small>
    </p>
</footer>


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="js/jquery.flipTimer.js"></script>
<!--<script src="js/jquery.min.js"></script>-->
<script src="js/calendar.js"></script>
<script>
    $(document).ready(function () {
        //Callback works only with direction = "down"
        $('.flipTimer').flipTimer({direction: 'up'});
    });
</script>
<script>
    document.getElementsByClassName("btn")[0].onclick = function () {
        this.classList.toggle("on");
    }
</script>


</body>
</html>


<?php
//            if ($_SESSION[\'username\'] != null) {
//                echo \'<li ><a href=""class="enter">你好!  " . $id. "</a></li>\';
//            } else {
//                echo '<li ><a href = "login.php"> login</a ></li >';
//            }
//
?>
<!--<li><a href="" class="enter">你好!'.$_SESSION[username].'</a ></li >-->

