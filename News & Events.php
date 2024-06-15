<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style.css">
  <title>Image Slideshow Page</title>
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
           
    </div>
        </nav>
  <div class="container" id="container1">
    <h2>Girls Trip 2k24</h2>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="Images/GirlsT1.jpg" alt="Image 1">
      </div>
      <div class="mySlides fade">
        <img src="Images/GirlsT2.jpg" alt="Image 2">
      </div>
      <div class="mySlides fade">
        <img src="Images/GirlsT3.jpg" alt="Image 2">
      </div>
      <!-- Add more slides as needed -->
      <a class="prev" onclick="plusSlides(-1, 'container1')">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 'container1')">&#10095;</a>
    </div>
  </div>

  <div class="container" id="container2">
    <h2>Boys Trip 2k24</h2>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="Images/BoysT1.jpg" alt="Image 3">
      </div>
      <div class="mySlides fade">
        <img src="Images/BoysT2.jpg" alt="Image 4">
      </div>
      <div class="mySlides fade">
        <img src="Images/BoysT3.jpg" alt="Image 4">
      </div>
      <!-- Add more slides as needed -->
      <a class="prev" onclick="plusSlides(-1, 'container2')">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 'container2')">&#10095;</a>
    </div>
  </div>

  <div class="container" id="container3">
    <h2>Annual Function 2k24</h2>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="Images/AnnualF1.jpg" alt="Image 5">
      </div>
      <div class="mySlides fade">
        <img src="Images/AnnualF2.jpg" alt="Image 5">
      </div>
      <div class="mySlides fade">
        <img src="Images/AnnualF3.jpg" alt="Image 5">
      </div>
      <div class="mySlides fade">
        <img src="Images/AnnualF4.jpg" alt="Image 5">
      </div>
      <div class="mySlides fade">
        <img src="Images/AnnualF5.jpg" alt="Image 5">
      </div>
      <!-- Add more slides as needed -->
      <a class="prev" onclick="plusSlides(-1, 'container3')">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 'container3')">&#10095;</a>
    </div>
  </div>

  <div class="container" id="container4">
    <h2>Boys Sports Gala 2k24</h2>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="Images/BoysS1.jpg" alt="Image 7">
      </div>
      <div class="mySlides fade">
        <img src="Images/BoysS2.jpg" alt="Image 7">
      </div>
      <div class="mySlides fade">
        <img src="Images/BoysS3.jpg" alt="Image 7">
      </div>
      <!-- Add more slides as needed -->
      <a class="prev" onclick="plusSlides(-1, 'container4')">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 'container4')">&#10095;</a>
    </div>
  </div>
  
  <footer class="footer">
        <div id="text">
        <h1>Amal</h1>
        <h2>Amal College Basti Malook ,District Multan</h2>
        <p><h3>Phone:</h3>0300-0072763</p>
        <p><h3>Email:</h3>amal123@gmail.com</p>
        </div>
        <div class="links">
        <a href="https://www.facebook.com/CSSCOLLEGE"><img src="Images/Facebook.jpg" alt=""></a>
            <a href="https://www.instagram.com/amal_college_basti_malook?igsh=eWR6NGxienY1NGh1"  ><img src="Images/Instagram.jpg" alt=""></a>
            <a href=""  ><img src="Images/Twitter.jpg" alt=""></a>
            <a href="" ><img src="Images/linkdln.jpg" alt=""></a>
        </div>
        <div class="copy">
            <h5>@ Copyright 2024, All rights reserved --Amal College Basti Malook,Multan </h5>
        </div>
            </footer>
 
  <script src="Script.js"></script>
</body>
</html>
