<! DOCTYPE html>
<html>
<head>
<title>registration</title>
<script type="text/javascript">
function validate()
{
	if(document.registration.name.value=="")
	{
		alert( "please enter the name");
		document.registration.name.focus();
		return false;
		}
	if(document.registration.father_name.value=="")
	{
		alert( "please enter the father name");
		document.registration.father_name.focus();
		return false;
		}
	if(document.registration.date_of_birth.value=="")
	{
		alert( "please enter the date of birth");
		document.registration.date_of_birth.focus();
		return false;
		}
	if(document.registration.email.value=="")
	{
		alert( "please enter the email");
		document.registration.email.focus();
		return false;
		}
	if(document.registration.password.value=="")
	{
		alert( "please enter the password");
		document. registration.password.focus();
		return false;
	} 
	if(document.registration.address.value=="")
	{
		alert( "please enter the address");
		document.registration.address.focus();
		return false;
		}
	if(document.registration.phone_number.value=="")
	{
		alert( "please enter the phone number");
		document.registration.phone_number.focus();
		return false;
		}
	if(document.registration.country.value=="")
	{
		alert( "please enter the country");
		document.registration.country.focus();
		return false;
		}
	if(document.registration.pin_code.value=="")
	{
		alert( "please enter the pin code");
		document.registration.pin_code.focus();
		return false;
		}
	if(document.registration.department.value=="")
	{
		alert( "please enter the department");
		document.registration.department.focus();
		return false;
		}
	if(document.registration.course_id.value=="")
	{
		alert( "please enter the course id");
		document.registration.course_id.focus();
		return false;
		}
	if(document.registration.course.value=="")
	{
		alert( "please enter the course");
		document.registration.course.focus();
		return false;
		}
	else
	{
		alert("successfully registered");
		return (true);
	}
}	
</script>
</head>
<body style="background-image: url('images.jpg')">
<h2 style="margin:10px; padding:10px; font-size:24px; padding-right:5px; color:orange">Sign Up</h2>
<h4 align="right">
<a href="login.php" tite="Login"> Login
</a>
</h4>
<font-family style="font-size:20px; color:red; line-height:20px;">
</font>
<form name="registration" action="" method="post" onsubmit="return validate()" >
<table style="margin:10px;padding:10px; font-size:20px; padding-right:50px; color:black;">
	<tr>
	<td>Name</td>
	<td><input type="text" name="name" value=""></td>
	</tr>
	<tr>
	<td>Father Name</td>
	<td><input type="text" name="father_name" value=""></td>
	</tr>
	<tr>
	<td>Date of birth</td>
	<td><input type="text" name="date_of_birth" value=""></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="text" name="email" value=""></td>
	</tr>
	 <tr>
	<td>Password</td>
	<td><input type="password" name="password" value=""></td>
	</tr>
	<tr>
	<td>Address</td>
	<td><input type="text" name="address" value=""></td>
	</tr>
	<tr>
	<td>Phone Number</td>
	<td><input type="text" name="phone_number" value=""></td>
	</tr>
	<tr>
	<td>Gender</td>
	<td><input type="radio" name="gender" value="male" checked>Male
	<input type="radio" name="gender" value="female">Female
	</td>
	</tr>
	<tr>
	<td>Country</td>
	<td><select name="country">
	<option value="">select option</option>
		<option value="America">America</option>
		<option value="India">India</option>
		<option value="China">China</option>
		<option value="Russia">Russia</option>
		<option value="Newyork">Newyork</option>
		<option value="Germany">Germany</option>
	</select>
	</td>
	<tr>
	<td>Pin code</td>
	<td><input type="text" name="pin_code" value=""></td>
	</tr>
	<tr>
	<td>Department</td>
	<td><input type="text" name="department" value=""></td>
	</tr>
	<tr>
	<td>Course id</td>
	<td><input type="text" name="course_id" value=""></td>
	</tr>
	<tr>
	<td>Course</td>
	<td><select name="course">
	<option value="">select option</option>
		<option value="Aeronautical">Aeronautical</option>
		<option value="Computing">Computing</option>
		<option value="Mechanical">Mechanical</option>
		<option value="Business">Business</option>
		<option value="Civil">Civil</option>
		<option value="Electrical">Electrical</option>
    </select>
	</td>
	<tr>
	<td>
	<td colspan="6"; align="center">
	<input type="submit" value="register" name="register">
	</td>
	</tr>
</table>
</body>
</html>
</form>
<?php
error_reporting(error_reporting() & ~E_NOTICE );
if(!empty($_POST))
{
	print "<pre>";
	print_r($_POST);
    define('DB_NAME','register');
	$conn = mysql_connect('localhost','root','','register');
	if(!$conn){
		die('Connection failed'.mysql_error());
	}
	$db_selected = mysql_select_db(DB_NAME, $conn);
	if(!$db_selected){
		die('connot use'.DB_NAME.':'.mysql_error());
	}
	$name = $_POST['name'];
	$father_name = $_POST['father_name'];
	$date_of_birth = $_POST['date_of_birth'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$phone_number = $_POST['phone_number'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	$pin_code = $_POST['pin_code'];
	$department = $_POST['department'];
	$course_id = $_POST['course_id'];
	$course = $_POST['course'];
	$query="INSERT INTO students (name, father_name, date_of_birth, email, password, address, phone_number, gender, country, pin_code, department, course_id, course) 
	VALUES ('$name','$father_name','$date_of_birth','$email','$password','$address','$phone_number','$gender','$country','$pin_code','$department','$course_id','$course')";
	if(!mysql_query($query)){
		die('Error'.mysql_error());
	}
	 mysql_close();
}
?>