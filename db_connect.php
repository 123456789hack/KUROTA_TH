<?php
$conn = mysqli_connect("localhost", "root", "", "KUROTA");
// Create connection
//$conn = mysqli_connect($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}
echo "";
?>