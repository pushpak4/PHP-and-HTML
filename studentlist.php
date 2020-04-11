<! DOCTYPE html>
<html>
<head>
<?php
session_start();
$con=mysql_connect("localhost","root","","register");
if(!$con)
{
	die('could not connect:'.mysql_error());
}
mysql_select_db("register",$con);
$result=mysql_query("SELECT * FROM students");
?>
<style>
body{
     background-image:url('4.jpg');
    font-family:arial;
}
table, th, td {
   border: 1px solid black;
}
th, td{
padding: 2px;
vertical-align: bottom;
}
.label{
font-size:14px;
font-weight:bold;
}
.normal{
font-size:12px;
font-weight:normal;
}
</style>
<img src="download.png"  style="width:;height:;border:20px;" align="left">
<h3 style="fontsize:12px;" align="right">
Welcome <?php echo $_SESSION["email"]; ?>
</h3>
<h4 align="right">
<a href="logout.php" tite="Logout"> Logout
</a>
</h4>
<h2 align="center" style="font-size:30px; color:orange;">Conerstone Student Portal</h2>
<table  style="border:5px solid orange; padding:5px;  padding-right:5px;" align="center" width="75%" >
<tr>
     <td style="color:orange;" align="center"  class="label">Name</td>
	 <td style="color:orange;" align="center"  class="label">Father name</td>
	 <td style="color:orange;" align="center"  class="label">Email</td>
	 <td style="color:orange;" align="center"  class="label">Address</td>
	 <td style="color:orange;" align="center"  class="label">Gender</td>
	 <td style="color:orange;" align="center"  class="label">Course</td>
     <td style="color:orange;" align="center"  class="label">Phone number</td>
      <td style="color:orange;" align="center"  class="label">Actions</td>
</tr>

<?php
while($row=mysql_fetch_array($result)){
	$name = $row["name"];
	$father_name = $row["father_name"];
	$email = $row["email"];
	$address = $row['address'];
	$gender = $row['gender'];
	$course = $row['course'];
	$phone_number = $row["phone_number"];
?>
<tr>
		 <td align="center" class="normal"><?php echo $name;?></td>
		 <td align="center" class="normal"><?php echo $father_name;?></td>
		 <td align="center" class="normal"><?php echo $email;?></td>
		 <td align="center" class="normal"><?php echo $address;?></td>
		 <td align="center" class="normal"><?php echo $gender;?></td>
		 <td align="center" class="normal"><?php echo $course;?></td>
		 <td align="center" class="normal"><?php echo $phone_number;?></td>
		 <td align="center" class="normal"><a href='edit.php?student_id=<?php echo $row['student_id']; ?>' title="Edit"> Edit
</a>/<a href='delete.php?student_id=<?php echo $row['student_id']; ?>' onclick='return confirm("Are you sure want to delete?")' tite="Delete"> Delete
</a></td>
		</tr>
<?php } ?>
</table>
</head>
</body>
</html>
	
	