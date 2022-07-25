<?php 
 include 'connect.php';
 if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];

    $sql = "delete from users_tb where user_id = $id";
    $result = mysqli_query($connection , $sql);

    if($result){
        header('location: display.php');
    }
    else{
        die(mysqli_error($connection));
    }
 }


?>