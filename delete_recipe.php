<?php
    $recipe_id = $_GET['recipe_id'] ;

    include "./connect.php";

    $fetch_query ="SELECT * FROM `recipes_tb` WHERE `recipe_id` = '$recipe_id' ";

    $send_query = mysqli_query($connect, $fetch_query);

    $recipe = mysqli_fetch_assoc($send_query);

   // print_r($recipe);

    $delete_id = "";

    if(isset($_POST['delete'])) {
        $delete_id = $_POST['delete_id'];

        $delete_query = "DELETE FROM `recipes_tb` WHERE `recipe_id` = '$delete_id' ";

        $send_delete_query = mysqli_query($connect, $delete_query);

        if($delete_query){
            header("Location: home.html");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">

    <title>Document</title>
    
<!-- External Css -->
    <style>
        * {
            font-family: "Josefin Sans", serif;
        }

        .gradient-bg {
            background: linear-gradient(to bottom, #ffffff, #e65100);
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
</header>

<main class="">
    <div class="container">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col l7">
                        <div class="card-image">
                            <img src="./assets/img/Chicken 1.jpg" alt="" class="">
                        </div>
                    </div>
                    <div class="col l5">
                        <div class="card-content center-align">
                            <p class="">Lorem ipsum dolor sit amet consectetur. <b><?php echo $recipe["recipe_name"]; ?></b></p>
                        </div>
                        <div class="card-action">
                            <form action="./delete_recipe.php" method="post">
                                <input type="hidden" name="delete_id" id="" value="<?php echo $recipe["recipe_id"]; ?>">
                                <input type="submit" value="delete" class="btn red" name="delete">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
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
</body>
</html>