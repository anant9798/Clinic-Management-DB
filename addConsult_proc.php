<?php  
$connect=mysql_connect('localhost','root','','hospital');
if (!$connect)
{
die('Could not connect: ' . mysql_error());
} 
mysql_select_db("hospital", $connect);

// create variable to capture incoming fields from addT Form
$pat_id=(int)$_POST['pat_id'];
$doc_id=(int)$_POST['doc_id'];
$c_date=$_POST['c_date'];

//Execute the query
$query = "INSERT INTO consultation (pat_id, doc_id, c_date) VALUES($pat_id, $doc_id, '$c_date');";
			
$result = mysql_query($query);
if (!$result) { 
		echo mysqli_error ($connect);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Consultation Appointment not added.')
				window.location.href='addConsult.php';
			</SCRIPT>");
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Consultation Appointment Succesfully added')
			window.location.href='addConsult.php';
			</SCRIPT>");
	}
mysql_close($connect);	
?>