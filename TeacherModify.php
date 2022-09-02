<?php session_start() ?>
<?php include("mysql_connect.inc.php");
include("css/style.php");
if (isset($_SESSION['username'])) {
    $sql = "SELECT * FROM teachername";
    $result = $link->query($sql);
    $sql3 = "SELECT * FROM about";
    $result3 = $link->query($sql3);
    $num = $result3->num_rows;
    for ($i = 0; $i < $num; $i++) {
        $row3 = $result3->fetch_row();
        for ($j = 0; $j < 3; $j++) {
            $a[$i][$j] = $row3[$j];
        }
    }

    $sql2 = "SELECT * FROM resume";
    $result2 = $link->query($sql2);


    $sql4 = "SELECT * FROM Academic";
    $result4 = $link->query($sql4);
    ?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            position: relative;
            /*background-color: rgb(34, 8, 41);*/
        }

        ul.nav-pills {
            top: 20px;
            position: fixed;
        }

        div.col-sm-10 div {
            height: 250px;
            font-size: 1em;
            background-color: rgb(97, 140, 179);
        }

        #section1, #section2, #section3, #section4 {
            margin-right: -20px;
            margin-top: 20px;
            padding: 10px;
            color: #1f0826;
            background-color: rgba(105, 176, 255, 0.43);
            min-height: 500px;
            height: auto;
        }

        h1 {
            text-align: center;

        }

        table {
            border: rgb(92, 134, 138) 3px solid;
            width: 100%;
            margin-top: 50px;
            background: url(img/light.png) repeat;
            /*margin-bottom:20px;*/
        }

        .container {
            width: 95%;
        }

        table th {
            font-size: 1.7em;
            text-align: center;
        }

        table tbody tr:hover {
            background-color: rgba(31, 8, 38, 0.2);
        }

        table tr td {
            font-size: 1.5em;
            padding: 10px;
        }

        table thead {
            background-color: rgba(113, 165, 175, 0.55);
            border-bottom: rgb(92, 134, 138) 3px solid
        }

        table th:first-child, .first {
            width: 50px;
        }

        table td input {
            text-align: center;
        }

        .first {
            background-color: rgba(31, 8, 38, 0);
            border: 0;
        }

        #section2 {
            /*color: #fff;*/
            background-color: #b7836e;
        }

        #section3 {
            /*color: #fff;*/
            background-color: rgba(255, 152, 0, 0.56);
        }

        #section4 {
            background-color: rgba(86, 159, 138, 0.78);
        }

        .input:disabled {
            background-color: rgba(105, 176, 255, 0);
            border: 0px;
        }

        .input:enabled {
            background-color: rgba(105, 176, 255, 0.67);
            border: 0px;
        }

        .input:focus {
            background-color: rgba(105, 176, 255, 0.67);
        }

        .barbutton {
            backface-visibility: hidden;
            position: relative;
            cursor: pointer;
            display: inline-block;
            white-space: nowrap;
            background: #6e555a;
            border-radius: 6px;
            border: 0px solid #444;
            border-width: 0px 0px 0px 0px;
            padding: 10px 20px 10px 20px;
            color: #fff;
            font-size: 16px;
            font-family: Helvetica Neue;
            font-weight: 900;
            font-style: normal
        }

        .barbutton > div {
            color: #999;
            font-size: 10px;
            font-family: Helvetica Neue;
            font-weight: initial;
            font-style: normal;
            text-align: center;
            margin: 0px 0px 0px 0px
        }

        .barbutton > i {
            font-size: 1em;
            border-radius: 6px;
            border: 1px dashed #fff;
            border-width: 1px 1px 1px 1px;
            padding: 0px 0px 0px 0px;
            margin: 0px 0px 0px 0px;
            position: absolute;
            top: 2px;
            left: 2px;
            bottom: 2px;
            right: 2px
        }

        .barbutton > .ld {
            font-size: initial

        }

        .button {
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            padding: 12px 21px;
            border: 3px solid #a1a1a1;
            border-radius: 17px;
            background: #354b3f;
            background: -webkit-gradient(linear, left top, left bottom, from(#354b3f), to(#131b17));
            background: -moz-linear-gradient(top, #354b3f, #131b17);
            background: linear-gradient(to bottom, #354b3f, #131b17);
            text-shadow: #6b6b6b 0px 0px 0px;
            font: normal normal bold 20px times new roman;
            color: #ffffff;
            text-decoration: none;
        }

        .button {
            backface-visibility: hidden;
            position: relative;
            cursor: pointer;
            display: inline-block;
            white-space: nowrap;
            background: linear-gradient(110deg, #eee 0%, #e3e3e3 10%, #fff 20.1%, #fff 25%, #f0f0f0 26%, #fff 28.000000000000004%, #ddd 55.00000000000001%, #eee 100%);
            border-radius: 100px;
            border: 1px solid #999;
            border-width: 1px 1px 1px 1px;
            padding: 5px 20px 7px 20px;
            box-shadow: 0px 2px 2px rgba(0%, 0%, 0%, 0.5), 0px 0px 5px rgba(0%, 0%, 0%, 0.25), 0px 0px 2px 4px rgba(0%, 0%, 0%, 0.1);
            color: #444;
            font-size: 16px;
            font-family: Helvetica Neue;
            font-weight: 900;
            font-style: normal;
            text-shadow: 0px 2px 1px rgba(0%, 0%, 0%, 0.3)
        }

        .button > div {
            color: #999;
            font-size: 10px;
            font-family: Helvetica Neue;
            font-weight: initial;
            font-style: normal;
            text-align: center;
            margin: 0px 0px 0px 0px
        }

        .button > i {
            font-size: 1em;
            border-radius: 0px;
            border: 0px solid transparent;
            border-width: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            margin: 0px 0px 0px 0px;
            position: static
        }

        .button > .ld {
            font-size: initial
        }

        @media screen and (max-width: 810px) {
            #section1, #section2, #section3, #section4, #section5, #section6 #section41, #section42 {
                margin-left: 150px;
            }
        }

        .yes {
            display: none;
        }

        .yes input {
            background-color: #1a1a1a;
            margin: 10px;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
<div class="container">
    <div class="row">
        <nav class="col-sm-2" id="myScrollspy">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#section1">首頁</a></li>
                <li><a href="#section2">簡歷</a></li>
                <li><a href="#section3">學術</a></li>
                <li><a href="#section4">著作</a></li>
                <!--                <li><a href="#section5">學生</a></li>-->
                <!--                <li><a href="#section6">常用連結</a></li>-->
            </ul>
        </nav>
        <div class="col-sm-10">
            <div id="section1">
                <h1>首頁</h1>
                <div class="btn-group btn-group-lg" role="group"
                     style="height: 20px; background-color: rgba(179,48,97,0);margin-left: 80px;"
                     aria-label="Basic example">
                    <!--                    <button type="button" class="barbutton btn-secondary" id="delBtn">刪除</button>-->
                    <button type="button" class="barbutton btn-secondary" id="disBtn">修改</button>
                </div>
                <table align="center">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>老師名字</th>
                        <th>電話</th>
                        <th>e-mail</th>
                        <th class="yes">確認</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = $result->fetch_row()) {
                        echo '
                              <tr><form method="post" action="tmodify.php">
                       <td align="center"> <input disabled class="first" value=" ' . $row[0] . '"></td> 
                       <td align="center"> <input type="text" class="input "  name="teachername" disabled  value="' . $row[1] . '"></td>
                        <td align="center"><input type="text" class="input "   name="teacherphone"  disabled value="' . $row[2] . '"></td>
                        <td align="center"><input type="text" class="input "  name="teachermail"disabled  value="' . $row[3] . '"></td>
                       <td class="yes" align="center"> <input type="submit"class="button" value="確認"  /><input type="button" class="button" id="enBtn" value="取消"  /></td>
                        </form></tr>
                        ';
                    } ?>

                    </tbody>
                </table>
                <!--                <p>Try to scroll this section and look at the navigation list while scrolling!</p>-->
            </div>
            <div id="section2">
                <h1>學歷(經歷)</h1>
                <div class="btn-group btn-group-lg" role="group"
                     style="height: 20px; background-color: rgba(179,48,97,0);margin-left: 80px;"
                     aria-label="Basic example">
                    <a type="button" href="newdel/resumeadd.php" class="barbutton btn-secondary">新增</a>
                    <a type="button" href="newdel/resumedel.php" class="barbutton btn-secondary">刪除</a>
                </div>

                <table align="center">
                    <form class="resume" action="tmodify.php" method="post" style="margin-left: 20px;">
                        id: <input type="text" name="resumeid2">
                        inside:<input type="text" name="resumeinside2">
                        <input type="submit" class="barbutton btn-secondary">
                    </form>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>經歷</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row2 = $result2->fetch_row()) {
                        echo '<tr> <td>  ' . $row2[0] . ' </td> ';
                        echo ' <td>  ' . $row2[1] . ' </td> ';
                    } ?>
                    </tbody>
                </table>
            </div>


            <div id="section3">
                <h1>學術</h1>
                <div class="btn-group btn-group-lg" role="group"
                     style="height: 20px; background-color: rgba(179,48,97,0);margin-left: 80px;"
                     aria-label="Basic example">
                    <a type="button" href="newdel/academicadd.php" class="barbutton btn-secondary">新增</a>
                    <a type="button" href="newdel/academicdel.php" class="barbutton btn-secondary">刪除</a>
                </div>

                <table align="center">
                    <form class="resume" action="tmodify.php" method="post" style="margin-left: 20px;">
                        id: <input type="text" name="awardid2">
                        inside:<input type="text" name="awardinside2">
                        <input type="submit" class="barbutton btn-secondary">
                    </form>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>獲獎</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row4 = $result4->fetch_row()) {
                        echo '<tr> <td>  ' . $row4[0] . ' </td> ';
                        echo ' <td>  ' . $row4[1] . ' </td> ';
                    } ?>
                    </tbody>
                </table>
            </div>
            <div id="section4">
                <h1>著作</h1>
                <div class="btn-group btn-group-lg" role="group"
                     style="height: 20px; background-color: rgba(179,48,97,0);margin-left: 80px;"
                     aria-label="Basic example">
                    <a type="button" href="Add.php" class="barbutton btn-secondary">新增</a>
                    <a type="button" href="Del.php" class="barbutton btn-secondary">刪除</a>
                </div>
                <table align="center">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>年分</th>
                        <th>著作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ($i = 0; $i < $num; $i++) {
                        echo '<tr> <td>  ' . $a[$i][0] . ' </td> ';
                        echo ' <td>  ' . $a[$i][1] . ' </td> ';
                        echo ' <td>  ' . $a[$i][2] . ' </td> ';

                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <!--            <div id="section5">-->
            <!--                <h1>學生</h1>-->
            <!--                <p>Try to scroll this section and look at the navigation list while scrolling!</p>-->
            <!--            </div>-->
            <!--            <div id="section6">-->
            <!--                <h1>常用連結</h1>-->
            <!--                <p>Try to scroll this section and look at the navigation list while scrolling!</p>-->
            <!--            </div>-->
        </div>
    </div>
</div>
<script>
    $(function () {
        // 按下停用鈕
        $('#disBtn').click(function () {

            // 方法 1：
            $('.input').attr('disabled', false);
            $('.yes').css('display', 'block');
            // 方法 2：
            //$('.form_ele').attr('disabled', 'disabled');
        });

        // 按下啟用鈕
        $('#enBtn').click(function () {
            // 方法 1：
            $('.input').attr('disabled', true);
            $('.yes').css('display', 'none');

        });
    });</script>
</body>
    </html><?php
} else {
    echo '<p align="center">您無權限觀看此頁面</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
} ?>