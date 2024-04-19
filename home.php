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
   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
         <a href="home.php" class="active">trang chủ</a>
         <a href="about.php">giới thiệu</a>
         <a href="package.php">dịch vụ</a>
         <a href="book.php">đặt vé</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- header section ends -->
   <!-- home section starts  -->
   <section class="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(https://scontent.fdad1-2.fna.fbcdn.net/v/t39.30808-6/437881120_439253945306108_255715645178343792_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=2qsWvN4VJ3sAb73deut&_nc_ht=scontent.fdad1-2.fna&oh=00_AfD5_RU9_0vELZVEogfnI2I9wcu2cmKQ4cxXUSH9Tn60HQ&oe=66255799) no-repeat">
               <div class="content">
                  <span>tìm kiếm - trải nghiệm - tham quan</span>
                  <h3>khu du lịch sinh thái lái thiêu</h3>
                  <a href="package.php" class="btn">thông tin chi tiết</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(https://scontent.fdad1-2.fna.fbcdn.net/v/t39.30808-6/437881120_439253945306108_255715645178343792_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=qbgVDuff9q4Ab6Ata4G&_nc_ht=scontent.fdad1-2.fna&oh=00_AfDMpj-TnlHWoRuH9dpOd-ijQzw9feZ6hGqeykWgWqHFkQ&oe=6625C819) no-repeat">
               <div class="content">
                  <span>tìm kiếm - trải nghiệm - tham quan</span>
                  <h3>sự lựa chọn hàng đầu cho những chuyến du lịch</h3>
                  <a href="package.php" class="btn">thông tin chi tiết</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-6/437951435_439253958639440_4948369115934440361_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=F9iVpKzeq2gAb426p_e&_nc_ht=scontent.fdad2-1.fna&oh=00_AfDMcQtiEVxRliFyYApr9O4FFF90eE7zaIjydeKURRitvA&oe=66257B59) no-repeat">
               <div class="content">
                  <span>tìm kiếm - trải nghiệm - tham quan</span>
                  <h3>điểm đến tuyệt vời cho mọi người </h3>
                  <a href="package.php" class="btn">thông tin chi tiết</a>
               </div>
            </div>
         </div>
         <!-- <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div> -->
      </div>
   </section>
   <!-- home section ends -->
      <!-- services section starts  -->
      <section class="services">
      <h1 class="heading-title"> dịch vụ của chúng tôi </h1>
      <div class="box-container">
         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tham quan</h3>
         </div>
         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>cắm trại</h3>
         </div>
         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>bắn cung</h3>
         </div>
         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>BBQ</h3>
         </div>
         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>trò chơi dưới nước</h3>
         </div>
         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>team building</h3>
         </div>
      </div>
   </section>
   <!-- services section ends -->
   <center>
      <div class="load-more"> <a href="package.php" class="btn">Xem thêm</a> </div>
   </center>
   <!-- home about section starts  -->
   <section class="home-about">
      <div class="image">
         <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-6/431627842_419358793962290_2671767453253737519_n.jpg?stp=cp6_dst-jpg&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=AKUlSOB4dxkAb7E0unH&_nc_ht=scontent.fdad1-3.fna&oh=00_AfAIIxZcJhG2pAASTZWBmZLSbWND-AidSjEYajDtlND4eA&oe=6625B729" alt="">
      </div>
      <div class="content">
         <h3>thông tin khu du lịch</h3>
         <p>Khu du lịch sinh thái Lái Thiêu - Green World Đà Nẵng là khu du lịch và cắm trại. Bên cạnh cầu Vàng Đà Nẵng, Hoà Phú Thành, Núi Thần Tài Đà Nẵng.
            Khu du lịch sinh thái Lái Thiêu là một trong những điểm check-in cực hot tại Đà Nẵng được nhiều người dân và khách du lịch ghé thăm hàng năm.</p>
         <a href="about.php" class="btn">xem thêm</a>
      </div>
   </section>
   <!-- home about section ends -->

   <!-- home gallery section starts  -->
