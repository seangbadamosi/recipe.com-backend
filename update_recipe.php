<?php
    include "./connect.php";

    $recipe_id = $_GET ['recipe_id'];

    $fetch_query = "SELECT * FROM `recipes_tb` WHERE `recipe_id` = '$recipe_id'";

    $send_query = mysqli_query($connect, $fetch_query);

    $recipe = mysqli_fetch_assoc($send_query);

    print_r($recipe);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
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


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
</body>
</html>