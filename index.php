<?php session_start(); ?>
<?php
header('Content-Type: text/html; charset=utf8');
include("mysql_connect.inc.php");
include("css/style.php");
if (isset($_SESSION['username'])) {
    $sql = "SELECT * FROM user where id = '$_SESSION[username]'";
    $result = $link->query($sql);
    $row = $result->fetch_row();
}
$sql1 = "SELECT * FROM teachername where id= '1'";
$result1 = $link->query($sql1);
$row1 = $result1->fetch_row();
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

        var count = 0;

        function add() {
            count = count + 1;
            if (count % 2 == 1) {
                var elem = document.getElementById("hi");
                var position = getPosition(elem);
                document.getElementById("logoutbtn").style.display = "block";
                var a = (960 - position.x) / 960 * 100;
                document.getElementById("logoutbtn").style.right = a + 30 + "px";
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
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <!--    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

</head>

<body >
<!--style="background-color: #618cb3"-->
<div id="img" class="inner">
    <header id="header">
        <h1><span>Life is real, </span><span>life is earnest.</span></h1>
        <!--        <h1 style="background-color: black"></h1>-->
        <ul id="setbar">
            <li class="english"><a href="PDF/test.php">PDF</a></li>
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
                    <?php bar(1); ?>
                </ul>
            </div>
        </div>

        <div id="navopen" class="collapse">
            <div id="nav">
                <ul>
                    <?php bar(1); ?>
                </ul>
            </div>
        </div>

        <div id="intro">
            <div class="row">
                <div align="center">
                    <img src="img/photo.jpg"
                         style="border:3px rgb(32,112,101) dotted;margin:30px auto">
                </div>
                <h2 align="center"><span
                            style="font-size:1.5em"><strong><?php echo $row1[1] ?> </strong></span><span
                            style="font-size:1em;">教授</span></h2>
                <p align="center">亞洲大學講座教授兼副校長</p>
                <p align="center">國立中央大學資訊工程系特聘教授</p>
                <p align="center">研究專長</p>
                <p align="center">人工智慧、大數據、學習分析、教育雲、磨課師</p>

                <!--                <div class="col-sm-4">-->

                <!--                </div>-->
            </div>
            <div class="headingbg">
                <p class="heading" style="color: rgba(0, 110, 0, 0.9);">聯絡方式</p>
                <dl id="contact">
                    <dt>電話:</dt>
                    <dd>(04) 23323456 ext.1075 (高婉育助理)</dd>
                    <dt>傳真:</dt>
                    <dd><?php echo $row1[2] ?></dd>
                    <dt>電子郵件:</dt>
                    <dd><?php echo $row1[3] ?></dd>
                </dl>
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

