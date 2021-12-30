<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm nhân viên</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<form action="xulydulieu.php" method="post">
		<table>
			<tr>
				<td colspan="2"><h3>Thêm Nhân Viên</h3></td>
			</tr>
			<tr>
				<td>Mã Nhân Viên</td>
				<td><input type="text" id="txt_maNV" name="txt_maNV" value="" size="30"></td>
			</tr>
			<tr>
				<td>Họ và tên</td>
				<td><input type="text" id="txt_tenNV" name="txt_tenNV" value="" size="30"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" id="rd_gt_0" name="rd_gt" value="0" >Nam
					<input type="radio" id="rd_gt_1" name="rd_gt" value="1" >Nữ
				</td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" id="txt_diachi" name="txt_diachi" value="" size="30"></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" id="txt_phone" name="txt_phone" value="" size="30" ></td>
			</tr>
			<tr>
				<td>Năm sinh</td>
				<td><input type="year" id="txt_date" name="txt_date" value=""></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" id="btn" name="btnSave" value="Save">
				</td>
			</tr>
			
		</table>
	</form>
</body>
</html>