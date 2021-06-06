<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
// Nếu không phải là sự kiện đăng ký thì không xử lý
    
     
    //Nhúng file kết nối với database
    include('publish/connect.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    if (isset($_POST["dangky"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  		$CMND = $_POST["CMND"];
  		$hoten = $_POST["hoten"];
  		$ngaysinh = $_POST["ngaysinh"];
        $quoctich = $_POST["quoctich"];
        $dantoc = $_POST["dantoc"];
  		$noicutru = $_POST["noicutru"];
  		$username = $_POST["username"];
  		$password = $_POST["password"];
        $gioitinh =$_POST["gioitinh"];


         
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$hoten)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
      
          
    if (mysqli_num_rows(mysqli_query($conn,"SELECT username FROM congdan WHERE username='$username'")) > 0)
    {
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    
    	$sql = "INSERT INTO congdan (CMND,username,password,hoten,ngaysinh,quoctich,dantoc,noicutru,gioitinh)
    			VALUES ('$CMND','$username','$password','$hoten','$ngaysinh','$quoctich','$dantoc','$noicutru','$gioitinh') ";
	    $kq=mysqli_query($conn,$sql);
	if ($kq) 
	{
		echo "Chúc mừng bạn đã đăng ký tài khoản thành công. <a href='http://localhost/honnhangiadinh/login.php'>
						</a>";
	}
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";

                          
  }
?>
</body>
</html>