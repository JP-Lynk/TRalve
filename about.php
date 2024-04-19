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
      $(document).ready(function() {
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
         <a href="about.php" class="active">giới thiệu</a>
         <a href="package.php">dịch vụ</a>
         <a href="book.php">đặt vé</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-6/437904102_439201575311345_4073619155064146654_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=SJNJRjQdb4YAb6Kw8VJ&_nc_ht=scontent.fdad1-3.fna&oh=00_AfDx7P3lHPr5oR7JF8XL5R314_a1-O4_LL0xPb9tYvA3gQ&oe=6625BFF1) no-repeat">
      <h1>Thông tin về chúng tôi</h1>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="image">
         <img src="./images/map.jpg" alt="">
      </div>

      <div class="content">
         <h3>tại sao chọn chúng tôi?</h3>
         <ul>
            <li>Khu du lịch sinh thái Lái Thiêu - Green world Đà Nẵng được thi công hơn 10 năm và đi vào hoạt động du lịch từ năm 2017. Đây là một khu du lịch trẻ nên sẽ có tiềm năng phát triển hơn trong tương lai.</li>
            <li>Diện tích rộng, có suối tự nhiên, nhiều cây cối và rừng, không khí mát mẻ.</li>
            <li>Có hơn 100 lại cây từ khắp cả nước.</li>
            <li>Gần khu du lịch phát triển tại Đà Nẵng như Hòa Phú thành và núi thần tài.</li>
            <li>Có nguồn nhân công dồi dào.</li>
            <li>Nơi nghỉ ngơi tuyệt vời cho mọi người, Dịch vụ tốt - đa dạng, Chất lượng phục vụ tuyệt vời.</li>
         </ul>
         <div class="icons-container">
            <div class="icons">
               <i class="fas fa-map"></i>
               <span>điểm đến hàng đầu</span>
            </div>
            <div class="icons">
               <i class="fas fa-headset"></i>
               <span>Dịch vụ 24/7</span>
            </div>
            <div class="icons">
               <i class="fas fa-hand-holding-usd"></i>
               <span>giá cả hợp lý</span>
            </div>
         </div>
      </div>

   </section>

   <!-- about section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="heading-title"> đánh giá của khách hàng </h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Đã đi nhiều lần rồi đẹp lắm ạ.</p>
               <h3>Lê Diệu Hương</h3>
               <span>khách du lịch</span>
               <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-6/364197075_2901816869951083_6489047784492689475_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=FKRmK5ieabgAb4vgBeg&_nc_ht=scontent.fdad1-3.fna&oh=00_AfAzsx2VjG8i1DwVXvVBUwMHOMzPUp3kRaK1kaQeQjOEPg&oe=6625CDFA" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Ôi lái thiêu nè bữa công ty mình có tổ chức team buildings ở đây cảnh đẹp mà cười toe mỏ</p>
               <h3>Ngo Van Chi </h3>
               <span>khách du lịch</span>
               <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-1/359112916_115216011629105_5795107016376323033_n.jpg?stp=c7.7.146.146a_dst-jpg_p160x160&_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=dOX_jTBIq9UAb5EFMAr&_nc_ht=scontent.fdad1-3.fna&oh=00_AfCJ59T5zdCLc_J4hSTEc2xUeDUG3Uv_invWIeJtBuXwFw&oe=6625CADC" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Cảnh đẹp , tuy nhiên nhân viên quầy vé không thân thiện , không thiện chí với khách hàng.</p>
               <h3>Phuc Pham Hoang</h3>
               <span>khách du lịch</span>
               <img src="images/pic-6.png" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Cảnh đẹp, suối mát, yên bình, khách được mang đồ ăn theo, bên trong còn có khu vườn cây ăn trái hơn 100 loại cây: xoài, chôm chôm, thơm, sơ ri...</p>
               <h3>Ngọc Thắm</h3>
               <span>khách du lịch</span>
               <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-1/431683992_1460191458209561_2819089179568196250_n.jpg?stp=dst-jpg_s148x148&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=ykVsR54kXu0Ab6o6Pty&_nc_ht=scontent.fdad1-3.fna&oh=00_AfA8l2U5SbHL3L9NqrBT-iNRLBoVcNLSsA9LclMm5CXP0A&oe=6625D63F" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Mát mẻ, 1 số cây đã cho quả. Suối ngăn thành hồ, tương đối an toàn. Thích hợp hoạt động dã ngoại, cắm trại. Lưu ý muỗi nhiều do cây um tùm</p>
               <h3>Phương Phương</h3>
               <span>khách du lịch</span>
               <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-1/430861673_2453484431523020_5741765490424728740_n.jpg?stp=dst-jpg_s148x148&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=D4ynEkTk1asAb5t2Xmw&_nc_ht=scontent.fdad1-3.fna&oh=00_AfCn9clYDJWNA9ds6lScjZJXx6khdr7HUW3y6uLHIs_9aA&oe=6625BE45" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Đúng nghĩa sinh thái, view đẹp, mát, nhiều cây ăn trái, trải nghiệm. Giá vé ko cao Nhưng nhiều phí chồng chéo nhau: phí vào cổng, phí ở lại đêm, phí sân bãi nếu cần,...</p>
               <h3>HƯNG ĐÀM</h3>
               <span>khách du lịch</span>
               <img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-1/428604758_2679588775536991_7771862535410574304_n.jpg?stp=c41.0.148.148a_cp6_dst-jpg_p148x148&_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=b5WA4NMvUxwAb7gna_a&_nc_ht=scontent.fdad2-1.fna&oh=00_AfB7rW6wxPs8FE4fCh60vmWWLYjxDvc-FMB939-hVZpP9w&oe=6625D589" alt="">
            </div>

         </div>

      </div>

   </section>

   <!-- reviews section ends -->
   <!-- map section start -->
   <section class="about">
      <div class="content">
         <h3> đường đi đến khu du lịch lái thiêu </h3>
         <ul>
            <li>Khu du lịch sinh thái Lái Thiêu - Green world Đà Nẵng có địa chỉ trực thuộc tại <b>XX4F+9PM, QL14G, Hoà Phú, Hòa Vang, Đà Nẵng</b> </li>
            <li>Từ trung tâm thành phố, bạn hãy di chuyển về hướng cầu vượt Hòa Cầm, sau đó đi thẳng theo QL 14B về phía cao tốc Đà Nẵng - Quảng Ngãi. Đến gần cao tốc có một con đường nhỏ thì rẽ vào và đi tới Hòa Phú, đi thêm khoảng 20km nữa là tới.</li>
            <li>Thời gian phù hợp ghé thăm: Du khách có thể tới vườn trái cây Lái Thiêu vào khoảng từ tháng 6 đến tháng 9 hằng năm. Lúc này, tiết trời Đà Nẵng khá khô ráo, ít mưa, rất thuận tiện để trải nghiệm các hoạt động vui chơi, dã ngoại, picnic và kết hợp tham quan các địa điểm du lịch Đà Nẵng. </li>
         </ul>
         <div class="icons-container">
            <div class="icons">
               <i class="fas fa-map"></i>
               <span>điểm đến hàng đầu</span>
            </div>
            <div class="icons">
               <i class="fas fa-headset"></i>
               <span>Dịch vụ 24/7</span>
            </div>
            <div class="icons">
               <i class="fas fa-hand-holding-usd"></i>
               <span>giá cả hợp lý</span>
            </div>
         </div>
      </div>

      <div class="image">
         <img src="./images/map2.jpg" alt="">
      </div>


   </section>
   <!-- map section end -->


   <!-- footer section starts  -->
   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

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
            <a href="#"> <i class="fas fa-map"></i> Hoà Phú, Hòa Vang, Đà Nẵng </a>
         </div>
         <div class="box">
            <h3>theo dõi chúng tôi</h3>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         </div>
      </div>
      <div class="credit"> được thiết kế bởi <span>Awesome Knight</span> </div>
   </section>

   <!-- footer section ends -->
   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>