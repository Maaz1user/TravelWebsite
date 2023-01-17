<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travia travels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

   if(isset($_POST['send'])){

      
      $date = $_POST['date'];
      $guests  = $_POST['guests'];
      $location = $_POST['location'];
      



$sql = "INSERT INTO book_new ( `location`, `guest`, `date`) VALUES ( '$location', '$guests', '$date');";


// print_r($sql);

      
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }


      header('location:home.php'); 

   }else{
      echo 'something went wrong please try again!';
   }



   ?>
