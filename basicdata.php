<?php
// Include another PHP file
require 'conection.php';
$rollno = $_POST['Rollno_txtbx'];
//$detail = $_GET['detail'];
mysql_select_db($database) or die( "Unable to select database");
$result = mysql_query("SELECT studentname, collegename,yoa,coursetype,course,branch,category,admno,doa FROM basicdata WHERE id =" .
mysql_real_escape_string($_POST["rollno"]), $connection );
$row = mysql_fetch_assoc($result);
mysql_close($connection);
?>