<h1 class="heading-title">Một số hình ảnh về chúng tôi</h1>
<div class="gallery">
   <div class="swiper1 mySwiper">
       <div class="swiper-wrapper">
         <div class="swiper-slide">
           <img src="https://scontent.fdad1-2.fna.fbcdn.net/v/t39.30808-6/429568178_845945174230368_4850876803338327995_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=0wvWMUdPRdMAb7opaPN&_nc_ht=scontent.fdad1-2.fna&oh=00_AfDeRT8cl5XKxruTFoKv296D6sH__O-dcFDau-S7kpSfzQ&oe=6626C6FD" />
         </div>
         <div class="swiper-slide">
           <img src="https://scontent.fdad1-4.fna.fbcdn.net/v/t39.30808-6/430315892_845945380897014_3765221131955819872_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=gFk-KmVWi9AAb5Tv1Qn&_nc_ht=scontent.fdad1-4.fna&oh=00_AfCffDxPi7oA5txyX-iiHTh_rr0lyt6rbSCB7iQ6c4dE2Q&oe=6626D6B5" />
         </div>
         <div class="swiper-slide">
           <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-6/430283578_845945134230372_2216118734139669180_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Y1n3eah2rf0Ab4faR-g&_nc_ht=scontent.fdad1-3.fna&oh=00_AfCTBNmLZuRdezJPzE8aZdnK-30B4-q37xoICQsFHeuPgg&oe=6626DFD3" />
         </div>
         <div class="swiper-slide">
           <img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-6/430282794_845945404230345_4699179403994946142_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=nN2V0YSf2ygAb46eq4o&_nc_ht=scontent.fdad2-1.fna&oh=00_AfDNcERxAoNoPbzQeYocysdGluO-A1eF2gxH01M_9-B1CQ&oe=6626C2DB" />
         </div>
         <div class="swiper-slide">
           <img src="https://scontent.fdad1-2.fna.fbcdn.net/v/t39.30808-6/430334812_845945437563675_2324647831561671172_n.jpg?stp=cp6_dst-jpg&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=ZBqwNvzdkOEAb6K-Wcl&_nc_ht=scontent.fdad1-2.fna&oh=00_AfBvK2IE3Yv38OcPRhyHQLOhSZmpdhmtDfseivZl0ITgvQ&oe=6626E6A2" />
         </div>
         <div class="swiper-slide">
           <img src="https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-6/417452016_414055221159314_4965146190025556355_n.jpg?stp=cp6_dst-jpg&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=QtX9PECbbXkAb6g-kkS&_nc_ht=scontent.fdad1-3.fna&oh=00_AfBElFpa3twVsCldwkDsYiYThW8w-fVIkm8Trtz8rmrg2w&oe=6626C9C5" />
         </div>
         <div class="swiper-slide">
           <img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-6/417557684_414055141159322_4360996465764283999_n.jpg?stp=cp6_dst-jpg&_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=LooRvI70TQMAb7SFb4A&_nc_ht=scontent.fdad2-1.fna&oh=00_AfB5ONww4En42BXSEFRd8hgoD59PevuhJ8MY_77H9_z6_g&oe=6626D908" />
         </div>
         <div class="swiper-slide">
           <img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-6/417453736_414055111159325_2395884059622144678_n.jpg?stp=cp6_dst-jpg&_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=ZVM8gD-puaMAb58QOoo&_nc_ht=scontent.fdad2-1.fna&oh=00_AfCNUaT8RKdVDVbqJ-MIuUC5eCJMk6GFJkhJXPPqq01sLw&oe=6626D20A" />
         </div>
         <div class="swiper-slide">
           <img src="./images/imgs.jpg" />
         </div>
         <div class="swiper-slide">
           <img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-6/417487030_414055017826001_6965805453154236064_n.jpg?stp=cp6_dst-jpg&_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=RfQy6hLwzrcAb70xZXw&_nc_ht=scontent.fdad2-1.fna&oh=00_AfDZFJ9lSUypU3CfdrhuELCWC2BLbhZwzQwtlLCEmhPHYQ&oe=6626D38A" />
         </div>
       </div>
       <div class="swiper-pagination"></div>
     </div>
</div>

   <!-- home gallery section ends -->


   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
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
   <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>
</body>

</html>