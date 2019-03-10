<?php  
include 'database.php';

// create variable to capture incoming fields from addDoc Form
$r_id=$_POST['r_id'];
$room_type=$_POST['room_type'];
$room_charge=$_POST['room_charge'];

//Execute the query
mysqli_query($connect,"INSERT INTO room(r_id, room_type,room_charge)
				VALUES($r_id,'$room_type','$room_charge')");
	if(mysqli_affected_rows($connect) > 0){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Room Succesfully added')
			window.location.href='addRoom.php';
			</SCRIPT>");
	} else {
		echo mysqli_error ($connect);
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Room not added.')
				window.location.href='addRoom.php';
			</SCRIPT>");
	}
?>