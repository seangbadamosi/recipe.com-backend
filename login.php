<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Materialize Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <style>
        .orange{
            background-color: #E6512A !important;
        }

        .orange-text{
            color: #E6512A !important;
        }

        .btns{
            border-radius: 10px !important;
        }

        *{
        font-family: "Josefin Sans", serif;
        font-optical-sizing: auto;
        font-style: normal;
        }

        .mb-1{
            margin-bottom: 20px;
        }

        .mb-2{
            padding-top: 200px;
        }

        .gradient-bg {
        background: linear-gradient(to bottom, #ffffff, #e65100);
        }

        @media screen and (max-width: 1278px) {
            .media{
                font-size: 13px !important;
            }
        }

        @media screen  and (max-width: 1173px){
            .media{
                font-size: 9px !important;
            }

        }
    </style>
    <title>Login Page</title>
</head>
<body>
    <header class="">
        <!-- Destkop/Navbar Section -->
        <div class="navbar-fixed">
            <nav class="white z-depth-0">
                <div class="container">
                    <div class="row">
                        <div class="col l4 pull-l1 s4">
                            <a href="/" class="brand-logo">
                                <!-- Logo for Desktops 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="150px" class="hide-on-med-and-down">
                                <!-- Slightly Smaller Logo for Tablets & Smartphones 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="120px" class="hide-on-large-only">
                            </a>
                        </div>
                        <div class="col l8 s8">
                            <ul class="right hide-on-med-and-down">
                                <li><a href="" class="orange-text media">Who We Are</a></li>
                                <li><a href="" class="orange-text media">Find A Recipe</a></li>
                                <li><a href="" class="orange-text media">Meet the Experts</a></li>
                                <li><a href="" class="orange-text media">Clients</a></li>
                                <li><a href="" class="btn btns btn-small orange size media">login</a></li>
                            </ul>
                            
                            <!-- Sidenav Trigger -->
                            <a href="#sidenav" class="sidenav-trigger right">
                                <i class="material-icons orange-text text-darken-4">menu</i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Sidenav Section -->
        <ul class="hide-on-large-only sidenav" id="sidenav">
            <li><a href="home.html#about_us" class="orange-text text-darken-4 scrollspy">Who We Are</a></li>
            <li><a href="home.html#catergories" class="orange-text text-darken-4 scrollspy">Find a Recipe</a></li>
            <li><a href="home.html#experts" class="orange-text text-darken-4 scrollspy">Meet the Experts</a></li>
            <li><a href="home.html#cliente" class="orange-text text-darken-4 scrollspy">Cliente</a></li>
            <br>
            <li><a href="./login.php" target="_blank" class="btn btns orange darken-4 z-depth-0">Login</a></li>
        </ul>
    </header>

    <main class="">
    <!-- Slider Image -->
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="./assets/img/welcome-banner.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="center">
                <h4 class="orange-text">Add A New Recipe</h4>
            </div>
            <form action="./login.php" method="get">
                <div class="row">
                    <div class="input-field col s8">
                        <label for="recipe_name">Recipe Name</label>
                        <input id="recipe_name" type="text" name="recipe_name" class="validate">
                    </div>
                    <div class="input-field col s4 mb-2"  style="margin-top: -7px;">
                        <label class="" for="recipe_type">Recipe Type</label><br>
                        <select class="">
                            <option value="" disabled selected>Choose recipe type</option>
                            <option value="1">Cake</option>
                            <option value="2">Chicken</option>
                            <option value="3">Soup</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="Description">Description</label>
                        <textarea id="Description" name="Description" class="materialize-textarea"></textarea>
                    </div>
                    <div class="row">
                        <div class="input-field col s9">
                            <label for="Ingredients">Ingredients</label>
                            <textarea id="Ingredients" name="Ingredients" class="materialize-textarea"></textarea>
                        </div>
                        <div class="input-field col s3">
                            <input type="number" name="" id="" min="0" max="100" value="0">
                        </div>
                    </div>
                    </div>
                    <div class="center mb-1">
                        <a href="#" class="btn-large orange">Submit</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="page-footer section scrollspy gradient-bg" id="footer">
        <section>
            <div class="section container">
                <div class="section row">
                    <div class="col s12 l3">
                        <h6 class="orange-text text-darken-4">About</h6>
                        <ul>
                            <li><a class="black-text scrollspy" href="#about_us">Who We Are</a></li>
                            <li><a class="black-text scrollspy" href="#experts">Meet the Chefs</a></li>
                            <li><a class="black-text scrollspy" href="#top">Back to Top</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="orange-text text-darken-4">Explore</h6>
                        <ul>
                            <li><a class="black-text" href="./cakes.html">Cakes</a></li>
                            <li><a class="black-text" href="./Chicken.html">Chicken</a></li>
                            <li><a class="black-text" href="./soups.html">Soups</a></li>
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


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        
    $(document).ready(function(){
        $('.slider').slider({
            indicators:false
        });
        $('select').formSelect();
        $('.sidenav').sidenav();
    });
        
    </script>
</body>
</html>