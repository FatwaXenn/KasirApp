<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login User</title>
	<link rel="icon" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.login{
	width: 300px;
	overflow: hidden;
	box-shadow: 0 0 10px 0 #333;
	border-radius: 10px;
	text-align: center;
	padding: 20px;
	/*background: white;*/
	margin: 0px auto;
	background: rgba(255,255,255,.8);
}
.login h1{
	color: blue;
	margin: 10px 0;
}
.login input[type="text"], .login input[type="password"]{
	padding: 10px;
	width: 260px;
	border-radius: 5px;
	border: none;
	text-align: center;
	margin: 5px 0;
	outline: none;
}
.login input[type="text"]:focus, .login input[type="password"]:focus{
			box-shadow: 0 0 0 5px rgb(129 140 248 / 30%);
			outline: none;
			border-color: rgba(129,140,248);
}
.login input[type="text"]:hover, .login input[type="password"]:hover{
			box-shadow: 0 0 0 5px rgb(129 140 248 / 30%);
			outline: none;
			border-color: rgba(129,140,248);
}
.login input[type="submit"]{
	padding: 12px;
	width: 285px;
	text-align: center;
	background: blue;
	color: white;
	border: none;
	font-size: 14px;
	margin: 5px 0 20px 0;
	border-radius: 5px;
	cursor: pointer;
}
.login input[type="submit"]:hover{
	background: #006BFF;
}
.login input[type="checkbox"]{
	transform: scale(1.5);
    -ms-transform: scale(1.5);
    -webkit-transform: scale(1.5);
    margin: 10px 5px 5px 0;
}
.window{
	width: 400px;
	overflow: hidden;
	text-align: center;
	position: relative;
	padding: 20px;
	margin: 0 auto;
	top: 50%;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
}
.window small{
	font: 14px "Tahoma";
	color: #fff;
	text-shadow: 0 0 2px #000;
}
.window a{
	font: 16px "Tahoma";
	font-weight: bold;
	color: #006BFF;
	text-decoration: none;
}
.backimg{
	background-image: url('img/login.png');
    background-repeat: no-repeat;
    background-size: cover;
}
	</style>
</head>
<body class="backimg">
<div class="redup"></div>
<div class="window">
<form class="login" method="POST" action="login_proses.php">
	<h1>LOGIN USER</h1>
	<input type="text" name="username" placeholder="User Name" autocomplete="off">
	<input type="password" name="password" placeholder="Password" id="myInput">
	<input type="checkbox" onclick="myFunction()"> <label style="color:#808080;">Show Password</label>
	<input type="submit" name="login" value="LOGIN">
</form>
<br>
<small>Copyright &copy <?= date("Y") ?> By.</small> <a href="">KELOMPOK 2</a>
</div>

</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>