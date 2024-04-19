<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="./images/logo.jpg">
   <title>Khu du lịch Lái Thiêu</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/logo.jpg"></a>

   <nav class="navbar">
      <a href="home.php">trang chủ</a>
      <a href="about.php">giới thiệu</a>
      <a href="package.php" class="active">dịch vụ</a>
      <a href="book.php">đặt vé</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(https://scontent.fdad1-2.fna.fbcdn.net/v/t39.30808-6/437881120_439253945306108_255715645178343792_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=qbgVDuff9q4Ab6Ata4G&_nc_ht=scontent.fdad1-2.fna&oh=00_AfDMpj-TnlHWoRuH9dpOd-ijQzw9feZ6hGqeykWgWqHFkQ&oe=6625C819) no-repeat">
   <h1>Những dịch vụ của chúng tôi</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h2 class="heading-title">những dịch vụ hàng đầu</h2>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/sv1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Chèo Sup</h3>
            <p>Tham gia vào trải nghiệm Chèo Sup - một hoạt động thú vị trên mặt nước, khám phá cảm giác hồi hộp và thư giãn trên tấm bảng sup.</p>
            <!-- <h2>BDT 10,900</h2> -->
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/sv2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bắn cung</h3>
            <p>Tham gia vào cuộc thi bắn cung để thử thách kỹ năng và sự tập trung của bạn, tạo ra những khoảnh khắc đầy kích thích và hứng khởi</p>
            <!-- <h2>BDT 9,900</h2> -->
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/sv6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Team building</h3>
            <p>Tham gia vào các hoạt động tập thể sôi động, xây dựng tinh thần đồng đội và tạo ra những kỷ niệm đáng nhớ cùng nhau.</p>
            <!-- <h2>BDT 12,900</h2> -->
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>
<!-- ---------------------------------------------------------------------------------------------------- -->
<div class="box">
   <div class="image">
      <img src="images/sv4.jpg" alt="">
   </div>
   <div class="content">
      <h3>Tiệc đồ nướng BBQ</h3>
      <p>Thưởng thức hương vị tuyệt vời của các món nướng BBQ tươi ngon, từ thịt đến rau củ, tạo nên bữa tiệc ấm cúng và đầy hấp dẫn.</p>
      <!-- <h2>BDT 13,900</h2> -->
      <a href="book.php" class="btn">Đặt ngay</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/sv7.jpg" alt="">
   </div>
   <div class="content">
      <h3>Hải sản tươi ngon</h3>
      <p>Thưởng thức hương vị tươi ngon của các loại hải sản đa dạng và tươi mới, mang lại trải nghiệm ẩm thực đích thực tại chỗ.</p>
      <!-- <h2>BDT 13,900</h2> -->
      <a href="book.php" class="btn">Đặt ngay</a>
   </div>
</div>

<div class="box">
   <div class="image">
      <img src="images/sv8.jpg" alt="">
   </div>
   <div class="content">
      <h3>Thực phẩm chất lượng</h3>
      <p>Khám phá và thưởng thức những món ăn ngon được chế biến tỉ mỉ và cẩn thận để đảm bảo sự ngon miệng và an toàn dinh dưỡng.</p>
      <!-- <h2>BDT 13,900</h2> -->
      <a href="book.php" class="btn">Đặt ngay</a>
   </div>
</div>

<!-- ---------------------------------------------------------------------------------------------------- -->
<div class="box">
         <div class="image">
            <img src="images/sv9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Trái cây đa đạng</h3>
            <p>Khám phá sự đa dạng của hơn 100 loại trái cây từ mọi miền đất nước, tạo nên một trải nghiệm thú vị và màu sắc cho việc tham quan.</p>
            <!-- <h2>BDT 12,900</h2> -->
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/sv10.jpg" alt="">
         </div>
         <div class="content">
            <h3>hơn 100 loại</h3>
            <p>Thưởng thức đa dạng hơn 100 loại trái cây, mỗi loại đều đẹp mắt và đặc sắc trong không gian khu du lịch.</p>
            <!-- <h2>BDT 12,900</h2> -->
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/sv11.jpg" alt="">
         </div>
         <div class="content">
            <h3>từ mọi miền đất nước</h3>
            <p>Được thu hái từ khắp các vùng miền của đất nước tạo nên một cảm giác thú vị và gần gũi với văn hóa địa phương.</p>
            <!-- <h2>BDT 12,900</h2> -->
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>

<!-- ---------------------------------------------------------------------------------------------------- -->

      <div class="box">
         <div class="image">
            <img src="images/sv3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Cắm trại</h3>
            <p>Khám phá hành trình cắm trại đầy mạo hiểm và thú vị, tận hưởng không gian tự nhiên và trải nghiệm cuộc sống ngoài trời tuyệt vời.</p>
            <!-- <h2>BDT 11,900</h2> -->
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>


      <div class="box">
         <div class="image">
            <img src="https://scontent.fdad1-2.fna.fbcdn.net/v/t39.30808-6/430307004_845944137563805_2698972609905042077_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=DSzffFbXQVsAb6xeO4i&_nc_ht=scontent.fdad1-2.fna&oh=00_AfDEuaKf1ZXZj7FaHYa2aoIlu40-wrL475xjkLymr6sqPg&oe=6626EB10" alt="">
         </div>
         <div class="content">
            <h3>qua đêm</h3>
            <p>Thỏa sức khám phá và tận hưởng một đêm trong không gian yên bình và tràn đầy kỷ niệm cho chuyến đi của bạn</p>
            <!-- <h2>BDT 7,900</h2> -->
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>


      <div class="box">
         <div class="image">
            <img src="images/sv13.jpg" alt="">
         </div>
         <div class="content">
            <h3>đa dạng sự lựa chọn</h3>
            <p>Thỏa sức lựa chọn không gian cắm trại phù hợp với sở thích và nhu cầu của bạn, từ lều trại đến nhà đều thỏa sức cho bạn lựa chọn.</p>
            <!-- <h2>BDT 12,900</h2> -->
            <a href="book.php" class="btn">Đặt ngay</a>
         </div>
      </div>
   </div>
   <div class="load-more"><span class="btn">xem thêm</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>đường dẫn nhanh</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> trang chủ</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> giới thiệu</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> dịch vụ</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> đặt vé</a>
      </div>
      <div class="box">
         <h3>liên kết bổ sung</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> về chúng tôi</a>
         <a href="#"> <i class="fas fa-angle-right"></i> đặt câu hỏi</a>
         <a href="#"> <i class="fas fa-angle-right"></i> điều khoản sử dụng</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Chính sách bảo mật</a>
      </div>
      <div class="box">
         <h3>Thông tin liên hệ</h3>
         <a href="#"> <i class="fas fa-phone"></i> +090 259 57 79 </a>
         <a href="#"> <i class="fas fa-phone"></i> +090 353 45 68 </a>
         <a href="#"> <i class="fas fa-envelope"></i> Dchoan1976@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Hoà Phú, Hòa Vang, Đà Nẵng  </a>
      </div>
      <div class="box">
         <h3>theo dõi chúng tôi</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit">được thiết kế bởi <span>Awesome Knight</span></div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/loadmore.js"></script>

</body>
</html>