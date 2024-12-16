<?php

include "./connect.php";

$fetch_query = "SELECT * FROM `recipes_tb` WHERE `recipe_type` = 'chicken'";

$send_query = mysqli_query($connect,$fetch_query);

$chickens = mysqli_fetch_all($send_query,MYSQLI_ASSOC) ;

//print_r($chickens);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Materialize css-->
    <link rel="stylesheet" href="assets/css/materialize.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/rcon.png" type="image/x-icon">
    <!-- Materialize Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Chicken-Recipe.com</title>

    <style>
    *{
        font-family: "Josefin Sans", serif;
        font-optical-sizing: auto;
        font-style: normal;
        }

        .h-25{
            height: 75vh !important;
            width: 98.7vw;
        }

        .py-1{
            padding: 20px 0;
        }

        .gradient-bg {
        background: linear-gradient(to bottom, #ffffff, #2E7D32);
        }

        p {
        font-size: 14pt !important;
        }
    </style>
</head>
<body>
    <header class="top">
        <!-- Nav Component 👀👇🏾 -->
        <div class="navbar-fixed">
            <nav class="white z-depth-0">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l3">
                            <a href="/" class="brand-logo">
                                <!-- Logo for Desktops 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="150px" class="hide-on-med-and-down">
                                <!-- Slightly Smaller Logo for Tablets & Smartphones 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="120px" class="hide-on-large-only">
                            </a>
                            <!-- Sidenav Trigger -->
                            <a href="#sidenav" class="sidenav-trigger left">
                                <i class="material-icons green-text text-darken-4">menu</i>
                            </a>
                        </div>
                        <!-- Nav links for Desktops -->
                        <div class="col s12 m6 l9 hide-on-med-and-down">
                            <ul class="right">
                                <li><a href="home.html#about_us" class="green-text text-darken-4 scrollspy">Who We Are</a></li>
                                <li><a href="home.html#catergories" class="green-text text-darken-4 scrollspy">Find a Recipe</a></li>
                                <li><a href="home.html#experts" class="green-text text-darken-4 scrollspy">Meet the Experts</a></li>
                                <li><a href="home.html#cliente" class="green-text text-darken-4 scrollspy">Cliente</a></li>
                                <li><a href="./login.php" target="_blank" class="btn rounded-edges green white-text darken-4 scrollspy">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidenav 👀👇🏾 -->
        <ul class="hide-on-large-only sidenav" id="sidenav">
            <li><a href="home.html#about_us" class="green-text text-darken-4 scrollspy">Who We Are</a></li>
            <li><a href="home.html#catergories" class="green-text text-darken-4 scrollspy">Find a Recipe</a></li>
            <li><a href="home.html#experts" class="green-text text-darken-4 scrollspy">Meet the Experts</a></li>
            <li><a href="home.html#cliente" class="green-text text-darken-4 scrollspy">Cliente</a></li>
            <br>
            <li><a href="./login.php" target="_blank" class="btn green darken-4 z-depth-0">Login</a></li>
        </ul>

        <!-- main Image-->
        <div class="slider hide-on-med-and-down">
            <ul class="slides">
                <li>
                    <img src="./assets/img/chicken-main.jpg"  class="" alt=""> <!-- random image -->
                </li>
            </ul>
        </div>
        <!-- <img src="./assets/img/chicken-main.jpg" alt="" class="responsive-img hide-on-large-only"> -->
    </header>
    <main>
        <section class="section">
            <div class="container">
                <h4 class="green-text darken-4-text py-1">Chicken</h4>
                <p>What's for dinner? We hope it's chicken! Chicken in all its many forms—from breasts to thighs, or grilled to fried—has long been considered the dinner winner winner, and rightfully so. Unfortunately, that can mean falling into a dinner rut much too easily for our liking. If you’re like us and just can’t bear to make your (or your family’s) old standbys for the umpteenth time, we’ve got you. Get inspired with our list of our 93 best chicken dinner recipes—you’ll be sure to find a new weeknight favorite.</p>
                <p class="">Chicken is a popular, versatile type of poultry that’s enjoyed worldwide in various forms, from roasted and grilled to fried and stewed. It's known for its mild flavor, which makes it adaptable to many cuisines and seasonings. Chicken is rich in protein, essential vitamins (like B6 and niacin), and minerals (such as phosphorus and selenium), making it a nutritious choice. It can be cooked with spices, herbs, or marinades, allowing for endless recipe possibilities. Common dishes include chicken curry, grilled chicken, chicken soup, and chicken salad, each offering a different taste and texture experience.</p>
                <p class="green-text text-darken-4">Here's a few popular chicken recipes from around the world.</p>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row">
                    <?php foreach ($chickens as $chicken){?>
                    <div class="col l4 m12 s12">
                        <div class="card z-depth-0 grey lighten-5">
                            <div class="card-image">
                                <img src="assets/img/Chicken 1.jpg">
                            </div>
                                <div class="card-content">
                                    <span class="card-title green-text text-darken-3"><?php echo $chicken['recipe_name']; ?></span>
                                <p><?php echo $chicken['description']; ?></p>
                                </div>
                                <div class="card-action">
                                    <a href="./view_recipe.php?recipe_id=<?php echo $chicken['recipe_id']; ?>" class="btn btn-flat white-text green darken-2">view more</a>
                                </div>
                            </div>
                        </div>
                    <?php }  ?>
                </div>
                <div class="center-align">
                    <a href="https://en.wikipedia.org/wiki/List_of_chicken_dishes" class="btn-large btn-flat white-text green darken-3">view all chicken</a>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer section scrollspy gradient-bg" id="footer">
        <section class="section">
            <div class="section container">
                <div class="section row">
                    <div class="col s12 l3">
                        <h6 class="green-text text-darken-4">About</h6>
                        <ul>
                            <li><a class="black-text scrollspy" href="home.html#about_us">Who We Are</a></li>
                            <li><a class="black-text scrollspy" href="home.html#experts">Meet the Chefs</a></li>
                            <li><a class="black-text scrollspy" href="#top">Back to Top</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="green-text text-darken-4">Explore</h6>
                        <ul>
                            <li><a class="black-text" href="./cakes.html">Cakes</a></li>
                            <li><a class="black-text" href="./Chicken.html">Chicken</a></li>
                            <li><a class="black-text" href="./soups.html">Soups</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="green-text text-darken-4">Legal</h6>
                        <ul>
                            <li><a class="black-text" href="">Privacy Policy</a></li>
                            <li><a class="black-text" href="">Terms & Conditions</a></li>
                            <li><a class="black-text" href="">Disclosure</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="green-text text-darken-4">Contact Us</h6>
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

    <!-- JavaScript Section-->
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