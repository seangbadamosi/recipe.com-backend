<?php

include "./connect.php";

$fetch_query ="SELECT * FROM `recipes_tb` WHERE `recipe_type` = 'soup'";

$send_query = mysqli_query($connect,$fetch_query);

$soups = mysqli_fetch_all($send_query,MYSQLI_ASSOC);

//print_r($soups);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav Icon 👀👇🏾 -->
    <link rel="shortcut icon" href="assets/img/rcon.png" type="image/x-icon">
    <!-- MaterializeCSS 👀👇🏾 -->
    <link rel="stylesheet" href="assets/css/materialize.css">
    <!-- Material Icons 👀👇🏾 -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Soups - Recipe.com </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

  <style>
      * {
      font-family: "Josefin Sans", serif;
      }

    .gradient-bg {
      background: linear-gradient(to bottom, #ffffff, #e65100);
    }

    .text-justify {
        text-align: justify !important;
    }

    p {
        font-size: 14pt !important;
    }

  </style>
</head>
<body>
  <header id="top">
    <!-- Nav Component 👀👇🏾 -->
    <div class="navbar-fixed">
        <nav class="white z-depth-0">
            <div class="container">
                <div class="row ">
                    <div class="col s12 m6 l3">
                        <a href="index.html" class="brand-logo">
                            <!-- Logo for Desktops 👀👇🏾 -->
                            <img src="assets/img/logo.png" alt="" width="150px" class="hide-on-med-and-down">
                            <!-- Slightly Smaller Logo for Tablets & Smartphones 👀👇🏾 -->
                            <img src="assets/img/logo.png" alt="" width="120px" class="hide-on-large-only">
                        </a>
                        <!-- Sidenav Trigger -->
                        <a href="#sidenav" class="sidenav-trigger left">
                            <i class="material-icons orange-text text-darken-4">menu</i>
                        </a>
                    </div>
                    <!-- Nav links for Desktops -->
                    <div class="col s12 m6 l9 hide-on-med-and-down">
                        <ul class="right">
                            <li><a href="home.html#about_us" class="orange-text text-darken-4 scrollspy">Who We Are</a></li>
                            <li><a href="home.html#catergories" class="orange-text text-darken-4 scrollspy">Find a Recipe</a></li>
                            <li><a href="home.html#experts" class="orange-text text-darken-4 scrollspy">Meet the Experts</a></li>
                            <li><a href="home.html#cliente" class="orange-text text-darken-4 scrollspy">Cliente</a></li>
                            <li><a href="./login.php" target="_blank" class="btn rounded-edges orange white-text darken-4 scrollspy">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidenav 👀👇🏾 -->
    <ul class="hide-on-large-only sidenav" id="sidenav">
        <li><a href="home.html#about_us" class="orange-text text-darken-4 scrollspy">Who We Are</a></li>
        <li><a href="home.html#catergories" class="orange-text text-darken-4 scrollspy">Find a Recipe</a></li>
        <li><a href="home.html#experts" class="orange-text text-darken-4 scrollspy">Meet the Experts</a></li>
        <li><a href="home.html#cliente" class="orange-text text-darken-4 scrollspy">Cliente</a></li>
        <br>
        <li><a href="./login.php" target="_blank" class="btn orange darken-4 z-depth-0">Login</a></li>
    </ul>
    <div class="slider hide-on-med-and-down">
      <ul class="slides">
        <li><img src="assets/img/soup-main.jpg" class="responsive-img" alt="">
        </li>
      </ul>
    </div>
    <img src="assets/img/soup-main.jpg" alt="" class="responsive-img hide-on-large-only">
  </header>
  <main>
    <section class="section">
      <div class="container">
        <h1 class="orange-text text-darken-4 hide-on-med-and-down">Soups</h1>
        <h3 class="orange-text text-darken-4 hide-on-large-only">Soups</h3>
        <p class="text-justify">Soup is one of the world’s oldest and most universal foods, said Janet Clarkson, author of the book “Soup: A Global History.” “Every culture has some kind of soup,” she said. “It’s got very ancient roots.” Early people simmered it in everything from turtle shells to lengths of bamboo, she writes in the book, turning out metal soup pots starting in the Bronze Age.
        <br> <br>
        <span class="hide-on-med-and-down">Boiling food made it possible to subsist on stable grains, with herbs and other ingredients added for nourishment or medicinal purposes. Each time you deliver a pot of hearty soup (with perhaps a side of bread) to a friend with the sniffles, Clarkson said you’re in fact carrying on an age-old tradition. “Separating food and medicine — that’s not how ancient people thought of it,” she said. “I think in every country in the world, historically, some soups were seen as restorative.”</span>
        <br> <br>
        <span class="orange-text text-darken-4">Here's a few popular soups from around the world.</span>
        </p>
    </div>
        <div class="row container">
            <?php foreach ($soups as $soup) { ?>
          <div class="col s12 l4">
            <div class="card z-depth-0 grey lighten-4">
              <div class="card-image">
                <img src="assets/img/tonkotsu-ramen.webp" alt="" class="responsive-img">
              </div>
              <div class="card-content">
                <h6 class="orange-text text-darken-4"><?php echo $soup['recipe_name']; ?></h6>
                <p><?php echo $soup['description']; ?></p>
              </div>
              <div class="card-action">
                <a href="./view_recipe.php?recipe_id=<?php echo $soup['recipe_id']; ?>" class="btn btn-flat white-text orange darken-2">view more</a>
            </div>
            </div>
          </div>
        <?php } ?>
        </div>
        <div class="section container center-align">
          <a href="https://en.wikipedia.org/wiki/List_of_soups" target="_blank" class="btn btn-flat btn-large orange darken-4 white-text ">VIEW ALL SOUPS</a>
        </div>
      </div>
    </section>
  </main>
  <footer class="page-footer section scrollspy gradient-bg" id="footer">
    <section class="section">
        <div class="section container">
            <div class="section row">
                <div class="col s12 l3">
                    <h6 class="orange-text text-darken-4">About</h6>
                    <ul>
                        <li><a class="black-text scrollspy" href="home.html#about_us">Who We Are</a></li>
                        <li><a class="black-text scrollspy" href="home.html#experts">Meet the Chefs</a></li>
                        <li><a class="black-text scrollspy" href="#top">Back to Top</a></li>
                    </ul>
                </div>
                <div class="col s12 l3">
                    <h6 class="orange-text text-darken-4">Explore</h6>
                    <ul>
                        <li><a class="black-text" href="./cakes.php">Cakes</a></li>
                        <li><a class="black-text" href="./chickens.php">Chicken</a></li>
                        <li><a class="black-text" href="./soups.php">Soups</a></li>
                    </ul>
                </div>
                <div class="col s12 l3">
                    <h6 class="orange-text text-darken-4">Legal</h6>
                    <ul>
                        <li><a class="black-text" href="">Privacy Policy</a></li>
                        <li><a class="black-text" href="">Terms & Conditions</a></li>
                        <li><a class="black-text" href="">Disclosure</a></li>
                    </ul>
                </div>
                <div class="col s12 l3">
                    <h6 class="orange-text text-darken-4">Contact Us</h6>
                    <ul>
                        <li><a class="black-text" target="_blank" href="tel:+2349024364876">+2349024364876</a></li>
                        <li><a class="black-text" target="_blank" href="mailto:coresystechng">customersupport@recipe.com</a></li>
                        <li><a class="black-text" target="_blank" href="https://instagram.com/coresystechng">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright transparent">
            <div class="container center-align">
                <p>&COPY; 2024. Recipe.com. All rights reserved. </p>
            </div>
        </div>
    </section>
  </footer>

  <script src="assets/js/jqueryv3.4.1.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script>
      $(document).ready(function(){
          $('.sidenav').sidenav();
          $('.slider').slider({
              indicators: false,
              height: 720
          });
          $('.scrollspy').scrollSpy();
      });
  </script>
</body>
</html>