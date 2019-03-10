<?php  
$connect=mysql_connect('localhost','root','','hospital');
if (!$connect)
{
die('Could not connect: ' . mysql_error());
} 
mysql_select_db("hospital", $connect);

// create variable to capture incoming fields from addT Form
$pat_id=(int)$_POST['pat_id'];
$r_id=(int)$_POST['r_id'];
$admit_date=$_POST['admit_date'];
$no_of_days=(int)$_POST['no_of_days'];

//Execute the query
$query = "INSERT INTO admission (pat_id,r_id,admit_date,no_of_days) VALUES($pat_id,$r_id,'$admit_date',$no_of_days);";
			
$result = mysql_query($query);
if (!$result) { 
		echo mysqli_error ($connect);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Admission Appointment not added.')
				window.location.href='addR.php';
			</SCRIPT>");
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Admission Appointment Succesfully added')
			window.location.href='addR.php';
			</SCRIPT>");
	}
mysql_close($connect);	
?>