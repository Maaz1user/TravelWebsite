<?php


if(isset($_POST['send'])){
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "travia travels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
   $uname = $_POST['uname'];
   $password  = $_POST['password'];
   
   if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
$conn->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css" />
</head>
<body>
<header class="header" data-aos="fade-down">

<section class="flex">

   <a href="home.php" class="logo">TRAVELS TRAVIA</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="tours.php">tours</a>
      <a href="destinations.php">destinations</a>
      <a href="contact.php">contact</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

</header>
    <div class="alert-box">
        <p class="alert"></p>
    </div>
    <div class="form">
        <form  method="post">
         <div class="form-group"> 
        <h1 class="heading">login</h1>
        <input type="email" placeholder="email" autocomplete="off" class="email" required name="uname">
        <input type="password" placeholder="password" autocomplete="off" class="password" required name="pswd">
        <button class="submit-btn">log in</button>
        <!-- <a href="/register.html" class="link">don't have an account? Register one</a>
        -->
        <a class ="link" href="register.php">register now</a>
    
    </div>

   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
