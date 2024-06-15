<?php
  require_once("connection.php");
  $Wrong=false;
  $Success=false;
  $name="";
  $Email="";
  $cmt="";
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
  if(isset($_POST['submit']))
  $name=$_POST['Name'];
  $Email=$_POST['Email'];
  $cmt=$_POST['Message'];
  if( empty($name) ||empty($Email) || empty($cmt))
  {
   $Wrong=true;
  
  }
  else{
    $query="INSERT INTO  Contact (User_Name, User_Email,Message)VALUES('$name','$Email','$cmt')";
    if($conn->query($query)===TRUE)
    {
        $Success=true;
        
    }
   
    else{
       echo "Error";
       
    }
  }
  
  
  }



?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>About</title>
</head>

<body>
    <nav>
        <div class="hamburger">
                
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="nav-links">
            <li><a href="Home.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li ><a href="Services.php">Services</a></li>
            <li><a href="Fees.php">Fee Structure</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="News & Events.php">News & Events</a></li>
            </ul>
            <div class="logo"><img src="Images/logo.jpg" alt="logo"></div>
        </nav>
        <section class="Contact-section" >
        <?php if($Wrong)
 {
    echo "<p class='message'>Records can't be Empty</p>";
 }
  ?>
   <?php if($Success)
 {
    echo "<p class='message'>Thanks for Contacting We will Contact you by Email </p>";
 }
  ?>
       
           <div class="contact">
            <h1>Contact Us</h1>
           
                <form action="Contact.php" method="POST">
                <div class="form"><label for="Name">Enter Name</label><br>
                <input type="text" name="Name" >
            </div>
          
                <div>
                    <div class="form"><label for="Email">Enter Email</label><br>
                        <input type="text" name="Email">
                </div>
                <div>
                    <div class="form"><label for="Message">Enter Message</label><br>
                        <textarea name="Message" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" name="submit" class="btn">Submit</button>
            </form>
            
           </div>

</section>

            <footer class="footer">
        <div id="text">
        <h1>Amal</h1>
        <h2>Amal College Basti Malook ,District Multan</h2>
        <p><h3>Phone:</h3>0300-0072763</p>
        <p><h3>Email:</h3>amal123@gmail.com</p>
        </div>
        <div class="links">
            <a href=""><img src="Images/Facebook.jpg" alt=""></a>
            <a href=""><img src="Images/Instagram.jpg" alt=""></a>
            <a href=""><img src="Images/Twitter.jpg" alt=""></a>
            <a href=""><img src="Images/linkdln.jpg" alt=""></a>
        </div>
        <div class="copy">
            <h5>@ Copyright 2024, All rights reserved --Amal College Basti Malook,Multan </h5>
        </div>
            </footer>
    </body>
<script src="Script.js"></script>

</html>