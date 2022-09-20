
<?php

include "connection.php";
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

$insert= "insert into crud (name,email,mobile,password) values('$name','$email','$mobile','$password')";
$connect=mysqli_query($con,$insert);
if($connect){
  // echo "Data Inserted Successfully";
  header('location:display.php');
}
else{
  die(mysqli_error($con));
}

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-4">
    <form method="Post">
        <div class="form-group" >
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control"  placeholder="Enter your name" name="name">
           
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="email" class="form-control"  placeholder="Enter your email" name="email">
           
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">mobile</label>
            <input type="text" class="form-control"  placeholder="Enter your mobile" name="mobile">
           
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">password</label>
            <input type="password" class="form-control"  placeholder="Enter your password" name="password">
           
        </div>
        
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>

   
  </body>
</html>