<?php
$servername ="127.0.0.1";
$username = "root";
$password ="";
$dbname = "Edocutal";

$conn = new mysqli($servername,$username,$password,$dbname);
//mysqli_select_db()
//$conn = mysqli_connect($servername,$username,$password);

if($conn->connect_error)
{
	die("Connection Failed ".$conn->connect_error);
}
/*else
{
	echo "Connection successful";
}*/

?>