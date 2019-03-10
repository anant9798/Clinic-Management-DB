<?php  
$connect=mysql_connect('localhost','root','','hospital');
if (!$connect)
{
die('Could not connect: ' . mysql_error());
} 
mysql_select_db("hospital", $connect);

// create variable to capture incoming fields from addDoc Form
$pat_id=(int)$_POST['pat_id'];
$pat_name=$_POST['pat_name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$dor=$_POST['dor'];

//Execute the query
$query = "UPDATE patient set pat_name=\"$pat_name\",age=\"$age\",gender=\"$gender\", phone=\"$phone\", dor='$dor' WHERE pat_id=$pat_id;";
			
$result = mysql_query($query);
if (!$result) { 										// add this check.
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Update failed! Patient details not modified.')
				window.location.href='modPat.php';
			</SCRIPT>");
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Patient details modified successfully.')
			window.location.href='modPat.php';
			</SCRIPT>");
	}
mysql_close($connect);
?>
