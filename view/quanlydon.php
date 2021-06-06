<!-- // session_start();
// include('../publish/connect.php');


//Lấy dữ liệu nhập vào
// $TTHN = $_SESSION['TTHN'];

// $sql = "SELECT * FROM donyeucau WHERE TTHN='Độc Thân'";
// $kq = mysqli_query($conn, $sql);

// var_dump($don);
// while ($don = mysqli_fetch_assoc($kq)) { -->
<!-- // 	echo "<div id='link' onClick='addText(\"" . $don['TTHN'] . "\");'>" . $don['TTHN'] . "</div>"; -->
<!-- } -->

<script>
	debugger
	if(isset($_GET["id"])){
		debugger
		window.print();
	}

</script>


<!DOCTYPE html>
<html>

<head>
	<title>Quản Lý Đơn Đăng Kí</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
	}

	/* The Modal (background) */
	.modal {
		display: none;
		/* Hidden by default */
		position: fixed;
		/* Stay in place */
		z-index: 1;
		/* Sit on top */
		padding-top: 100px;
		/* Location of the box */
		left: 0;
		top: 0;
		width: 100%;
		/* Full width */
		height: 100%;
		/* Full height */
		overflow: auto;
		/* Enable scroll if needed */
		background-color: rgb(0, 0, 0);
		/* Fallback color */
		background-color: rgba(0, 0, 0, 0.4);
		/* Black w/ opacity */
	}

	/* Modal Content */
	.modal-content {
		background-color: #fefefe;
		margin: auto;
		padding: 20px;
		border: 1px solid #888;
		width: 30%;
	}

	/* The Close Button */
	.close {
		color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}

	.title {
		font-weight: bold;
		font-size: 20px;
		text-align: right;

	}
</style>
<script type="text/javascript">
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal
	function onClickModel(id) {
		// var modal = document.getElementById("myModal");
		document.getElementById("myModal").style.display = "block";
		document.getElementById("id_don").value = id;
		// modal.css("display", "block");
	}

	function Close() {
		document.getElementById("myModal").style.display = "none";
	}
</script>

<body>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Quản lý Đơn Đăng Kí
			</div>

			<html>

			<form method="get">
				<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo CMND">
				<input id="submit" type="submit" value="Search">
				<input id="thongke" type="submit" value="Thống Kê">
			</form>
			<!-- <form action="quanlydon.php" method="GET">
				<input id="search" type="text" placeholder="Type here">
				<input id="submit" type="submit" value="Search">
			</form> -->
			<!-- <form method="post">
				<label>Search</label>
				<input type="text" name="search">
				<input type="submit" name="submit">

			</form> -->

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
							<th width="60px">In Đơn</th>
						</tr>




					</thead>
					<tbody>
						<?php
						$sql = "";
						if (isset($_GET['s']) && $_GET['s'] != '') {
							$keySearch = $_GET['s'];

							$sql = "SELECT *
    FROM `donyeucau` JOIN `congdan` 
    ON donyeucau.CMND_FK = congdan.CMND 
	where CMND like '%$keySearch%'";
						} else {
							$sql = "SELECT *
    FROM `donyeucau` JOIN `congdan`
    ON donyeucau.CMND_FK = congdan.CMND ";
						}
					

						// $studentList = executeResult($sql);

						// $index = 1;
						include_once('../publish/connect.php'); //call db
						if ($sql == "") {
							$sql = "SELECT *
							FROM `donyeucau` JOIN `congdan`
							ON donyeucau.CMND_FK = congdan.CMND ";
						}
						//Truy vấn đơn yc
						$kq = mysqli_query($conn, $sql);
						//Chuyển kq thành chuỗi
						$trangthai = [
							0 => "Đang chờ",
							1 => "Đã Nhận",
							2 => "Đang Xử Lý",
							3 => "Hoàn Thành",
							4 => "Từ Chối",
						];
						if (mysqli_num_rows($kq) > 0) {
							while ($don = mysqli_fetch_assoc($kq)) {
								echo '<tr>
		<td>' . $don['id_don'] . '</td>
		<td>' . $don['kinhgui'] . '</td>
		<td>' . $don['CMND_FK'] . '</td>
		<td>' . $don['hoten'] . '</td>
		<td>' . $don['TTHN'] . '</td>
		<td>' . $don['mucdich'] . '</td>
		<td>' . $don['ngay_dangky'] . '</td>
		<td>
		' . $trangthai[$don['id_trangthai']] . '
		<button id="myBtn" onclick="onClickModel(' . $don['id_don'] . ')">Edit</button>
		</td>
		

	</div>
      
		<td><button class="btn btn-warning" onclick=\'window.open("indon.php?id=' . $don['id_don'] . '","_self")\'>In</button></td>
		</tr>';
							}
						}
						?>
					</tbody>
				</table>

				<button class="btn btn-success" onclick="window.open('../trangchu2.php', '_self')">Về Trang Chủ</button>
			</div>
		</div>
	</div>
	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">

			<div><span class="close" onclick="Close()">&times;</span>

				<label for="exampleFormControlSelect1" class="title">Xác Nhận Trạng Thái Đơn Yêu Cầu</label>

			</div>

			<div class="form-group">

				<form name="Tame" method="POST" action="http://localhost/honnhangiadinh/view/xulytrangthai.php">
					<div style="padding-bottom: 20px;">
						<select name="trangthai">
							<option value="0">Đang Chờ
							<option value="1">Đã Nhận
							<option value="2">Đang Xử Lý
							<option value="3">Hoàn Thành
							<option value="4">Từ Chối
						</select>
					</div>
					<input type="hidden" id="id_don" name="id_don" value="">
					<div>

						<p><input type="submit" id="updatetrangthai" name="luu" value="Lưu"></p>
					</div>


				</form>
			</div>
		</div>
	</div>
	<!-- <div class="form-group">
    <label for="exampleFormControlSelect1">Trạng Thái</label>
    <form name="Tame" method="POST" action="./xuly.php">
        <select name="VariableD" onchange="submit()">
          <option value=".5">Đã Nhận
          <option value="1">Đang Xử Lý
          <option value="1.5">Hoàn Thành
          <option value="2">Từ Chối
        </select>
        <input type="hidden" name="VariableI" value="2">
        <input type="hidden" name="VariableT" value="4">
        <input type="hidden" name="VariableE" value="10">
</form>
  </div> -->



</body>

</html>