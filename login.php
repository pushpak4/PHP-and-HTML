<! DOCTYPE html>
<html>
<head>
<title>login</title>
<script type="text/javascript">
function validate()
{
	if(document.login.email.value=="")
	{
		alert( "please enter the email");
		document.login.email.focus();
		return false;
		}
	if(document.login.password.value=="")
	{
		alert( "please enter the password");
		document.login.password.focus();
		return false;
		}
	else
	{
		alert("successfully login");
		return (true);
	}
	
}	
</script>
</head>
<body style="background-image: url('image.jpg')">
<h2 style="margin:20px; padding:15px; font-size:24px; padding-right:10px; color:pink">Signin</h2>
<h4 align="left">
<a href="register.php" tite="Register"> Register
</a>
</h4>
<font-family style="font-size:20px; color:red; line-height:20px;">
</font>
<form name="login" action="" method="post" onsubmit="return validate()">
<table style="margin:40px; padding:15px; font-size:2opx; padding-right:40px; color:orange;">
	<tr>
	<td>Email</td>
	<td><input type="text" name="email" value=""></td>
	</tr>
	<tr>
	<td>Password</td>
	<td><input type="password" name="password" value=""></td>
	</tr>
	<tr>
	<td>
	<td colspan="6" align="center">
	<input type="submit" value="login" name="login">
	</td>
	</tr>
</table>
</body>
</html>
</form>
<?php
error_reporting(error_reporting() &~E_NOTICE);
if(!empty($_POST))
{
	print "<pre>";
	print_r($_POST);
}
    session_start();
    $message="";
	if(count($_POST)){
		$con = mysql_connect("localhost","root","");
		mysql_select_db("register",$con);
		$result = mysql_query("SELECT * FROM students WHERE email='".$_POST["email"]."' and password ='".$_POST["password"]."'");
		$row = mysql_fetch_array($result);
		if(is_array($row)){
			$_SESSION["email"] = $row[email];
			$_SESSION["password"] = $row[password];
			}else{
				$message = "Invalid email or password";
				}
		}
		if(isset($_SESSION["email"])){
			header("Location:studentlist.php");
		exit;	
		}
			?>
