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
    
    <a href="trangchu2.php">Trang Chủ</a>
    |
    <a href="view/quanlydon.php">Quản lý Đơn</a>
    |
    <a href="register.php">Tạo Tài Khoản Công Dân</a>
    |
    
      Quyền ADMIN -
    <a href="login.php">Thoát</a>
    
    <!-- <div class="text-center p-t-90">
						<p class="" style="color: white">Bạn chưa có tài khoản.
						<a class="" style="color: white" href="http://localhost/honnhangiadinh/register.php">
							<u>Sign up?</u>
						</a></p>

					</div> -->
</div>
</div>
<div >
<span style="z-index: -1; " id="news-block-title">Quản Lý Đơn Đăng Kí Xác Nhận Tình Trạng Hôn Nhân </span>


<div align="center" style="padding-top: 20px">
<table style="position: relative; top: 80px;" width="1000px">
<tr class="tr">
      <td class="" rowspan="2"><img height="250px" src="img/h1.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://phunuvietnam.vn/hai-con-nguoi-khuyet-thieu-hanh-phuc-tim-thay-tinh-yeu-20210602154014118.html">
      2 con người khuyết thiếu hạnh phúc tìm thấy tình yêu</a>
        
                      <p>31/05/2021</p>
</td >
      <tr><td class="h2" >Cô - người phụ nữ từng chìm trong nỗi đau mất chồng gần chục năm. Anh - người đàn ông từng cảm thấy mất niềm tin vì gia đình đổ vỡ. Họ đang vun vén cho mái ấm hạnh phúc của mình. Kết quả đó là do họ không sợ cố gắng và đó là sự cố gắng xứng đáng nhất...</td></tr>
    </tr>

    <tr>
      <td class="" rowspan="2"><img height="250px" src="img/h2.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://baochinhphu.vn/Phap-luat/Tang-cuong-xu-ly-thong-tin-pham-luat-tren-mang-xa-hoi/432791.vgp">
      Tăng cường xử lý thông tin phạm luật trên mạng xã hội</a>
        
                      <p>15/04/2021</p>
</td >
      <tr><td class="h2" > Bộ Thông tin và Truyền thông (TT&TT) vừa có văn bản gửi UBND các tỉnh, thành phố trực thuộc Trung ương về việc tăng cường công tác quản lý, xử lý thông tin vi phạm trên mạng xã hội. ...</td></tr>
    </tr>
<tr>
      <td class="" rowspan="2"><img height="250px" src="img/h3.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://baochinhphu.vn/Bao-hiem-xa-hoi/Chan-chinh-cong-tac-xet-duyet-huong-che-do-om-dau-thai-san/433387.vgp">
      Chấn chỉnh công tác xét duyệt hưởng chế độ ốm đau, thai sản</a>
        
                      <p>14/05/2020</p>
</td >
      <tr><td class="h2" >BHXH Việt Nam cho biết, một số cơ sở khám chữa bệnh (KCB) thực hiện cấp chứng từ hưởng BHXH không đúng quy định cho người lao động (NLĐ) để thanh toán chế độ BHXH, có trường hợp trục lợi chính sách, vi phạm các quy định của pháp luật về chính sách an sinh xã hội....</td></tr>
    </tr>

<tr>
      <td class="" rowspan="2"><img height="250px" src="img/h4.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://baochinhphu.vn/Bao-hiem-xa-hoi/De-xuat-ho-tro-nguoi-lao-dong-khi-cach-ly-y-te-phong-chong-dich/433075.vgp">
      Đề xuất hỗ trợ người lao động khi cách ly y tế phòng chống dịch</a>
        
                      <p>4/6/2021</p>
</td >
      <tr><td class="h2" >Để kịp thời giảm bớt khó khăn cho người tham gia BHXH trong đại dịch COVID-19, BHXH Việt Nam vừa đề xuất chính sách hỗ trợ người lao động (NLĐ) tham gia bảo hiểm thất nghiệp (BHTN) thuộc diện F1, F2 phải cách ly y tế theo quyết định của cơ quan có thẩm quyền....</td></tr>
    </tr>
  </table>
</div>
</div>
</body>
</html>