<?php session_start();
//include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>楊鎮華教授's web</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/flipTimer.css"/>
    <link rel="stylesheet" href="css/calendar.css"><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div id="img" class="inner">
    <header id="header" class="target">
        <h1>楊鎮華教授</h1>
        <ul>
            <li><a href="">English</a></li>
            <?php
            if ($_SESSION['username'] != null) {
                echo " <li><a href='#data'>你好!  ". $_SESSION['username'] . "</a></li>";
                echo " <div id='data'><a href=''>修改資料</a><a href=''>登出</a></div>";
            } else {
                echo "<li ><a href = 'login.php'> login</a ></li >";
            }
            ?>
        </ul>
        <p id="data">123</p>
    </header>
</div>
<div id="content" class="inner">
    <div id="main">
        <div id="nav">
            <ul>
                <li><a href="index.html">首頁</a></li>
                <li><a href="index.html">簡歷</a></li>
                <li><a href="download.html">學術</a></li>
                <li><a href="about.html">著作</a></li>
                <li><a href="contant.html">學生</a></li>
                <li><a href="contant.html">常用連結</a></li>
            </ul>
        </div>
        <div id="intro">
            <div class="row">
                <div class="col-sm-8">
                    <h2 align="center"><strong>楊鎮華</strong><span style="font-size:0.7em;">教授</span></h2>
                    <p style="font-size:1.5em" align="center">亞洲大學講座教授兼副校長</p>
                    <p style="font-size:1.5em" align="center">國立中央大學資訊工程系特聘教授</p>
                </div>
                <div class="col-sm-4">
                    <img src="img/photo.jpg"
                         style="border:3px rgb(32,112,101) dotted; float:right;margin:30px 30px 0 0">
                </div>
            </div>
            <div class="headingbg">
                <p class="heading">聯絡方式</p>
                <dl id="contact">
                    <dt>電話:</dt>
                    <dd>(04) 23323456 ext.1075 (高婉育助理)</dd>
                    <dt>傳真:</dt>
                    <dd>(04) 23316699</dd>
                    <dt>電子郵件:</dt>
                    <dd>jhyang@asia.edu.tw</dd>
                </dl>
            </div>
        </div>

    </div>
    <div id="side">
        <div id="time">
            <ul id="timet">
                <li align="center">行事曆&時間</li>
            </ul>
            <div id="date">
                <div id="calendar" class="calendar"></div>
            </div>
            <div class="flipTimer">
                <div class="hours"></div>
                <div class="minutes"></div>
                <div class="seconds"></div>
            </div>
        </div>
    </div>
</div>
<footer id="footer" class="inner">
    <p>123</p>
    <p id="copyright">
        <small>Copyright © 亞洲大學 Asia University, Taiwan.　本網站所有內容未經許可授權，禁止以任何方式發表使用</small>
    </p>
</footer>


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
</body>
</html>
