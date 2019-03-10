<?php  
$connect=mysql_connect('localhost','root','','hospital');
if (!$connect)
{
die('Could not connect: ' . mysql_error());
} 
mysql_select_db("hospital", $connect);

// create variable to capture incoming fields from addDoc Form
$doc_id=(int)$_POST['doc_id'];
$doc_name=$_POST['doc_name'];
$dept=$_POST['dept'];
$doc_charge=$_POST['doc_charge'];

//Execute the query
$query = "UPDATE doctor set doc_name=\"$doc_name\", dept=\"$dept\", doc_charge=$doc_charge WHERE doc_id=$doc_id;";
			
$result = mysql_query($query);
if (!$result) { 										// add this check.
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Update failed! Doctor details not modified.')
				window.location.href='modDoc.php';
			</SCRIPT>");
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Doctor details modified successfully.')
			window.location.href='modDoc.php';
			</SCRIPT>");
	}
mysql_close($connect);
?>
