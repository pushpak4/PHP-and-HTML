<html>
<body style="background-image: url('4.jpg')">
<form name="edit" action="" method="post" onsubmit="return validate()" >
<?php
include('db.php');
if(isset($_GET['student_id']))
{
$student_id=$_GET['student_id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$father_name=$_POST['father_name'];
$email=$_POST['email'];
$address=$_POST['address'];
$course=$_POST['course'];
$phone_number=$_POST['phone_number'];
$query=mysql_query("update students set name='$name', father_name='$father_name', email='$email', address='$address', course='$course', phone_number='$phone_number' where student_id='$student_id'");
if($query)
{
header('location:studentlist.php');
}
}
$result=mysql_query("select * from students where student_id='$student_id'");
$row=mysql_fetch_array($result);
?>
<font-family style="font-size:20px; color:red; line-height:20px;">
</font>
<table style="margin:10px;padding:10px; font-size:20px; padding-right:50px; color:black;">
<tr>
<td>Name:</td>
<td><input type="text" name="name" value="<?php echo $row['name']; ?>" /></td></tr>
<tr>
<td>Father name:</td>
<td><input type="text" name="father name" value="<?php echo $row['father_name']; ?>" /></td></tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email" value="<?php echo $row['email']; ?>" /></td></tr>
<tr>
<td>Address:</td>
<td><input type="text" name="address" value="<?php echo $row['address']; ?>" /></td></tr>
<tr>
<td>Course:</td>
<td><input type="text" name="course" value="<?php echo $row['course']; ?>" /></td></tr>
<tr>
<td>Phone number:</td>
<td><input type="text" name="phone number" value="<?php echo $row['phone_number']; ?>" /></td></tr>
<tr>
<td><input type="submit" name="submit" value="Update" onclick='return confirm("Are you sure want to update?")'></td>
</tr>
</form>
</table>
<?php
}
?>
</body>
</html>
 