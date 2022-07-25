<?php
 $connection = new mysqli('localhost' , 'root' , '', 'login');
if (!$connection){
    die(mysqli_error($connection));
}
?>