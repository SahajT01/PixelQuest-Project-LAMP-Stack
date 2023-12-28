<?php
session_start();

// Check if user is logged in
$is_logged_in = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
$is_admin_logged_in = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;

$websiteID= 1;

// RECENTLY TRACKED COOKIE
// Construct the cookie name based on the user ID
$cookieName = 'recently_tracked_' . md5($_SESSION['userid']);
// Read the recently viewed products from the user-specific cookie
$recentlyViewed = isset($_COOKIE[$cookieName]) ? explode(',', $_COOKIE[$cookieName]) : [];
// Add the current product to the start of the list
array_unshift($recentlyViewed, $websiteID);
// Remove duplicates
$recentlyViewed = array_unique($recentlyViewed);
// Ensure we only store the top 5
$recentlyViewed = array_slice($recentlyViewed, 0, 5);
// Save the updated list back to the cookie
setcookie($cookieName, implode(',', $recentlyViewed), time() + (86400 * 30), "/"); // Cookie will expire after 30 days


?>


<!DOCTYPE html>
<html lang = 'en'>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Title>PixelQuest</Title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <button class="tablink" onclick="openPage('Home', this)" id="defaultOpen">Home</button>
  <button class="tablink" onclick="openPage('About', this)">About</button>
  <button class="tablink" onclick="openPage('Products', this)">Products</button>
  <button class="tablink" onclick="openPage('News', this)">News</button>
  <button class="tablink" onclick="openPage('Contact', this)">Contact</button>
  <button class="tablink" onclick="openPage('Users', this)" style="width: 16.7%;">Users</button>

  <div id="Home" class="tabcontent">
    <h1 style="font-family: cursive;">Welcome to PixelQuest Games!</h1>
    <br><br>
    <p>The best place to purchase video games online</p>
    <br><br><br>
    <button class="button" onclick="location.href='../index.php';">Return</button>
  </div>

  <div id="About" class="tabcontent">
    <h1>About PixelQuest Games</h1>
    <br><br>
    <h3>Delivering Your Next Adventure at Unbeatable Prices</h3>
    <br>
    <p>Welcome to PixelQuest Games, the ultimate hub for gaming enthusiasts! 
      Founded in 2023, we pride ourselves on being the one-stop destination for the 
      most sought-after video games for PC, PlayStation, and Xbox. Our promise? 
      To offer the lowest prices available on the market.</p>
    <br><br>
    <h3>Our Mission</h3>
    <p>In the ever-evolving landscape of gaming, where titles release at lightning 
      speed and prices can be a barrier for many, PixelQuest Games aims to bridge the gap. 
      Our mission is simple: to ensure that every gamer, regardless of their budget, 
      can access and enjoy the titles they love without breaking the bank.</p>
    <br>
    <p>Join us in our quest to make gaming more affordable and accessible for all. 
      Dive into our vast collection and let your next gaming adventure begin with 
      PixelQuest Games.</p>
  </div>

  <div id="Products" class="tabcontent">
    <section id="intro">
      <h1>Our Game Collection at PixelQuest Games</h1>
      <p>Experience Gaming Like Never Before, Without Stretching Your Wallet</p>
      <button class="button" onclick="location.href='recently_viewed.php';" style="width:170px;">Recently viewed</button>&nbsp;&nbsp;&nbsp;
      <button class="button" onclick="location.href='most_viewed.php';" style="width:170px;">Most viewed</button>
      <br>
    </section>
    <!-- New section for Final Fantasy 16 -->
    <div class="container">
    <section id="featured-product">
        <a href="products/product1.php">
            <img src="images/finalFantasy16.jpeg" alt="Final Fantasy XVI Cover Thumbnail">
            <h3>Final Fantasy XVI</h3>
        </a>
    </section>
    <section id="featured-product">
        <a href="products/product2.php">
          <img src="images/spiderman2.jpeg" alt="Spider-Man 2 Cover Thumbnail">
          <h3>Marvel's Spider-Man 2</h3>
        </a>
    </section>
    <section id="featured-product">
        <a href="products/product3.php">
          <img src="images/godofwar.jpeg" alt="God of War: Ragnarok Cover Thumbnail">
          <h3>God of War: Ragnarok</h3>
        </a>
    </section>
    </div>
    <br>
    <div class="container">
      <section id="featured-product">
        <a href="products/product4.php">
        <img src="images/horizon.jpeg" alt="Horizon Forbidden West Cover Thumbnail">
        <h3>Horizon Forbidden West</h3>
      </a>
    </section>
    <section id="featured-product">
        <a href="products/product5.php">
        <img src="images/persona5r.jpeg" alt="Persona 5 Royal Cover Thumbnail">
        <h3>Persona 5 Royal</h3>
      </a>
    </section>
    <section id="featured-product">
        <a href="products/product6.php">
        <img src="images/ghostOfTsushima.jpeg" alt="Ghost of Tsushima Cover Thumbnail">
        <h3>Ghost of Tsushima</h3>
      </a>
    </section>
    </div>
    <br>
    <div class="container">
    <section id="featured-product">
        <a href="products/product7.php">
        <img src="images/LADG.jpeg" alt="Like a Dragon Gaiden Cover Thumbnail">
        <h3>Like a Dragon Gaiden</h3>
      </a>
    </section>
    <section id="featured-product">
        <a href="products/product8.php">
        <img src="images/eldenRing.jpeg" alt="Elden Ring Cover Thumbnail">
        <h3>Elden Ring</h3>
      </a>
    </section>
    <section id="featured-product">
        <a href="products/product9.php">
        <img src="images/jedi.jpeg" alt="Star Wars Jedi: Survivor Cover Thumbnail">
        <h3>Star Wars Jedi: Survivor</h3>
      </a>
    </section>
    </div>
    <div class="container">
    <section id="featured-product">
        <a href="products/product10.php">
        <img src="images/lastOfUs2.jpeg" alt="The Last of Us: Part II Cover Thumbnail">
        <h3>The Last of Us: Part II</h3>
      </a>
    </section>
    </div>
  </div>

  <div id="News" class="tabcontent">
    <h1>PixelQuest Games News</h1>

        <article class="news-entry">
            <h3>Grand Opening of PixelQuest's Online Store!</h3>
            <p class="date">Date: October 5, 2023</p>
            <p>We're thrilled to announce the official launch of PixelQuest Games' online store! After months of preparation, we've created a platform that's user-friendly, secure, and ready to provide you with the best video games at unbeatable prices. To celebrate, we're offering a 15% discount on all purchases for the first week. Don't miss out!</p>
        </article>

    <footer>
        <p style="font-size: 15px; color: #555; text-align: center; float: bottom;">&copy; 2023 PixelQuest Games. All rights reserved.</p>
    </footer>
  </div>

  <div id="Contact" class="tabcontent">
    <h3>Contact Us</h3>
    <?php
      $myfile = fopen("contacts.txt", "r") or die("Unable to open file!");
      $text = fread($myfile,filesize("contacts.txt"));
      echo nl2br($text);
      fclose($myfile);
    ?>
  </div>
  <div id="Users" class="tabcontent">
  <?php 
  if ($is_admin_logged_in) {
    echo "<button class='button' onclick=\"location.href='/search_users.php';\" style='width: 160px;'>search users</button><br><br><br>";
    echo "<button class='button' onclick=\"location.href='curl.php';\" style='width: 160px;'>view all users</button><br><br><br>";
  }
  ?>
  </div>

  <script>
    function openPage(pageName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
}

// Get the element with id="defaultOpen" and click on it you
    document.getElementById("defaultOpen").click();
  </script>
    
</body>
</html> 