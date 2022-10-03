<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="/css/app.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
        <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="/">My Resume</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-2">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/portfolio">Portfolio</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <center><img class="w3-image" src="https://www.eduspire.org/technology-blog-for-teachers/wp-content/uploads/2016/03/digital-portfolio-in-classroom.png" alt="Architecture" width="1200" height="600"></center>
  
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
  </div>

  
    <div class="w3-row-padding">
        <div class="w3-col l3 m6 w3-margin-bottom" style="margin:30px">
        <div class="w3-display-container">
            <div class="w3-display-topleft w3-teal w3-padding">Web Scraping</div>
            <img src="https://uploads-ssl.webflow.com/5fd55aec9b6ceba1eec9f9fd/61932c032e0a0173df6d2377_What%20is%20Web%20Scraping.jpg" alt="House" style="width:100%">
        </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom" style="margin:30px">
        <div class="w3-display-container">
            <div class="w3-display-topleft w3-teal w3-padding">Technical Support</div>
            <img src="data:image/jpeg;base64,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" alt="House" style="width:100%">
        </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom" style="margin:30px">
        <div class="w3-display-container">
            <div class="w3-display-topleft w3-teal w3-padding">Deep Mining</div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0GQGuhFUue-w-Il4iVUYEk-Yhc2K0CwRpqKBQDnWhNyg0YwlI7HNzsQtQnM07BEv3RyU&usqp=CAU" alt="House" style="width:100%">
        </div>
        </div>
        
    </div>


  

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>

  

  

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
    
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
