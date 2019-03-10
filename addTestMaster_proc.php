<?php  
include 'database.php';

// create variable to capture incoming fields from addDoc Form
$test_name=$_POST['test_name'];
$test_charge=$_POST['test_charge'];

//Execute the query
mysqli_query($connect,"INSERT INTO test_master(test_name,test_charge)
				VALUES('$test_name',$test_charge)");
	if(mysqli_affected_rows($connect) > 0){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Test Master Succesfully added')
			window.location.href='addTestMaster.php';
			</SCRIPT>");
	} else {
		echo mysqli_error ($connect);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Test not added.')
				window.location.href='addTestMaster.php';
			</SCRIPT>");
	}
?>