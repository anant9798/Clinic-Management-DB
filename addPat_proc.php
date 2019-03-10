<?php  
include 'database.php';

// create variable to capture incoming fields from addDoc Form
$pat_id=$_POST['pat_id'];
$pat_name=$_POST['pat_name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$dor=$_POST['dor'];

//Execute the query
mysqli_query($connect,"INSERT INTO patient(pat_id, pat_name,age,gender,phone,dor)
				VALUES($pat_id,'$pat_name',$age,'$gender','$phone','$dor')");
	if(mysqli_affected_rows($connect) > 0){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Patient Succesfully added')
			window.location.href='addPat.php';
			</SCRIPT>");
	} else {
		echo mysqli_error ($connect);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Patient not added.')
				window.location.href='addPat.php';
			</SCRIPT>");
	}
?>