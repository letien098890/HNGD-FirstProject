<!DOCTYPE html>
<html>

<head>
    <title>In</title>
    <meta charset="utf-8">
    <style>
        .container_swap {

            width: 1000px;

        }

        .div_left {

            width: 50%;



            text-align: left;

        }

        .div_right {

            width: 50%;


            text-align: right;

        }
    </style>

</head>

<body>

    <?php
    $sql = "";
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id_don = $_GET['id'];

        $sql = "SELECT *
                FROM `donyeucau` don join congdan cd
                on don.CMND_FK = cd.CMND
                WHERE id_don = '$id_don'";
    }

    include_once('../publish/connect.php'); //call db


    //Truy vấn đơn yc
    $kq = mysqli_query($conn, $sql);
    //Chuyển kq thành chuỗi
    if (mysqli_num_rows($kq) > 0) {
        $don = mysqli_fetch_array($kq);
    }
    ?>


    <div style="width: 1000px; text-align:center">
        <table style="width: 100%; ">
            <tr>
                <td style="width: 50%; text-align: center;">
                    <p><?php echo $don['kinhgui'] ?></p>
                    <p>-------------</p>
                    <p>Số:......../....-XNTTHN</p>
                </td>
                <td style="width: 50%; text-align:center">
                    <p><b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</b></p>
                    <p>Độc lập - Tự do - Hạnh phúc</p>
                    ----------------------
                    <p>..................,ngày......tháng.......năm.....</p>
                </td>
            </tr>

        </table>
        <table style="width: 100%;text-align: center;">
            <tr>
                <td style="text-align: center;"><b>GIẤY XÁC NHẬN TÌNH TRẠNG HÔN NHÂN</b></td>
            </tr>
            <tr>
                <td><?php echo $don['kinhgui'] ?></td>
            </tr>
        </table>
        <table style="width: 100%;text-align: center;">
            <tr>
                <td style="text-align: center;">Xét đề nghị của ông/bà:..........................Chức vụ:..........................,</b></td>
            </tr>
            <tr>
                <td style="text-align: center;">về việc cấp Giấy xác nhận tình trạng hôn nhân cho công dân: <?php echo $don['hoten'] ?> </td>
            </tr>
            <tr>
                <td><b>XÁC NHẬN:</b></td>
            </tr>
        </table>
        <table style="width: 100%;text-align: left;">
            <tr>
                <td style="width: 100%;text-align: left; ">
                    <b>Họ, chữ đệm, tên:</b> <?php echo $don['hoten'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Ngày, tháng, năm sinh:</b> <?php echo $don['ngaysinh'] ?>
                </td>
            </tr>
        </table>

        <table style="width: 100%;text-align: left;">
            <tr>
                <td style="text-align: left;">
                    Giới tính:<?php echo $don['gioitinh'] ?>
                </td>

                <td style="text-align: center;">
                    Dân tộc: <?php echo $don['dantoc'] ?>
                </td>

                <td style="text-align: right;">
                    Quốc tịch:<?php echo $don['quoctich'] ?>
                </td>
            </tr>
        </table>

        <table style="width: 100%;text-align: left;">
            <tr>
                <td>Giấy tờ tùy thân:<?php echo $don['CMND'] ?> </td>
            </tr>
            <tr>
                <td>Nơi cư trú:<?php echo $don['noicutru'] ?></td>
            </tr>
            <tr>
                <td>Trong thời gian cư trú tại </td>
            </tr>
            <tr>
                <td>Từ ngày</td>
                <td>tháng </td>
                <td>năm</td>
                <td>, đến ngày </td>
                <td>tháng</td>
                <td>năm </td>

            </tr>
            <tr>
                <td>
                    Tình trạng hôn nhân:<?php echo $don['TTHN'] ?>
                </td>
            </tr>
            <tr style="width: 100%;text-align: left;" F>
                <td>
                    Giấy này có giá trị sử dụng trong thời hạn 6 tháng kể từ ngày cấp được sử dụng để <?php echo $don['mucdich'] ?>
                </td>
            </tr>
            <br>
        </table>
        <table style="width: 100%;text-align: right;">
            <tr>
                <td style="text-align: right; padding-right: 95px;">NGƯỜI KÝ GIẤY XÁC NHẬN</td>
            </tr>
            <tr>
                <td style="text-align: right; padding-right: 57px;">(Ký, ghi rõ họ tên, chức vụ và đóng dấu)</td>
            </tr>

        </table>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>