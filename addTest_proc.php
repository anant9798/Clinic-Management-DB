<?php  
include 'database.php';

// create variable to capture incoming fields from addDoc Form
$t_id=$_POST['t_id'];
$pat_id=$_POST['pat_id'];
$tm_id=$_POST['tm_id'];
$test_date=$_POST['test_date'];

//Execute the query
mysqli_query($connect,"INSERT INTO test(t_id,pat_id,tm_id,test_date)
				VALUES($t_id,'$pat_id','$tm_id','$test_date')");
	if(mysqli_affected_rows($connect) > 0){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Test Succesfully added')
			window.location.href='addTest.php';
			</SCRIPT>");
	} else {
		echo mysqli_error ($connect);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Test not added.')
				window.location.href='addTest.php';
			</SCRIPT>");
	}
?>