<?php  
$connect=mysql_connect('localhost','root','','hospital');
if (!$connect)
{
die('Could not connect: ' . mysql_error());
} 
mysql_select_db("hospital", $connect);

// create variable to capture incoming fields from addDoc Form
$t_id=(int)$_POST['t_id'];
$pat_id=(int)$_POST['pat_id'];
$tm_id=(int)$_POST['tm_id'];
$test_date=$_POST['test_date'];

//Execute the query
$query = "UPDATE test set pat_id=$pat_id, tm_id=$tm_id, test_date='$test_date' WHERE t_id=$t_id;";
			
$result = mysql_query($query);
if (!$result) { 										// add this check.
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Update failed! Test details not modified.')
				window.location.href='modTest.php';
			</SCRIPT>");
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Test details modified successfully.')
			window.location.href='modTest.php';
			</SCRIPT>");
	}
mysql_close($connect);
?>
