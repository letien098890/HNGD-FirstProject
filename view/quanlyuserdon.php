<!DOCTYPE html>
<html>
<head>
	<title>Đơn Đăng Kí</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Quản lý Đơn Đăng Kí Của Bạn
				
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID ĐƠN</th>
							<th>Gửi Đến</th>
							<th>CMND</th>
                            <th>Tên Công Dân</th>
							<th>Tình Trạng Hôn Nhân</th>
                            <th>Mục Đích</th>
							<th width="160px">Ngày Đăng Kí Đơn</th>
                            <th width="160px">Trạng Thái Đơn</th>
						</tr>
					</thead>
					<tbody>
<?php
	session_start();
	$username = $_SESSION['username'];
    include_once('../publish/connect.php');//call db
	$sql = "SELECT *
    FROM `donyeucau` JOIN `congdan`
    ON donyeucau.CMND_FK = congdan.CMND WHERE congdan.username = '$username';"; //Truy vấn đơn yc
    $kq=mysqli_query($conn,$sql); 
	$trangthai = [
		0 => "Đơn của bạn đang chờ xử lý ",
		1 => "Đơn của bạn đã được nhận",
		2 => "Đơn của bạn đang được xử lý",
		3 => "Đã hoàn thành vui lòng đến cơ quan sau 3 ngày để nhận",
		4 => "Đơn Của bạn đã bị từ chối, Xin thử lại ",];
	//Chuyển kq thành chuỗi

if (mysqli_num_rows($kq) > 0) {
	while ($don=mysqli_fetch_assoc($kq)) {
		echo '<tr>
		<td>'.$don['id_don'].'</td>
		<td>'.$don['kinhgui'].'</td>
		<td>'.$don['CMND_FK'].'</td>
		<td>'.$don['hoten'].'</td>
		<td>'.$don['TTHN'].'</td>
		<td>'.$don['mucdich'].'</td>
		<td>'.$don['ngay_dangky'].'</td>
		<td>' . $trangthai[$don['id_trangthai']] . '</td>
		</tr>';
	}
}
?>
					</tbody>
				</table>
				<button class="btn btn-success" onclick="window.open('themdon.php', '_self')">Thêm Đơn Mới</button>
				<button class="btn btn-success" onclick="window.open('../trangchu.php', '_self')">Về Trang Chủ</button>
			</div>
		</div>
	</div>

	


</body>
</html>