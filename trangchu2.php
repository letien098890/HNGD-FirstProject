<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
<!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>ADMIN</title>
</head>
<body>
  <div>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
}
.button {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
  background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
  background-color:#ededed;
  -webkit-border-top-left-radius:6px;
  -moz-border-radius-topleft:6px;
  border-top-left-radius:6px;
  -webkit-border-top-right-radius:6px;
  -moz-border-radius-topright:6px;
  border-top-right-radius:6px;
  -webkit-border-bottom-right-radius:6px;
  -moz-border-radius-bottomright:6px;
  border-bottom-right-radius:6px;
  -webkit-border-bottom-left-radius:6px;
  -moz-border-radius-bottomleft:6px;
  border-bottom-left-radius:6px;
  text-indent:0;
  border:1px solid #dcdcdc;
  display:inline-block;
  color:#777777;
  font-family:Times New Roman;
  font-size:15px;
  font-weight:normal;
  font-style:normal;
  height:25px;
  line-height:25px;
  width:100px;
  text-decoration:none;
  text-align:center;
  text-shadow:1px 1px 0px #ffffff;
}
.button:hover {
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
  background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
  background-color:#dfdfdf;
}.button:active {
  position:relative;
  top:1px;
}
/* This button was generated using http://tools.ngoisaoso.vn/css3button/ */


#menu {
        font-size: 15px;
    color: white;
    padding: 5px 5px 0 5px;
    background-color: #FF6600;
    height: 30px;
    top: 89px;
    right: 0px;
   text-align: right;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
#menu a{
  color: white;
  padding: 5px;
  text-decoration: none;
  text-align: center;
  
  right: 5px;

}
.h1{
  font-family: arial;
  width: 300px;
  height: 50px;
  padding-left: 10px;
  font-size: 20px;
  font-weight: bold;
  text-align: justify;
}
.h2{
    font-family: arial;
  width: 700px;
  height: 150px;
  padding-left: 10px;
  font-size: 18px;
  text-align: justify;
  padding-top: 5px;
}
#news-block-title {
    font-size: 18px;
        border-bottom: 1px solid #cd2122;
        position: relative;
        left: 300px;
        font-size: 30px;
        top: 50px;

}
p{
  padding-top: 10px;
  font-size: 16px;
  font-weight: normal;
}
.a3{
  font-size: 20px;
  text-decoration: none;
  font-style: bold;
  color: black;
  font-size: 20px;
}
.a3:hover{
  color: #CD2122;
}
.tr{
      margin: 0 0 30px;
    overflow: hidden;
    list-style-type: none;
}
    </style>
    <div align="center">
        <a href="">
            <img src="img/logo.png">
        </a>
    </div>
<div id="menu">
    
    <a href="trangchu2.php">Trang Ch???</a>
    |
    <a href="view/quanlydon.php">Qu???n l?? ????n</a>
    |
    <a href="register.php">T???o T??i Kho???n C??ng D??n</a>
    |
    
      Quy???n ADMIN -
    <a href="login.php">Tho??t</a>
    
    <!-- <div class="text-center p-t-90">
						<p class="" style="color: white">B???n ch??a c?? t??i kho???n.
						<a class="" style="color: white" href="http://localhost/honnhangiadinh/register.php">
							<u>Sign up?</u>
						</a></p>

					</div> -->
</div>
</div>
<div >
<span style="z-index: -1; " id="news-block-title">Qu???n L?? ????n ????ng K?? X??c Nh???n T??nh Tr???ng H??n Nh??n </span>


<div align="center" style="padding-top: 20px">
<table style="position: relative; top: 80px;" width="1000px">
<tr class="tr">
      <td class="" rowspan="2"><img height="250px" src="img/h1.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://phunuvietnam.vn/hai-con-nguoi-khuyet-thieu-hanh-phuc-tim-thay-tinh-yeu-20210602154014118.html">
      2 con ng?????i khuy???t thi???u h???nh ph??c t??m th???y t??nh y??u</a>
        
                      <p>31/05/2021</p>
</td >
      <tr><td class="h2" >C?? - ng?????i ph??? n??? t???ng ch??m trong n???i ??au m???t ch???ng g???n ch???c n??m. Anh - ng?????i ????n ??ng t???ng c???m th???y m???t ni???m tin v?? gia ????nh ????? v???. H??? ??ang vun v??n cho m??i ???m h???nh ph??c c???a m??nh. K???t qu??? ???? l?? do h??? kh??ng s??? c??? g???ng v?? ???? l?? s??? c??? g???ng x???ng ????ng nh???t...</td></tr>
    </tr>

    <tr>
      <td class="" rowspan="2"><img height="250px" src="img/h2.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://baochinhphu.vn/Phap-luat/Tang-cuong-xu-ly-thong-tin-pham-luat-tren-mang-xa-hoi/432791.vgp">
      T??ng c?????ng x??? l?? th??ng tin ph???m lu???t tr??n m???ng x?? h???i</a>
        
                      <p>15/04/2021</p>
</td >
      <tr><td class="h2" > B??? Th??ng tin v?? Truy???n th??ng (TT&TT) v???a c?? v??n b???n g???i UBND c??c t???nh, th??nh ph??? tr???c thu???c Trung ????ng v??? vi???c t??ng c?????ng c??ng t??c qu???n l??, x??? l?? th??ng tin vi ph???m tr??n m???ng x?? h???i. ...</td></tr>
    </tr>
<tr>
      <td class="" rowspan="2"><img height="250px" src="img/h3.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://baochinhphu.vn/Bao-hiem-xa-hoi/Chan-chinh-cong-tac-xet-duyet-huong-che-do-om-dau-thai-san/433387.vgp">
      Ch???n ch???nh c??ng t??c x??t duy???t h?????ng ch??? ????? ???m ??au, thai s???n</a>
        
                      <p>14/05/2020</p>
</td >
      <tr><td class="h2" >BHXH Vi???t Nam cho bi???t, m???t s??? c?? s??? kh??m ch???a b???nh (KCB) th???c hi???n c???p ch???ng t??? h?????ng BHXH kh??ng ????ng quy ?????nh cho ng?????i lao ?????ng (NL??) ????? thanh to??n ch??? ????? BHXH, c?? tr?????ng h???p tr???c l???i ch??nh s??ch, vi ph???m c??c quy ?????nh c???a ph??p lu???t v??? ch??nh s??ch an sinh x?? h???i....</td></tr>
    </tr>

<tr>
      <td class="" rowspan="2"><img height="250px" src="img/h4.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://baochinhphu.vn/Bao-hiem-xa-hoi/De-xuat-ho-tro-nguoi-lao-dong-khi-cach-ly-y-te-phong-chong-dich/433075.vgp">
      ????? xu???t h??? tr??? ng?????i lao ?????ng khi c??ch ly y t??? ph??ng ch???ng d???ch</a>
        
                      <p>4/6/2021</p>
</td >
      <tr><td class="h2" >????? k???p th???i gi???m b???t kh?? kh??n cho ng?????i tham gia BHXH trong ?????i d???ch COVID-19, BHXH Vi???t Nam v???a ????? xu???t ch??nh s??ch h??? tr??? ng?????i lao ?????ng (NL??) tham gia b???o hi???m th???t nghi???p (BHTN) thu???c di???n F1, F2 ph???i c??ch ly y t??? theo quy???t ?????nh c???a c?? quan c?? th???m quy???n....</td></tr>
    </tr>
  </table>
</div>
</div>
</body>
</html>