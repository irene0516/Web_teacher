<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Admin</title>
    <style>
        body, html{
            height: 100%;
            background-repeat: no-repeat;
            background-color: #d3d3d3;
            font-family: 'Oxygen', sans-serif;
        }

        .main{
            margin-top:20px;
        }

        h1.title {
            font-size: 50px;
            font-family: 'Passion One', cursive;
            font-weight: 400;
        }

        hr{
            width: 10%;
            color: #fff;
        }

        .form-group{
            margin-bottom: 15px;
        }

        label{
            margin-bottom: 15px;
        }

        input,
        input::-webkit-input-placeholder {
            font-size: 11px;
            padding-top: 3px;
        }

        .main-login{
            background-color: #fff;
            /* shadows and rounded borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

        }

        .main-center{
            margin-top: 30px;
            margin: 0 auto;
            max-width: 330px;
            padding: 40px 40px;

        }

        .login-button{
            margin-top: 5px;
        }

        .login-register{
            font-size: 11px;
            text-align: center;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Register</h1>
                <hr />
            </div>
        </div>
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="#">
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Year</label>
                    <div class="cols-sm-10">
                        <div class="input-group">

                            <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Year"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Book</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter Book"/>
                        </div>
                    </div>
                </div>

<!--                <div class="form-group">-->
<!--                    <label for="username" class="cols-sm-2 control-label">Phone</label>-->
<!--                    <div class="cols-sm-10">-->
<!--                        <div class="input-group">-->
<!--                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>-->
<!--                            <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="password" class="cols-sm-2 control-label">Password</label>-->
<!--                    <div class="cols-sm-10">-->
<!--                        <div class="input-group">-->
<!--                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>-->
<!--                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
                <div class="form-group ">
                    <button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                </div>
<!--                <div class="login-register">-->
<!--                    <a href="index.php">Login</a>-->
<!--                </div>-->
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>