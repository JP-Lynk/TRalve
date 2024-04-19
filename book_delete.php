<?php
    if(isset($_GET["id"])){
        $connection = mysqli_connect('localhost', 'root', '', 'book_db');
        $id = $_GET["id"]; 
        $query = "DELETE FROM `book_form` WHERE `id` = '$id'";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
        else{
            header('location:book.php?delete_msg=Your data has been deleted succesfully!');
        }
    }

?>