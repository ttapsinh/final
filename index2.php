<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Danh sách nhân viên</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<h3 align="center">Danh sách nhân viên</h3>
		<table border="1" align="center" cellspacing="0" cellpadding="0" width="850px">
			<tr>
				<th>Mã nhân viên</th>
				<th>Họ và tên</th>
				<th>Giới tính</th>
				<th>Địa chỉ</th>
				<th>Số điện thoại</th>
				<th>Năm sinh</th>
				<th>Tác vụ</th>
			</tr>
<?php

$conn = mysqli_connect("localhost", "root", "","quanlynhanvien");
$sql3 = "SELECT * FROM nhanvien" ;
$result3 = mysqli_query($conn, $sql3);
while ($row = mysqli_fetch_assoc($result3)) 
{
	$maNV 		= $row["idNV"];
	$tenNV 		= $row["fullname"]; 
	$gioitinh 	= $row["gender"];
	$diachi 	= $row["address"];
	$sdt 		= $row["phone"];
	$namsinh 	= $row["date"];
?>
	<tr>
		<td><?php echo $maNV 	?></td>
		<td><?php echo $tenNV 	?></td>
		<td><?php if($gioitinh == 0) echo "Nam"; elseif($gioitinh == 1) echo "Nữ"; ?></td>
		<td><?php echo $diachi 	?></td>
		<td><?php echo $sdt 	?></td>
		<td><?php echo $namsinh 	?></td>
		<td>
			<a href="suadulieu.php?idNV=<?php echo $maNV;?>">Sửa</a>
			<a href="xulyxoa.php?idNV=<?php echo $maNV;?>">Xoá</a>
		</td>
	</tr>
<?php
}	
?>
		<?php
		mysqli_close($conn);
		?>
		<tr>
			<td colspan="7" align="center">
				<button type="button" onclick="myFunction()">Thêm mới</button>
			</td>
		</tr>

		</table>
</body>
</html>
<script>
	function myFunction(){
		location.replace("themdulieu.php");}
</script>