<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $guests_adult = $_POST['guests_adult'];
   $guests_kid = $_POST['guests_kid'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $query = " insert into book_form(name, email, phone, address, guests_adult, guests_kid, arrivals, leaving) values('$name','$email','$phone','$address','$guests_adult','$guests_kid','$arrivals','$leaving') ";
   mysqli_query($connection, $query);
   session_start();
   $_SESSION['success_message'] = "đặt vé thành công, chúc bạn có một kì nghỉ thật vui vẻ.";
   header('location:book.php');
} else {
   echo 'something went wrong please try again!';
}
