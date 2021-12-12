<?php 
$link = mysqli_connect("localhost","byhkfabk_panel","MyFiLeArChIvE21","byhkfabk_panel");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$conn = mysqli_connect("localhost","byhkfabk_dapodik_sync","MyFiLeArChIvE21","byhkfabk_dapodik_sync");
// Check connection
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>