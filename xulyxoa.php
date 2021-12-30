<?php
$conn = mysqli_connect("localhost","root","","quanlynhanvien");
$maNV = $_GET["idNV"];
$sql3 = "DELETE FROM nhanvien WHERE idNV ='$maNV'";
if (mysqli_query($conn,$sql3)) 
{
	header('location:index2.php');
}
else{
	$result3 = "Xoá không thành công!" . mysqli_error($conn);
}
mysqli_close($conn);
?>