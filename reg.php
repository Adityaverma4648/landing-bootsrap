<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="style.css">
      
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    input{
        margin: 5px 0px;
        padding: 5px 2px;
        border: none;
    }
    .btn{
        margin: 10px 0px;
    }
</style>
  
</head>
<body class="bg-warning d-flex justify-content-center align-items-center">
      <!-- registration modal---------------------------------------------------------------------------------------------------------------- -->
<section class="container p-5" >
    
    <h3>Please register yourself here..</h3>
    <form action="" method="post" class="form-control">
        <input type="text" name="name" id="regname" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your Name">
        <br>
        <input type="email" name="email" id="regemail" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your E-mail">
        <br>
        <input type="number" name="age" id="regage" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your age">
        <br>
        <input type="text" name="occupation" id="regoccupation" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your Occupation">
        <br>
        <input type="password" name="password" id="regpassword" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your password">
        <br>
        <input type="password" name="cpassword" id="regcpassword" class="inp text-white p-2 mt-1 bg-dark" placeholder="Confirm your password">
    </div>
    <button type="submit" class="btn btn-success" data-bs-dismiss="modal" data-bs-target="#header" >Register</button>
  </div>
</form>
</section>
</body>
</html>