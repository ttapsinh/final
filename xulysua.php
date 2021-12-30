<?php
$conn = mysqli_connect("localhost","root","","quanlynhanvien");

if(isset($_POST["btnSave"]))
{
	$maNV = $_POST["txt_maNV"];
	$tenNV = $_POST["txt_tenNV"];
	$gioitinh = $_POST["rd_gt"];
	$diachi = $_POST["txt_diachi"];
	$sdt = $_POST["txt_phone"];
	$namsinh = $_POST["txt_date"];
}
$sql3 = "UPDATE nhanvien SET fullname = '$tenNV', gender ='$gioitinh', address = '$diachi', phone ='$sdt',date ='$namsinh' WHERE idNV ='$maNV'";
if (mysqli_query($conn,$sql3)) 
{
	header('location: index2.php');
}
else{
	$result3 = "Cập nhật không thành công!" . mysqli_error($conn);
}
?>