<?php  
$connect=mysql_connect('localhost','root','','hospital');
if (!$connect)
{
die('Could not connect: ' . mysql_error());
} 
mysql_select_db("hospital", $connect);

// create variable to capture incoming fields from addT Form
$pat_id=(int)$_POST['pat_id'];
$tm_id=(int)$_POST['tm_id'];
$test_date=$_POST['test_date'];

//Execute the query
$query = "INSERT INTO test (pat_id, tm_id, test_date) VALUES($pat_id, $tm_id, '$test_date');";
			
$result = mysql_query($query);
if (!$result) { 
		echo mysqli_error ($connect);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Test Appointment not added.')
				window.location.href='addT.php';
			</SCRIPT>");
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Test Appointment Succesfully added')
			window.location.href='addT.php';
			</SCRIPT>");
	}
mysql_close($connect);	
?>