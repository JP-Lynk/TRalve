<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="./images/logo.jpg">
   <title>Khu du lịch Lái Thiêu</title>

    <!-- Boostrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="ticket.css">


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
      <a href="package.php">dịch vụ</a>
      <a href="book.php" class="active">đặt vé</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<div class="heading" style="background:url(https://scontent.fdad2-1.fna.fbcdn.net/v/t39.30808-6/417410600_405845865313583_6924256909938412673_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=DV76WTR5GwsAb7MVAbT&_nc_ht=scontent.fdad2-1.fna&oh=00_AfAkHoFcf1mCe9eRKP8w7cklQ0R7rz1Kmjyrth0t36Izcg&oe=66259FF6) no-repeat">
   <h1>ĐẶT CHUYẾN ĐI CỦA BẠN NGAY BÂY GIỜ</h1>
</div>


<!-- booking section starts  -->

<section class="booking">
    <div class="price"> 
        <!-- <h2>Bảng giá</h2> -->
        <img src="./images/White Illustrated Pet Shop Logo.png" alt="">
    </div>
    <hr>
    <br>
    <br>

    <h2>biểu mẫu đặt chỗ</h2>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: #18c218; text-align: center;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>họ và tên:</span>
            <input type="text" placeholder="Nhập họ và tên của bạn" name="name">
         </div>
         <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="Nhập email của bạn" name="email">
         </div>
         <div class="inputBox">
            <span>số điện thoại:</span>
            <input type="number" placeholder="Nhập số điện thoại của bạn" name="phone">
         </div>
         <div class="inputBox">
            <span>gói dịch vụ:</span>
            <input type="text" placeholder="Nhập dịch vụ mà bạn muốn chọn" name="address">
         </div>
         <div class="inputBox">
            <span>số lượng người lớn:</span>
            <input type="number" placeholder="Nhập số lượng người lớn" name="guests_adult">
         </div>
         <div class="inputBox">
            <span>số lượng trẻ em:</span>
            <input type="number" placeholder="Nhập số lượng trẻ em" name="guests_kid">
         </div>
         <div class="inputBox">
            <span>ngày đến:</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>ngày đi:</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="đặt ngay" class="btn" name="send">

   </form>
   <div class="table_container">
      <center><h1>Thông tin đặt vé</h1></center>
      <table class="table table-hover table-bordered table-striped">
                  <thead>
                      <tr>
                          <th style="text-align: center;">Tên</th>
                          <!-- <th>Email</th> -->
                          <th style="text-align: center;">Só điện thoại</th>
                          <th style="text-align: center;">gói dịch vụ</th>
                          <th style="text-align: center;">người lớn</th>
                          <th style="text-align: center;">trẻ em</th>
                          <th style="text-align: center;">ngày đến</th>
                          <th style="text-align: center;">ngày đi</th>
                          <th style="text-align: center;">thông tin chi tiết</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $connection = mysqli_connect('localhost','root','','book_db');
                      $query = "select * from `book_form`";
                      $result = mysqli_query($connection, $query);
                      if (!$result) {
                          die("query failed".mysqli_error($connection));
                      }
                      else{
                          while ($row = mysqli_fetch_assoc($result)) {    
                              ?>
                          <tr>
                              <td style="text-align: center;"><?php echo $row['name']; ?></td>
                              <!-- <td style="text-align: center;"><?php echo $row['email']; ?></td> -->
                              <td style="text-align: center;"><?php echo $row['phone']; ?></td>
                              <td style="text-align: center;"><?php echo $row['address']; ?></td>
                              <td style="text-align: center;"><?php echo $row['guests_adult']; ?></td>
                              <td style="text-align: center;"><?php echo $row['guests_kid']; ?></td>
                              <td style="text-align: center;"><?php echo $row['arrivals']; ?></td>
                              <td style="text-align: center;"><?php echo $row['leaving']; ?></td>
                              <td style="text-align: center;">
                                <i class="fa-solid fa-eye" data-bs-toggle="modal" data-bs-target="#exampleModal"></i> |
                                <a href="book_delete.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></i></a>
                              </td>
                          </tr>
                              <?php
                          }
                      }
                      ?>
                  </tbody>
      </table>
   </div>
</section>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- booking section ends -->
<!-- booking information start -->
   <!-- Model -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin vé đặt</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="blocks">
                            <div class="right">
                                <div class="trip-detail-container">
                                    <div class="one-way-container">
                                        <!-- <h3 class="trip-detail-title">Ticket Information</h3> -->

                                            <table width="275%" style="height: 200px;">
                                                <?php
                                                   $connection = mysqli_connect('localhost','root','','book_db');
                                                   $query = "select * from `book_form`";
                                                   $result = mysqli_query($connection, $query);
                                                   if (!$result) {
                                                       die("query failed".mysqli_error($connection));
                                                   }
                                                   else{
                                                    while ($row = mysqli_fetch_assoc($result)) {    
                                                        ?>
                                                       <tr>
                                                           <td>Họ và tên</td>
                                                           <td><?php echo $row['name']; ?></td>
                                                       </tr>
                                                       <tr>
                                                           <td>Email</td>
                                                           <td><?php echo $row['email']; ?></td>
                                                       </tr>
                                                       <tr>
                                                           <td>số điện thoại</td>
                                                           <td><?php echo $row['phone']; ?></td>
                                                       </tr>
                                                       <tr>
                                                           <td>gói dịch vụ</td>
                                                           <td><?php echo $row['address']; ?></td>
                                                       </tr>
                                                       <tr>
                                                           <td>số lượng người lớn</td>
                                                           <td><?php echo $row['guests_adult']; ?></td>
                                                       </tr>
                                                       <tr>
                                                           <td>số lượng trẻ em</td>
                                                           <td><?php echo $row['guests_kid']; ?></td>
                                                       </tr>
                                                       <tr>
                                                           <td>ngày đến</td>
                                                           <td><?php echo $row['arrivals']; ?></td>
                                                       </tr>
                                                       <tr>
                                                           <td>ngày đi</td>
                                                           <td><?php echo $row['leaving']; ?></td>
                                                       </tr>
                                                        <?php
                                                    }
                                                   }
                                                ?>  
                                            </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>

<!-- booking information end -->
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
   <div class="credit"> được thiết kế bởi <span>Awesome Knight</span></div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- Bootrap js file link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>