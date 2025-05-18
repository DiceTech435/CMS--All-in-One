<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0.css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=kumbh+Sans:wght@400;700&display=swap"/>
    <script type="type/javascript" src="app.js" defer></script>
</head>

<body class="lightmode">
    <!-- Navbar Section -->
<nav class="navBar">
<div class="navBar_container">
    <button id="theme-switch">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z"/></svg>
    </button>
    <a href="/" id="navBAr_logo"> <img src="images/logo.png" alt="Logo image" style="width: 40px; height: auto;"> Dice-E</a>
    <div class="navBar_toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="navBar_menu">
        <li class="navBar_item">
            <a href="home.php" class="navBar_links">Home</a>
        </li>
        <li class="navBar_item">
            <a href="tech.php" class="navBar_links">Tech</a>
        </li>
        <li class="navBar_item">
            <a href="products.php" class="navBar_links">Products</a>
        </li>
        <div class="navBar_btn">
            <a href="signup.php" class="button" id="signup">SignUp</a>
            <a href="login.php" class="button" id="login">Login</a>      </div>
    </ul>
</div>      
</nav>  

<!-- Hero Section -->
 <div class="main">
    <div class="main_container">
        <div class="main_content">
            <h1>THIS IS THE TECH PAGE</h1>
            <h2>TECHNOLOGY</h2>
            <p>See what makes us different.</p>
            <button class="main_btn"><a href="signup.php">Get started</a></button>
        </div>
        <div class="main_img-conatiner">
            <img src="images/reminders.svg" alt="MainPic" id="main_img">
        </div>
    </div>
 </div>
 
 <!-- Services Section -->
  <div class="services">
    <h1>See what the hype is about</h1>
    <div class="services_container">

        <div class="services_card" style="background-image: url(/images/tech1.jpg);">
            <h2>Experience Bliss</h2>
            <p>AI Powered Technology</p>
            <button><a href="signup.php">Get started</a></button>
        </div>
        <div class="services_card" style="background-image: url(/images/tech2.jpg);">
            <h2>Are you ready</h2>
            <p>Take teh leap</p>
            <button><a href="signup.php">Get started</a></button>
        </div>
    </div>
  </div>

  <!-- Footer Section -->
   <footer class="footer_container">
    <div class="footer_links">
        <div class="footer_link-wrapper">
            <div class="footer_link-items">
                <h2>About Us</h2>
                <a href="/">How it works</a>
                <a href="/">Testimonials</a>
                <a href="/">Careers</a>
                <a href="/">Investments</a>
                <a href="/">Terms of Service</a>
            </div>
            <div class="footer_link-items">
                <h2>Contact Us</h2>
                <a href="/">Contact</a>
                <a href="/">Support</a>
                <a href="/">Destinations</a>
                <a href="/">Sponsorships</a>
            </div>
        </div>
        <div class="footer_link-wrapper">
            <div class="footer_link-items">
                <h2>FAQs</h2>
                <a href="/">Frequently asked questions</a>
                <a href="/">Answered questions</a>
            </div>
            <div class="footer_link-items">
                <h2>Videos</h2>
                <a href="/">Submit video</a>
                <a href="/">Ambassadors</a>
                <a href="/">Agency</a>
                <a href="/">Influencers</a>
            </div>
        </div>
    </div>

        <div class="social_media">
            <div class="social_media-wrap">
                <div class="footer_logo">
                    <a href="/" id="footer_logo"><i class="fas faa-gem"></i><img src="images/logo.png" alt="Logo image" style="width: 40px; height: auto;">Dice-E</a>
                </div>
                <p class="website_rights"><img src="images/logo.png" alt="Logo image" style="width: 25px; height: auto;">Dice-E 2025. All rights reserved</p>
                <div class="social_icons">
                    <a href="/" class="social_icon-link" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="/" class="social_icon-link" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="/" class="social_icon-link" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="/" class="social_icon-link" target="_blank">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a href="/" class="social_icon-link" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        </div>
    
</footer>
<script src="app.js"></script>
</body>
</html>