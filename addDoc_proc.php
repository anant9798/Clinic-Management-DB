<?php  
include 'database.php';

// create variable to capture incoming fields from addDoc Form
$doc_id=$_POST['doc_id'];
$doc_name=$_POST['doc_name'];
$dept=$_POST['dept'];
$doc_charge=$_POST['doc_charge'];

//Execute the query
mysqli_query($connect,"INSERT INTO doctor(doc_id, doc_name,dept,doc_charge)
			VALUES($doc_id, '$doc_name','$dept',$doc_charge)");
	if(mysqli_affected_rows($connect) > 0){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Doctor Succesfully added')
			window.location.href='addDoc.php';
			</SCRIPT>");
	} else {
		echo mysqli_error ($connect);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Doctor not added.')
				window.location.href='addDoc.php';
			</SCRIPT>");
	}
?>