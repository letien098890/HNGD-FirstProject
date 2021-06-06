<?php
session_start();
include('../publish/connect.php');

//Lấy dữ liệu nhập vào
$username = $_SESSION['username'];

$sql = "SELECT * FROM congdan WHERE username='$username'";
$kq = mysqli_query($conn, $sql);
$don = mysqli_fetch_assoc($kq);
// var_dump($don);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->



    <style type="text/css">
        .input98 {
            font-family: Poppins-Regular;
            font-size: 18px;
            color: #fff;
            line-height: 1.2;
            display: block;
            width: 100%;
            height: 25px;
            background: #e1c8c3;
            padding-left: 5px;
            border-color: white;

        }

        .input99 {
            font-family: Poppins-Regular;
            font-size: 20px;
            color: #fff;
            line-height: 1.2;
            display: block;
            width: 100%;
            height: 45px;
            background: transparent;
            padding-left: 5px;
        }

        .wrap-login101 {
            width: 500px;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
            padding: 55px 55px 37px 55px;
            background: #9152f8;
            background: -webkit-linear-gradient(top, #f6832d, rgba(255, 87, 34, 0.72));
        }

        .login101-form-btn {
            font-family: Poppins-Medium;
            font-size: 16px;
            color: #555555;
            line-height: 1.2;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            min-width: 120px;
            height: 50px;
            border-radius: 25px;
            background: #9152f8;
            background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, .15), #f8f9fa);
            background: -o-linear-gradient(bottom, #7579ff, #b224ef);
            background: -moz-linear-gradient(bottom, #7579ff, #b224ef);
            background: linear-gradient(bottom, #7579ff, #b224ef);

            position: relative;
            z-index: 1;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            text-align: center;
        }

        .gt {
            width: 100%;
            height: 45px;
            padding-left: 5px;
            padding-top: 10px;
            color: white;
            padding-bottom: 10px;
        }
    </style>
    <title>Đăng ký Đơn Xác Nhận </title>
    <meta charset="utf-8">
</head>

<body>






    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login101">
                <form class="" action="./xulydangkydon.php" method="POST">
                    <span class="">
                        <div align ="center"> <span class="">
                                <a href="">

                                </a>
                            </span></div>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Nhập Thông Tin Công Dân
                        

                    </span>

                    <div style="color: white; margin: 2px;">Kính Gửi:</div>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input99" type="text" name="kinhgui">

                      
                    </div>
                    <div style="color: white; margin: 2px;">CMND:</div>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input99" type="text" name="CMND" value="<?php echo $don['CMND'] ?>" readonly >
                    </div>

                    <div style="color: white; margin: 2px;">Họ Và Tên:</div>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input99" type="text" name="hoten" value="<?php echo $don['hoten'] ?>" readonly  >
                    </div>

                    <div style="color: white; margin: 2px;">Nơi Cư Trú:</div>
                    <div class="wrap-input100 validate-input" title="<?php echo $don['noicutru'] ?>">
                        <input class="input99" type="text" name="noicutru" value="<?php echo $don['noicutru'] ?>" readonly>
                    </div>

                    <div style="color: white; margin: 2px;">Ngày sinh:</div>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input  class="input99" type="date" name="ngaysinh"value="<?php echo $don['ngaysinh'] ?>" readonly>
                    </div>

                    <div style="color: white; margin: 2px;">Giới Tính:</div>
                    <div class="wrap-input100 validate-input" data-validate=""?>
                        <input class="input99" type="text" name="gioitinh" value="<?php echo $don['gioitinh'] ?>"readonly>
                    </div>
  
                    <div style="color: white; margin: 2px;">Dân Tộc:</div>
                    <div class="wrap-input100 validate-input" data-validate="" >
                        <input class="input99" type="text" name="dantoc" value="<?php echo $don['dantoc'] ?>" readonly>
                    </div>

                    <div style="color: white; margin: 2px;">Quốc Tịnh:</div>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input99" type="text" name="quoctich" value="<?php echo $don['quoctich'] ?>" readonly>
                    </div>

                    <div style="color: white; margin: 2px;">Xác Nhận Tình Trạng Hôn Nhân:</div>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input99" type="text" name="TTHN">
                    </div>

                    <div style="color: white; margin: 2px;">Mục Đích:</div>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input99" type="text" name="mucdich">
                    </div>
                    <div style="color: white; margin: 2px;">Ngày Đăng Ký:</div>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input99" type="date" name="ngay_dangky">
                    </div>
                    <!-- <div class="wrap-input100 validate-input" data-validate="">
                        <input  class="input99" type="date" name="quoctich"value="" disabled>


                    </div> -->
                    <!-- <div class="gt" data-validate="">
                        <input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
                        <input type="radio" name="gioitinh" value="Nữ">Nữ

                     -->

                    <!-- <div style="color: white; margin: 2px;">Quê quán:</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input99" type="text" name="noicutru">
					</div> -->
                    </span>
            </div>
            </span>




            <div class="container-login101-form-btn" align="center">

                <input type="submit" class="login101-form-btn" name="dangky" value="Đăng Kí">
            </div>

            </form>
        </div>
    </div>
    </div>


    <!-- <div id="dropDownSelect1"></div> -->



</body>

</html>
</body>

</html>