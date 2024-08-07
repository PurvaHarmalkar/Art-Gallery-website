<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Art Gallerie</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        
    </head>
    <body>
        <div class="header">
            <div class="container" style="padding: 0px;">
                <div class="navbar">
                    <div class="logo">
                        <a href="HomePage.php">
                            <img src ="C:\Users\harma\Downloads\LOGO.jpg" height="50%" width="50%" transition: transform 0.5s;>
                        </a>
                    </div>
                    <nav>
                        <ul class="nav_links">
                            <li><a href="HomePage.php" style="text-decoration: none">HOME</a></li>
                            <li><a href="Gallerie.html" style="text-decoration: none">GALLERIE</a></li>
                            <li><a href="About.html" style="text-decoration: none">ABOUT</a></li>
                            <li><a href="register.php" style="text-decoration: none">REGISTER</a></li>
                        </ul>
                    </nav>
                                    
                    <a href="cart.html">
                        <img src="C:\Users\harma\Downloads\carttt.png" width="40px" height="32px">
                    </a>
                </div>
                <div class="row">
                    <div class="col-2">
                        <h1>Welcome Home, Artholics!</h1>
                        <h2>An Exhibit Of Paintings From All Over The World</h2>
                    
                    </div>    
                </div>
            </div>
        </div>  
     
    <!-------- Explore By Collection -------->

        <div class="small-container">
            <h2 class="title">Explore By Collection</h2>
            <div class="row">
                <div class="col-4">
                    <img src="C:\Users\harma\Downloads\portrait.jpg">
                    <h4>Portrait</h4>
                </div>
                <div class="col-4">
                    <img src="C:\Users\harma\Downloads\abstract.jpg" width="700" height="330">
                    <h4>Abstract</h4>
                </div>
                <div class="col-4">
                    <img src="C:\Users\harma\Downloads\scenery.jpg" width="700" height="330">
                    <h4>Scenery</h4>
                </div>
                <div class="col-4">
                    <img src="C:\Users\harma\Downloads\glass orange.jpg" width="700" height="330">
                    <h4>Sketching</h4>
                </div>
            </div>
            <h2 class="title">New At Art Gallerie</h2>
            <div class="row">
                <div class="col-4">
                    <a href="Eye.html"><img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\eye.jpg" width="700" height="330"></a>
                    <h4>Hope</h4>
                </div>
                <div class="col-4">
                    <img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\Gouache.jpg" width="700" height="330">
                    <h4>Gouache</h4>
                </div>
                <div class="col-4">
                    <img src="C:\Users\harma\Downloads\boat photo.jpg" width="700" height="330">
                    <h4>The Lost Voyage</h4>
                </div>
                <div class="col-4">
                    <img src="C:\Users\harma\Downloads\moon photo.jpg" width="700" height="330">
                    <h4>Intricacy</h4>
                </div>    
            </div>
            <h2 class="title">Bestsellers</h2>
            <div class="row">
            <div class="swiper">
                <div class="swiper-wrapper">

                <div class="swiper-slide"><img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\Myth.jpg" width="300" height="300">
                    <br>
                    <h4>Myth</h4></div>
                <div class="swiper-slide"><img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\Van Gogh.jpg" width="300" height="300">
                    <br>
                    <h4>Van Gogh</h4></div>
                <div class="swiper-slide"><img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\Unique.jpg" width="300" height="300" >
                    <h4>Unique</h4></div>
                    <br>
                <div class="swiper-slide"><img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\Tender.jpg" width="300" height="300">
                    <h4>Tender</h4></div>
                    
                <div class="swiper-slide"><img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\Picasso.jpg" width="300" height="300">
                    <h4>Picasso</h4></div>

                  ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              
                <!-- If we need scrollbar -->
        
            </div>
            </div>
        </div>
        <!--------- footer---------->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <h5>Download App for Android and Ios Mobile Phone</h5>
                        <div class="app-logo">
                            <img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\Playstore logo.webp" >
                            <img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\applestore logo.webp" >
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="C:\Users\harma\OneDrive\Desktop\Art Gallery website\Images\LOGO.jpg" height="50%" width="50%">
                        <p>Art Gallerie</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">Copyright 2023</p>
            </div>   
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <script>
        const swiper = new Swiper('.swiper', {
            
           
            loop: true,
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
      });

    </script>



    </body>
</html>
