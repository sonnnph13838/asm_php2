<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('default/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('default/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('default/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('default/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('default/plugins/iCheck/square/blue.css')}}">
    <link rel="stylesheet" href="{{ asset('default/dist/css/spx.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <!--[if IE]>
    <style>
        .login-box-body {
            border: 1px solid #ddd;
        }
    </style>
    <![endif]-->
    <style>
        html {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#141e30, #243b55);
        }
        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }
        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        .login-box .user-box {
            position: relative;
        }
        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #6dc234;
            font-size: 12px;
        }
        .login-box form button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #6dc234;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 20px;
            margin-bottom: 20px;
            letter-spacing: 4px;
            border: none;
        }
        .login-box button:hover {
            background: #6dc234;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #6dc234;
            0 0 25px #6dc234;
            0 0 50px #6dc234;
            0 0 100px #6dc234;
        }
        .login-box button span {
            position: absolute;
            display: block;
        }
        .login-box button span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #6dc234;);
            animation: btn-anim1 1s linear infinite;
        }
        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }
            50%, 100% {
                left: 100%;
            }
        }
        .login-box button span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #6dc234;);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }
        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }
            50%, 100% {
                top: 100%;
            }
        }
        .login-box button span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #6dc234;);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }
        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }
            50%, 100% {
                right: 100%;
            }
        }
        .login-box button span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #6dc234;);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }
        a{
            color: #6dc234;
        }
        a:hover{
            color: #6dc234;
        }
        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }
            50%, 100% {
                bottom: 100%;
            }
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <h2>Register</h2>
    <form action="" method="post">
        <div class="user-box">
            <input type="text" name="email" required="">
            <label>Email</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
        </div>
        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
           Register
        </button>
    </form>
</div>
</body>
</html>