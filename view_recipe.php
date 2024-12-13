<?php 
    $recipe_id = $_GET ['recipe_id'];
  //  echo $recipe_id;

    include "./connect.php";

    $fetch_query = "SELECT * FROM `recipes_tb` WHERE `recipe_id` = '$recipe_id'";

    $send_query = mysqli_query($connect, $fetch_query);

    $recipe = mysqli_fetch_assoc($send_query);

   // print_r($recipe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
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
    <title>Document</title>
</head>
<body>
<header class="top">
        <!-- Nav Component 👀👇🏾 -->
        <div class="navbar-fixed" >
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
        <!-- <img src="./assets/img/chicken-main.jpg" alt="" class="responsive-img hide-on-large-only"> -->
</header>
    <main class="">
        <section class="section container">
            <div class="container">
                <h1><?php echo $recipe['recipe_name']; ?></h1>
                <ul class="collection">
                    
                    <li class="collection-item avatar valign-wrapper">
                        <i class="material-icons left green darken-2 circle">expand_more</i>
                        <?php echo $recipe['recipe_type']?>
                    </li>
                    <li class="collection-item avatar valign-wrapper">
                        <i class="material-icons left green darken-2 circle">message</i>
                        <?php  echo $recipe['description'] ?>
                    </li>
                    <li class="collection-item avatar valign-wrapper">
                        <i class="material-icons left green darken-2 circle">format_list_numbered</i>
                        <?php  echo $recipe['ingredients'] ?>
                    </li>
                    <li class="collection-item avatar valign-wrapper">
                        <i class="material-icons left green darken-2 circle">access_time</i>
                        <?php  echo $recipe['duration'] ?> minutes
                    </li>
                    <li class="collection-item avatar valign-wrapper">
                        <i class="material-icons left green darken-2 circle">date_range</i>
                        <?php  echo $recipe['date_created'] ?>
                    </li>
                </ul>
            </div>
            <div class="center-align container section">
                <a href="<?php echo $recipe ['recipe_type']?>.php" class="btn btn-large btn-flat green darken-2 white-text">go back</a>
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
</body>
</html>