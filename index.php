<?php
require_once "config/db.php";
 global $conn ;
 
 $sql = "INSERT INTO info_db(username, password) VALUES (:username,:password)";
 $stmt= $conn->prepare($sql);


 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>CryptoKet</title>
</head>

<body>
  <div class="wrapper-homepage">
    <header class="header">
      <logo class="logo">
        <img src="assets/css/img/logocry.png" alt="">
      </logo>
      <div class="input">
        <a href="">
          <img class="icon-input" src="assets/css/img/Search.svg" alt="">
        </a>
        <input class="input-search" type="text" placeholder="Search Item Here">
      </div>
      <nav class="nav">
        <a href="">Explore</a>
        <a href="">My Items</a>
        <a href="">Following</a>
      </nav>
      <div class="buttons">
        <a class="btn-primary"href="">Create</a>
        <a class="btn-primary"href="">Connect</a>       
      </div>
    </header>
    <div class="line"></div>
    <div class="banner-homepage container">
      <h1 class="banner-title">Discover, collect, and sell extraordinary NFTs</h1>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <h2 class="card-title container">Top Sellers</h2>
    <div class="cards-row">
      <div class="slider-button">
        <button class="slide-arrow-left">
          <img src="assets/css/img/ar-left/Iconly/Light/Iconly/Light/Arrow - Left Circle.svg" alt="">
        </button>
        <button class="slide-arrow-right">
          <img src="assets/css/img/Arrow- Right.svg" alt="">
        </button>
      </div>
      <div class="swiper container mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card">
              <span class="span-card">1</span>
              <img class="img-card" src="/assets/css/img/girl1.png" alt="">
              <img  class="ar-card"src="/assets/css/img/ar.svg" alt="">
              <div>
              <span class="name-title">Mia Ayana</span>
              <div>
                <span class="name-title">5.250</span>
                <span class="text-span">ETH</span>
              </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <span class="span-card">2</span>
              <img class="img-card" src="/assets/css/img/rian.png" alt="">
              <img class="ar-card"src="/assets/css/img/ar.svg" alt="">
              <div>
              <span class="name-title">Rian Leon</span>
              <div>
                <span class="name-title">4.932</span>
                <span class="text-span">ETH</span>
              </div>
            </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <span class="span-card">3</span>
              <img class="img-card" src="/assets/css/img/girl2.png" alt="">
              <img class="ar-card" src="/assets/css/img/ar.svg" alt="">
              <div>
              <span class="name-title">Lady Young</span>
              <div>
                <span class="name-title">4.620</span>
                <span class="text-span">ETH</span>
              </div>
             </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <span class="span-card">4</span>
              <img class="img-card" src="/assets/css/img/man.png" alt="">
              <img class="ar-card"src="/assets/css/img/ar.svg" alt="">
              <div>
              <span class="name-title">Black Glass</span>
              <div>
                <span class="name-title">4.125</span>
                <span class="text-span">ETH</span>
              </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <span class="span-card">5</span>
              <img class="img-card" src="/assets/css/img/man2.png" alt="">
              <img class="ar-card"src="/assets/css/img/ar.svg" alt="">
              <div>
              <span class="name-title">Budhiman</span>
              <div>
                <span class="name-title">3.921</span>
                <span class="text-span">ETH</span>
              </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <span class="span-card">4</span>
              <img class="img-card" src="/assets/css/img/man.png" alt="">
              <img class="ar-card"src="/assets/css/img/ar.svg" alt="">
              <div>
              <span class="name-title">Black Glass</span>
              <div>
                <span class="name-title">5.250</span>
                <span class="text-span">ETH</span>
              </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <span class="span-card">4</span>
              <img class="img-card" src="/assets/css/img/man.png" alt="">
              <img class="ar-card"src="/assets/css/img/ar.svg" alt="">
              <div>
              <span class="name-title">Black Glass</span>
              <div>
                <span class="name-title">5.250</span>
                <span class="text-span">ETH</span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="gallery-block container">
      <h2 class="gallery-title">Hot Bids</h2>
      <div class="gallery row">
        <div class="gallery-card">
          <img class="img-gallery" src="/assets/css/img/perfect.png" alt="">
         <div class="gallery-card-content">
          <span class="gallery-card-title">Abstact Smoke Red Blue</span>
          <div class="gallery-card-content-info">
            <div class="gallery-content-number">
              <span class="span-number">1.25 </span>
              <span class="span-number">ETH</span>
            </div>
               <span class="span-number">92</span>
          </div>
         </div>
        </div>
        <div class="gallery-card">
          <img class="img-gallery" src="/assets/css/img/nature.png" alt="">
         <div class="gallery-card-content">
          <span class="gallery-card-title">Mountain Landscape</span>
          <div class="gallery-card-content-info">
            <div class="gallery-content-number">
              <span class="span-number">0.20  </span>
              <span class="span-number">ETH</span>
            </div>
               <span class="span-number">25</span>
          </div>
         </div>
        </div>
        <div class="gallery-card">
          <img class="img-gallery" src="/assets/css/img/colors.png" alt="">
         <div class="gallery-card-content">
          <span class="gallery-card-title">Paint Color on Wall</span>
          <div class="gallery-card-content-info">
            <div class="gallery-content-number">
              <span class="span-number">0.55  </span>
              <span class="span-number">ETH</span>
            </div>
               <span class="span-number">55</span>
          </div>
         </div>
        </div>
        <div class="gallery-card">
          <img class="img-gallery" src="/assets/css/img/art.png" alt="">
         <div class="gallery-card-content">
          <span class="gallery-card-title">Abstract Patern</span>
          <div class="gallery-card-content-info">
            <div class="gallery-content-number">
              <span class="span-number">0.87 </span>
              <span class="span-number">ETH</span>
            </div>
               <span class="span-number">82</span>
          </div>
         </div>
        </div>
          <div class="gallery-card">
          <img class="img-gallery" src="/assets/css/img/kalya-malya.png" alt="">
         <div class="gallery-card-content">
          <span class="gallery-card-title">White Line Grafiti</span>
          <div class="gallery-card-content-info">
            <div class="gallery-content-number">
              <span class="span-number">0.09  </span>
              <span class="span-number">ETH</span>
            </div>
               <span class="span-number">22</span>
          </div>
         </div>
        </div>
        <div class="gallery-card">
          <img class="img-gallery" src="/assets/css/img/triangle.png" alt="">
         <div class="gallery-card-content">
          <span class="gallery-card-title">Abstract Triangle</span>
          <div class="gallery-card-content-info">
            <div class="gallery-content-number">
              <span class="span-number">0.90  </span>
              <span class="span-number">ETH</span>
            </div>
               <span class="span-number">71</span>
          </div>
         </div>
        </div>
        <div class="gallery-card">
          <img class="img-gallery" src="/assets/css/img/landscape.png" alt="">
         <div class="gallery-card-content">
          <span class="gallery-card-title">Lake Landscape</span>
          <div class="gallery-card-content-info">
            <div class="gallery-content-number">
              <span class="span-number"> 0.52  </span>
              <span class="span-number">ETH</span>
            </div>
               <span class="span-number">63</span>
          </div>
         </div>
        </div>
        <div class="gallery-card">
          <img class="img-gallery" src="/assets/css/img/redart.png" alt="">
         <div class="gallery-card-content">
          <span class="gallery-card-title">Blue Red Art</span>
          <div class="gallery-card-content-info">
            <div class="gallery-content-number">
              <span class="span-number">0.85</span>
              <span class="span-number">ETH</span>
            </div>
               <span class="span-number">66</span>
          </div>
         </div>
         </div>
        </div>
      </div>
    <div class="load container">
      <button class="load-link">Load More</button>
    </div>
    <div class="line"></div>
    <div class="footer container">
      <div class="list1">
        <img class="logo-bottom" src="assets/css/img/logocry.png" alt="">
        <p class="content">Get the lastes Updates</p>
        <form class="form-list" action="">
          <input class="input-list" type="text"placeholder="Your Email">
        <a class="list-link" href="config/db.php">Email Me!</a>
        </form>
      </div>
      <div class="list2">
        <h3 class="list-title">CryptoKet</h3>
           <span class="content">Explore</span>
           <span class="content">How it Works</span>
           <span class="content">Contact Us</span>
      </div>
      <div class="list2">
      <h3 class="list-title">Support</h3>
           <span class="content" >Help center</span>
           <span class="content">Terms of service</span>
           <span class="content">Legal</span>
           <span class="content">Privacy policy</span>
      </div>
    </div>
    <div class="line"></div>
    <div class="footer-bottom container">
        <p class="content2">CrpytoKet, Inc. All Rights Reserved</p>
        <div class="img-footer">
         <img src="assets/css/img/instagram1.svg" alt="">
         <img src="assets/css/img/twitter1.svg" alt="">
         <img src="assets/css/img/telegram1.svg" alt="">
         <img src="assets/css/img/discord1.svg" alt="">
        </div>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="/js/app.js"></script>
</body>
</html>