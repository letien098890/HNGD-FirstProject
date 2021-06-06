<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
	$msv = $_GET['CMND'];
	include_once('../publish/connect.php');
	$sql="SELECT * From congdan Where CMND='$msv'";
	$kq=mysqli_query($conn,$sql);
	$pr=mysqli_fetch_array($kq);
	 ?>
	  <div align="center">
        <a href="">
            <img src="../img/logo.png">
        </a>
    </div>
        <div align="center">
           <form method="post" action="../model/updatesinhvien.php">

            <table>
    	   <tr>
              <td><input type="hidden" name="CMND" value="<?php echo $msv ?>"></td>
         </tr>
         <tr>
            <th>Username :</th>
            <td><input type="text" name="username" value="<?php echo $pr['username'] ?>"></td>
        </tr>
         <tr>
            <th>Password:</th>
            <td><input type="text" name="password" value="<?php echo $pr['password'] ?>"></td>
        </tr>
        <tr>
            <th>Họ tên:</th>
            <td><input type="text" name="hoten" value="<?php echo $pr['hoten'] ?>"></td>
        </tr>
        <tr>
            <th>Ngày sinh:</th>
            <td>  <input class="input99" type="date" name="ngaysinh" value="<?php echo $pr['ngaysinh'] ?>"></td>
        </tr>
        <tr>
            <th>Giới tính:</th>
            <td>  <div class="gt" data-validate = "">
            <input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
                <input  type="radio" name="gioitinh" value="Nữ">Nữ
            
          </div></td>
        </tr>
        <tr>
            <!-- <th>CMND:</th>
             <td>  <input class="input99" type="date" name="CMND" value="<?php echo $pr['CMND'] ?>"></td>
            	<select name='lop'> -->

                           <!-- <?php
//                            include_once('../publish/connect.php');
  
//   $sql='SELECT lop,tenkhoa FROM lophoc INNER JOIN khoa ON lophoc.makhoa = khoa.makhoa';
//   $kq=mysqli_query($conn,$sql);
//                                 include_once('model/lophoc_list.php');
//                                 while ($row=mysqli_fetch_array($kq)) {
//                                      echo "<option value=".$row['lop'].">".$row['lop']." - khoa: ".$row['tenkhoa']."</option>";
//                                 }
                        //     ?> -->
                        // </select>
             </td>
        </tr>
        <tr>
            <th>Noi Cư Trú:</th>
            <td>  <input class="input99" type="text" name="noicutru" value="<?php echo $pr['noicutru'] ?>"></td>
        </tr>
       <tr>
           
           
           <td colspan="2">    <input type="submit" name="" id="" value="Sửa"></td>
       </tr>
    </table>

        </form>
      </div>
      
</body>
</html>