<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>
<body>
<?php
$con=mysqli_connect("localhost:3308","root","","technohack_internship");
?>
<div class="container-fluid" id="login" >
<div class="row ">
<h1 class="text-center text-white mt-5" >LOGIN HERE !!</h1>
<div class="col-lg-6 p-4 mt-5 offset-3 " id="form-bg">

    <?php 
    if(isset($_POST['btnlogin']))
    {
      $username=mysqli_real_escape_string($con,$_POST['username']);
      $password=mysqli_real_escape_string($con,$_POST['password']);
     
      $query="select * from adminlogin where username='$username'and password='$password' ";
      $result=mysqli_query($con,$query);
      if(mysqli_num_rows($result)>0)
      {
        
        echo"<p class='text-info'>You're logged in !! </p>";
      }   
    
      else{
         echo"<p class='text-danger'>invalid username or password </p>";
      }  

    }
?>


    <form action="#" method="post">
  <label >Enter  Username: </label>
    <input type="text" class="  form-control" name="username" id="form-bg">
    <label >Enter  Password: </label>
    <input type="Password" class="form-control" name="password" id="form-bg">
    <button class="btn btn-primary  mt-4" name="btnlogin">LOGIN</button>
  </form>
    




  </div>
  </div>
  </div>
</body>
</html>