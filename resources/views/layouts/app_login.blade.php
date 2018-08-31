<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets-member/css/lib/bootstrap/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  <style>
  .login100-more::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: none;
    /* background: -webkit-linear-gradient(bottom, #e8519e, #c77ff2);
    background: -o-linear-gradient(bottom, #e8519e, #c77ff2);
    background: -moz-linear-gradient(bottom, #e8519e, #c77ff2);
    background: linear-gradient(bottom, #e8519e, #c77ff2); */
    opacity: 0.8;
}

.login100-more {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: calc(85% - 520px);
    position: relative;
    z-index: 1;
}

.wrap-login100 {
    width: 722px;
    min-height: 100vh;
    background: #fff;
    border-radius: 2px;
    position: relative;
}

.login100-form-bgbtn {
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 300%;
    background: #fbd15e;
    background: -webkit-linear-gradient(top, #efb208, #fbd15e, #efb208, #fbd15e);
    background: -o-linear-gradient(top, #e8519e, #c77ff2, #e8519e, #c77ff2);
    background: -moz-linear-gradient(top, #e8519e, #c77ff2, #e8519e, #c77ff2);
    background: linear-gradient(top, #e8519e, #c77ff2, #e8519e, #c77ff2);
    bottom: -100%;
    left: 0;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.sign{
  padding:100px;
}

@media (max-width: 768px) {
  .sign{
    padding:50px;
  }
}
  </style>
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">

	@yield('content')

<!--===============================================================================================-->
	<script src="{{asset('assets-member/js/lib/jquery/jquery.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
