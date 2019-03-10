<?php
$connect=mysqli_connect('localhost','root','','hospital');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>