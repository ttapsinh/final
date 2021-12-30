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
$sql3 = "INSERT INTO nhanvien VALUES ('$maNV','$tenNV','$gioitinh','$diachi','$sdt','$namsinh' )";
if (mysqli_query($conn,$sql3)) 
{
	header('location: index2.php');
}
else{
	$result3 = "Lỗi thêm mới!" . mysql_error($conn);
}
?>