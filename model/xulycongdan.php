<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0.5 url=http://localhost/honnhangiadinh/view/profile.php" >
	<title></title>
</head>
<body>
<?php
	$CMND = $_POST["CMND"];
	$hoten =$_POST ["hoten"];
	$ngaysinh = $_POST['ngaysinh'];
	$quoctich = $_POST['quoctich'];
	$dantoc = $_POST['dantoc'];
	$noicutru = $_POST['noicutru'];
	$gioitinh = $_POST['gioitinh'];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

	

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	
	 include_once('../publish/connect.php');
	$sql="UPDATE congdan SET hoten='$hoten' , ngaysinh='$ngaysinh', gioitinh ='$gioitinh',quoctich ='$quoctich',dantoc='$dantoc',noicutru='$noicutru' Where CMND='$CMND'";
	
	$kq=mysqli_query($conn,$sql);
	if ($kq) {
		header("http://localhost/honnhangiadinh/view/profile.php");
	
	}
	?>
</body>
</html>



