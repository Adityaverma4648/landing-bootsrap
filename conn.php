<?php
     $conn = new mysqli('localhost', 'root', '','bootstrap-page');
     // Check connection
     if ($conn->connect_error) {
       die("Ran out of shoes to throw at your net provider: " . $conn->connect_error);
     }
    //  else{
    //      echo "connection established";
    //  }
?>