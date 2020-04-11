<?php
ob_start();
  include("db.php");
  if(isset($_GET['student_id'])!="")
  {
  $delete=$_GET['student_id'];
  $delete=mysql_query("DELETE FROM students WHERE student_id='$delete'");
  if($delete)
  {
      header("Location:studentlist.php");
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();

?>	