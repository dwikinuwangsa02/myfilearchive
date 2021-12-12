<?php 
$link = mysqli_connect("localhost","root","","mypanel");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$conn = mysqli_connect("localhost","root","","dapodik_sync");
// Check connection
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>