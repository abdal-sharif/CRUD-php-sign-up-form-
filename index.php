
<?php
include 'connect.php';
if(isset ($_POST['submit'])){
    $user = $_POST['user-name'];
    $pass = $_POST['password'];

    $sql = "insert into `users_tb` (username , password) values('$user' , '$pass')";
    $result = mysqli_query($connection , $sql);

    if($result){
        header('location: display.php');

    }
    else{
        die(mysqli_error($connection));
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
      href="https://bootswatch.com/5/flatly/bootstrap.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>Document</title>
<style>
    body{
        background-color: gray;
    }
    label{
        color: lightgray;
    }
</style>
</head>
<body>
     <div class="all">
     <div class="container mt-5">
      <h1 class="display-3 text-center">formka idiwan galinta</h1>

      <form id="conatct-form" method="post">
        <div class="form-group">
          <label>magaca isticmalaha</label>
          <input type="text" id="user-name" name='user-name' class="form-control" />
        </div>

        <div class="form-group mt-4 ">
          <label>number sired</label>
          <input type="password" id="password" name ='password' class="form-control" />
        </div>

        <div class="d-grid  mt-4">
          <button class="btn btn-lg btn-primary col-6 mx-auto d-block" type="submit" name='submit'>
           guji
          </button>
        </div>
      </form>
    </div>
     </div>
    
</body>
</html>