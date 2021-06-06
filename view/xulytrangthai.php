<?php
include('../publish/connect.php');
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST["luu"])) {
	//lấy thông tin từ các form bằng phương thức POST
	$id_don =$_POST["id_don"];
    $id_trangthai =$_POST["trangthai"];
}
$sql="UPDATE `donyeucau` SET `id_trangthai`=$id_trangthai WHERE id_don =$id_don ";

$kq=mysqli_query($conn,$sql);
if ($kq) 
{
              header("Location: http://localhost/honnhangiadinh/view/quanlydon.php");
              exit();
}
?>
