<?php  
$connect=mysql_connect('localhost','root','','hospital');
if (!$connect)
{
die('Could not connect: ' . mysql_error());
} 
mysql_select_db("hospital", $connect);

// create variable to capture incoming fields from addDoc Form
$r_id=(int)$_POST['r_id'];
$room_type=$_POST['room_type'];
$room_charge=$_POST['room_charge'];

//Execute the query
$query = "UPDATE room set room_type=\"$room_type\",room_charge=\"$room_charge\" WHERE r_id=$r_id;";
			
$result = mysql_query($query);
if (!$result) { 										// add this check.
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Update failed! Room details not modified.')
				window.location.href='modRoom.php';
			</SCRIPT>");
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Room details modified successfully.')
			window.location.href='modRoom.php';
			</SCRIPT>");
	}
mysql_close($connect);
?>
