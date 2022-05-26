
<nav class="container-fluid navbar navbar-expand-sm bg-light">
                  <div class="container">
                      <a href="#" class="navbar-brand h5">LOGO</a>
                  </div>
                 <div class="container-fluid">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="#header" class="active nav-link text-dark h5">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link text-dark h5">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#header" class="nav-link text-dark h5">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#header" class="nav-link text-dark h5">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                   
                    <div class="btn-group">
                        <button class="btn btn-primary m-1 " data-bs-toggle="modal" data-bs-target="#myModal" id="btn-login">Login</button>
                        <a href= "reg.php" class="btn btn-danger m-1 "  id="btn-reg">Registration</a>
                      </div>

                 </div>
              </nav>
<section class="modal-cont">
                        <!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal">
               <!-- close -->.
          </button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Please verify yourself here..</h3>

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
              if($present == 0){
                  echo "email not registered";
                  header("Location: reg.php");
              }


          // prepare and bind
             $stmt = $conn->prepare("INSERT INTO login (name,email,age,occupation,password,cpassword) VALUES (?,?,?,?,?,?)");
             $stmt->bind_param("ssisss", $name,$email,$age,$occupation,$password,$cpassword);
             if($_submit){
                 header("location : landing.php");
             }

              

             $stmt->execute();

             $stmt->close();
             $conn->close();

      }
?>

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-control">
              <input type="text" name="name" id="name" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your Name" required>
              <br>
              <input type="email" name="email" id="email" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your E-mail" required>
              <br>
              <input type="number" name="age" id="age" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your age" required>
              <br>
              <input type="text" name="occupation" id="occupation" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your Occupation" required>
              <br>
              <input type="password" name="password" id="password" class="inp text-white p-2 mt-1 bg-dark" placeholder="Enter your password" required>
              <br>
              <input type="password" name="cpassword" id="cpassword" class="inp text-white p-2 mt-1 bg-dark" placeholder="Confirm your password" required>
              <input type="submit" class="btn btn-success" name="submit">
              </form>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          
          <a href ="reg.php" class="btn btn-danger" >Register</a>

        </div>
   
    </div>
</div>
