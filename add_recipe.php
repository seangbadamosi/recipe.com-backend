<?php

include "connect.php";

  $recipe_name = "";
  $recipe_type = ""; 
  $description = "";
  $ingredients = "";
  $duration = "";

  if (isset($_POST["submit"])) {
    $recipe_name = $_POST ["recipe_name"];
    $recipe_type = $_POST ["recipe_type"];
    $description = $_POST ["description"];
    $ingredients = $_POST ["ingredients"];
    $duration = $_POST ["duration"];

    $upload_query = "INSERT INTO `recipes_tb`( `recipe_name`, `recipe_type`, `description`, `ingredients`, `duration`) VALUES ('$recipe_name','$recipe_type','$description','$ingredients','$duration')";

    $send_query = mysqli_query($connect, $upload_query);

    
    if( $send_query) {
        header("location:home.html");
    }

    else{
      echo "Connection Error";
    }
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Recipe</title>
    <!-- Fav Icon 👀👇🏾 -->
    <link rel="shortcut icon" href="assets/img/rcon.png" type="image/x-icon">
    <!-- MaterializeCSS 👀👇🏾 -->
    <link rel="stylesheet" href="assets/css/materialize.css">
    <!-- Material Icons 👀👇🏾 -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Josephin Sans Font 👀👇🏾-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <style>
        * {
        font-family: "Josefin Sans", serif;
        font-optical-sizing: auto;
        font-style: normal;
        }

        a:hover {
            font-weight: 800 !important;
            transition: ease-in .2s;
        }

        a.btn {
            border-radius: 10px !important;
        }

        p {
            font-size: 16pt !important;
        }
        .text-justify {
            text-align: justify !important;
        }

        .rounded-edges {
            border-radius: 10px !important;
        }

        .card-image:hover .overlay {
            border-radius: 10px;
            opacity: 1;
            cursor: pointer;
            text-decoration: underline white;
        }

        .underline {
            text-decoration: underline white !important;
        }

        .gradient-bg {
        background: linear-gradient(to bottom, #ffffff, #e65100);
        }

           /* label focus color */
        .input-field input:focus + label, textarea:focus + label {
          color: grey !important;
        }
        /* label underline focus color */
        .input-field input:focus, textarea:focus{
          border-bottom: 1px solid #E65100 !important;
          box-shadow: 0 1px 0 0 #E65100 !important;
        }

        .dropdown-content li > a, .dropdown-content li > span {
          color: #e65100 !important;
        }
    </style>
  </head>
  <body>
    <header class="top">
      <!-- Nav Component 👀👇🏾 -->
      <div class="navbar-fixed">
          <nav class="white z-depth-0">
              <div class="container">
                  <div class="row ">
                      <div class="col s12 m6 l3">
                          <a href="/" class="brand-logo">
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
      <div class="slider">
        <ul class="slides">
          <li><img src="assets/img/welcome-banner.jpg" class="responsive-img" alt=""></li>
        </ul>
      </div>
    </header>    
    <main>

      <section class="section container">
        <div class="container">
          <div class="container">
          <h3 class="center-align orange-text text-darken-4">Add a New Recipe</h3>
          <br><br>
          <form action="add_recipe.php" method="POST">
            <div class="row">
              <div class="col s12 l8 input-field">
                <label for="recipe_name">Recipe Name</label>
                <input type="text" name="recipe_name" id="recipe_name">
              </div>
              <div class="col s12 l4 input-field">
                <select id="recipe_type" name="recipe_type" class="grey-text">
                  <option class="orange-text text-darken-4" value="cake">Cake</option>
                  <option class="orange-text text-darken-4" value="chicken">Chicken</option>
                  <option class="orange-text text-darken-4" value="soup">Soup</option>
                </select>
                <label for="recipe_type">Recipe Type</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 input-field">
                <textarea id="description" name="description" class="materialize-textarea"></textarea>
                <label for="description">Description</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 l10 input-field">
                <input type="text" name="ingredients" id="ingredients">
                <label for="ingredients">Ingredients</label>
              </div>
              <div class="col s12 l2 input-field">
                <input type="number" name="duration" id="duration">
                <label for="duration">Duration</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 center-align">
                <input type="submit" value="submit" name="submit" class="btn btn-large btn-flat orange darken-4 white-text">
              </div>
            </div>
          </form>
          </div>
        </div>
  
      </section>
    </main>
    <footer>

    </footer>
    <!-- Scripts Below -->
    <script src="assets/js/jqueryv3.4.1.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
        $('select').formSelect();
        $('.slider').slider({indicators: false});
      });
    </script>
  </body>
</html>