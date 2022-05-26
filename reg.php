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
    body{
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url('./reg.jpg');
        background-repeat: no-repeat;
    }

    form {
        border: none;
    }

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
<body class="d-flex justify-content-center align-items-center"> 
      <!-- registration modal---------------------------------------------------------------------------------------------------------------- -->
<section class="container p-5 bg-white" >
<h3>Please register yourself here..</h3>

<!-- php----------------------------------------------------------------------------------- -->

<?php
include 'conn.php';
    // echo "hello from backend";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
           $email = $_POST['email'];
            $age = $_POST['age'];
            $occupation = $_POST['occupation'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];


            $sql = "SELECT * from registration where email = '$email' ";
            $result = mysqli_query($conn , $sql);
            $present = mysqli_num_rows($result);
            if($present){
                echo "email already registered";
                header("Location: landingPage.php");
            }




          // prepare and bind
             $stmt = $conn->prepare("INSERT INTO registration (name,email,age,occupation,password,cpassword) VALUES (?,?,?,?,?,?)");
             $stmt->bind_param("ssisss", $name,$email,$age,$occupation,$password,$cpassword);
             $stmt->execute();
             

             $stmt->close();
             $conn->close();

      }
?>
<!-- php ends------------------------------------------------------------------------------ -->

   
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-control">
        <input type="text" name="name" id="regname" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your Name" required>
        <br>
        <input type="email" name="email" id="regemail" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your E-mail" required>
        <br>
        <input type="number" name="age" id="regage" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your age" required>
        <br>
        <input type="text" name="occupation" id="regoccupation" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your Occupation" required>
        <br>
        <input type="password" name="password" id="regpassword" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your password" required>
        <br>
        <input type="password" name="cpassword" id="regcpassword" class="inp text-white p-2 mt-1 bg-dark" placeholder="Confirm your password" required>
    </div>
    <button type="submit" class="btn btn-success" data-bs-dismiss="modal" data-bs-target="#header" >Register</button>
  </div>
</form>
</section>
</body>
</html>