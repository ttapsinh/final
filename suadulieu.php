<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sửa thông tin nhân viên</title>
</head>
<body>
	<?php
	$conn = mysqli_connect("localhost","root","","quanlynhanvien");
	$maNV = $_GET["idNV"];
	$sql3 = "SELECT * FROM nhanvien WHERE idNV = '$maNV'";
	$result3 = mysqli_query($conn,$sql3);
	
	while ($row = mysqli_fetch_assoc($result3)) 
	{
		$maNV 		= $row["idNV"];
		$tenNV 		= $row["fullname"]; 
		$gioitinh 	= $row["gender"];
		$diachi 	= $row["address"];
		$sdt 		= $row["phone"];
		$namsinh 	= $row["date"];
	}
	?>
	<form action="xulysua.php" method="post">
		<table>
			<tr>
				<td colspan="2"><h3>Sửa thông tin nhân viên</h3></td>
			</tr>
			<tr>
				<td>Mã Nhân Viên</td>
				<td><input type="text" name="txt_maNV" readonly = "readonly" value="<?php echo $maNV ?>" size="30"></td>
			</tr>
			<tr>
				<td>Họ và tên</td>
				<td><input type="text" name="txt_tenNV" readonly = "readonly" value="<?php echo $tenNV ?>" size="30"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" name = "rd_gt" value = "0" <?php echo $gioitinh == 0 ? 'checked' : '' ?> >Nam
					<input type="radio" name = "rd_gt" value = "1" <?php echo $gioitinh == 1 ? 'checked' : '' ?> >Nữ
				</td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" name="txt_diachi" value="<?php echo $diachi ?>" size="30"></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="txt_phone" value="<?php echo $sdt ?>" size="30"></td>
			</tr>
			<tr>
				<td>Năm sinh</td>
				<td><input type="year" name="txt_date" value="<?php echo $namsinh ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnSave" value="Save">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>