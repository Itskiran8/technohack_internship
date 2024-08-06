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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>

<body>
<?php
$con=mysqli_connect("localhost:3308","root","","technohack_internship");
?>
 <div class="container-fluid" id="register"> 
         
<div class="row" >
<?php 
    if(isset($_POST['btnsubmit']))
    {
      $name=mysqli_real_escape_string($con,$_POST['name']);
      $age=mysqli_real_escape_string($con,$_POST['age']);
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $number=mysqli_real_escape_string($con,$_POST['number']);
      $address=mysqli_real_escape_string($con,$_POST['address']);
      $gender=mysqli_real_escape_string($con,$_POST['gender']);
      $query="insert into register(name,age,email,number,address,gender,curdate)values('$name','$age','$email','$number','$address','$gender',now())";
    
      if(mysqli_query($con,$query)){
        echo "<script>alert('your message is submitted')</script>";
        
 }
     else{
           echo mysqli_error($con);
  }
}
?>

<h1 style="color:white;text-align:center;margin-top:5%">Registration form :</h1>


    <form action="#" method="post">
    
        <div class="row mt-4 p-4 offset-2 mb-5 " id="registerborder">
           <div class="col-lg-12">
               <label for="">Name :</label>
               <input type="text" class="form-control" name="name">
           </div>
           
           <div class="col-lg-12">
               <label for="">Age :</label>
               <input type="number" class="form-control" name="age">
           </div>
   
           <div class="col-lg-12">
               <label for="">Email Address :</label>
               <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
               <input type="email" class="form-control" name="email">
           </div>
     
           <div class="col-lg-12">
               <label for="">Phone Number:</label>
               <div class="input-group">
               <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
               <input type="tel" class="form-control" name="number">
           </div>
</div>
          

        <div class="col-lg-12 p-3">
            <label for="">Address :</label>
          <textarea  rows="1" name="address" ></textarea>
        </div>

       
        
          
   <div class="col-lg-12 mt-3">
       <label for="">Gender:</label>
       <label for="">Male</label>
       <input type="radio" name="gender" value="Male">
       <label for="">Female</label>
       <input type="radio" name="gender" value="Female">
   </div>
   
           <div class="col-lg-12 text-center "><br>
               <button class="btn btn-success" name="btnsubmit">Submit</button>
           </div>
        </div>
   </form>
</div>

 
    </div>
</body>

