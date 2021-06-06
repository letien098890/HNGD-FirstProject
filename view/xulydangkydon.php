<?php
// Nếu không phải là sự kiện đăng ký thì không xử lý


//Nhúng file kết nối với database
include('../publish/connect.php');

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

// var_dump($_POST);



    //lấy thông tin từ các form bằng phương thức POST
    $kinhgui = $_POST["kinhgui"];
    $CMND_FK = $_POST["CMND"];
    $hoten = $_POST["hoten"];
    $noicutru = $_POST["noicutru"];
    $ngaysinh = $_POST["ngaysinh"];
    $quoctich = $_POST["quoctich"];
    $gioitinh = $_POST['gioitinh'];
    $dantoc = $_POST["dantoc"];
    $TTHN = $_POST["TTHN"];
    $mucdich = $_POST["mucdich"];
    $ngay_dangky=$_POST["ngay_dangky"];



//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$kinhgui || !$TTHN || !$mucdich)
{
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
$sql = "INSERT INTO `donyeucau`( `kinhgui`, `CMND_FK`, `TTHN`, `mucdich`,`ngay_dangky`,`id_trangthai`) 
VALUES ('$kinhgui','$CMND_FK','$TTHN','$mucdich','$ngay_dangky','0')";
$kq = mysqli_query($conn, $sql);

if ($kq) 
{
    echo "Chúc mừng bạn đã gửi thành công. < href='../quanlyuserdon.php'>
                    ";
}
else
    echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";

                      
header("Location: ./quanlyuserdon.php");

?>