<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakes - Recipe.com</title>
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

        .text-justify {
            text-align: justify !important;
        }

        a:hover {
            font-weight: 800 !important;
            transition: ease-in .2s;
        }

        p {
            font-size: 16pt !important;
        }
        .text-justify {
            text-align: justify !important;
        }

        .underline {
            text-decoration: underline white !important;
        }

        .gradient-bg {
        background: linear-gradient(to bottom, #ffffff, #b71c1c);
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
                            <a href="/" class="brand-logo">
                                <!-- Logo for Desktops 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="150px" class="hide-on-med-and-down">
                                <!-- Slightly Smaller Logo for Tablets & Smartphones 👀👇🏾 -->
                                <img src="assets/img/logo.png" alt="" width="120px" class="hide-on-large-only">
                            </a>
                            <!-- Sidenav Trigger -->
                            <a href="#sidenav" class="sidenav-trigger left">
                                <i class="material-icons red-text text-darken-4">menu</i>
                            </a>
                        </div>
                        <!-- Nav links for Desktops -->
                        <div class="col s12 m6 l9">
                            <ul class="right">
                                <li><a href="home.html#about_us" class="red-text text-darken-4 scrollspy">Who We Are</a></li>
                                <li><a href="home.html#catergories" class="red-text text-darken-4 scrollspy">Find a Recipe</a></li>
                                <li><a href="home.html#experts" class="red-text text-darken-4 scrollspy">Meet the Experts</a></li>
                                <li><a href="home.html#cliente" class="red-text text-darken-4 scrollspy">Cliente</a></li>
                                <li><a href="./login.php" target="_blank" class="btn rounded-edges red white-text darken-4 scrollspy">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidenav 👀👇🏾 -->
        <ul class="hide-on-large-only sidenav" id="sidenav">
            <li><a href="home.html#about_us" class="red-text text-darken-4 scrollspy">Who We Are</a></li>
            <li><a href="home.html#catergories" class="red-text text-darken-4 scrollspy">Find a Recipe</a></li>
            <li><a href="home.html#experts" class="red-text text-darken-4 scrollspy">Meet the Experts</a></li>
            <li><a href="home.html#cliente" class="red-text text-darken-4 scrollspy">Cliente</a></li>
            <br>
            <li><a href="./login.php" target="_blank" class="btn red darken-4 z-depth-0">Login</a></li>
        </ul>
        <!-- Background image & Welcome Text (Desktops) 👀👇🏾 -->
        <div class="hide-on-med-and-down">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="assets/img/cake-main.jpg">
                    </li>
                </ul>
            </div>
        </div>
        <!-- Background Image & Welcome Text (Tabs & Mobile) 👀👇🏾 -->
        <div class="hide-on-large-only left-align white-text valign-wrapper" style="height: 40vh; background-image: url(assets/img/cake-main.jpg); background-size: cover;"></div>
    </header>
    <main>
        <!-- Welcome Section 👀👇🏾 -->
        <section class="section">
            <div class="section container text-justify">
                <h2 class="hide-on-small-and-down red-text text-darken-4">Cakes</h2>
                <h2 style="font-size: 30px;" class="hide-on-large-only red-text text-darken-4">Cakes</h2>
                <p style="font-size: 20px !important;">Cake is a flour confection made from flour, sugar, and other ingredients and is usually baked. In their oldest forms, cakes were modifications of bread, but cakes now cover a wide range of preparations that can be simple or elaborate and which share features with desserts such as pastries, meringues, custards, and pies.</p>
                <p class="hide-on-med-and-down" style="font-size: 20px !important;">Cake is often served as a celebratory dish on ceremonial occasions, such as weddings, anniversaries, and birthdays. There are countless cake recipes; some are bread-like, some are rich and elaborate, and many are centuries old. Cake making is no longer a complicated procedure; while at one time considerable labor went into cake making (particularly the whisking of egg foams), baking equipment and directions have been simplified so that even the most amateur of cooks may bake a cake.</p>
                <h5 style="font-size: 20px !important;" class="red-text text-darken-4">Here's a few popular cakes from around the world.</h5>
            </div>
        </section>

        <!-- Category Section 👀👇🏾 -->
        <section class="section">
            <div class="section container">
                <!-- On Desktops 👀👇🏾 -->
                <div class="row hide-on-med-and-down">
                    <div class="col s12 l4">
                        <div class="card z-depth-0" style="background-color: #f5f5f5;">
                            <div class="card-image">
                                <img src="assets/img/carrot cake.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="card-content">
                                <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Carrot Cake | England</h5>
                                <p style="font-size: 16px !important;">Carrot cake combines the natural sweetness of carrots with warm spices and creamy frosting for a deliciously moist and flavorful treat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card z-depth-0" style="background-color: #f5f5f5;">
                            <div class="card-image">
                                <img src="assets/img/cheese cake.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="card-content">
                                <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Cheesecake | Ancient Greece</h5>
                                <p style="font-size: 16px !important;">Cheesecake is a creamy, rich dessert with a tangy-sweet flavor, often topped with fruit, glaze, chocolate, or nuts for added texture.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card z-depth-0" style="background-color: #f5f5f5;">
                            <div class="card-image">
                                <img src="assets/img/chiffon cake.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="card-content">
                                <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Chiffon Cake | United States</h5>
                                <p style="font-size: 16px !important;">Chiffon cake is a light, airy dessert with a delicate texture, combining oil and whipped egg whites for a tender, melt-in-your-mouth treat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row hide-on-med-and-down">
                    <div class="col s12 l4">
                        <div class="card z-depth-0" style="background-color: #f5f5f5;">
                            <div class="card-image">
                                <img src="assets/img/chocolate cake.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="card-content">
                                <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Chocolate Cake | United States</h5>
                                <p style="font-size: 16px !important;">Chocolate cake is a rich, moist dessert with a deep, indulgent flavor, often paired with creamy frosting or ganache for extra decadence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card z-depth-0" style="background-color: #f5f5f5;">
                            <div class="card-image">
                                <img src="assets/img/coffee cake.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="card-content">
                                <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Coffee Cake | Germany</h5>
                                <p style="font-size: 16px !important;">Coffee cake is a soft, sweet dessert with a hint of cinnamon, often topped with a crumbly streusel, perfect for pairing with a warm cup of coffee.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card z-depth-0" style="background-color: #f5f5f5;">
                            <div class="card-image">
                                <img src="assets/img/fruit cake.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="card-content">
                                <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Fruit Cake | Ancient Rome</h5>
                                <p style="font-size: 16px !important;">Fruit cake is a dense, sweet dessert made with a mix of dried fruits, nuts, and spices, often soaked in liquor for added richness and flavor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row hide-on-med-and-down">
                    <div class="col s12 l4">
                        <div class="card z-depth-0" style="background-color: #f5f5f5;">
                            <div class="card-image">
                                <img src="assets/img/layer cake.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="card-content">
                                <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Layer Cake | United States</h5>
                                <p style="font-size: 16px !important;">Layer cake is a multi-tiered dessert with layers of moist cake and filling, often frosted and decorated for a visually stunning, delicious treat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card z-depth-0" style="background-color: #f5f5f5;">
                            <div class="card-image">
                                <img src="assets/img/pound cake.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="card-content">
                                <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Pound Cake | England</h5>
                                <p style="font-size: 16px !important;">Pound cake is a dense, buttery dessert made with equal parts flour, butter, sugar, and eggs, offering a rich, indulgent flavor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card z-depth-0" style="background-color: #f5f5f5;">
                            <div class="card-image">
                                <img src="assets/img/red velvet cake.jpg" alt="" class="responsive-img materialboxed">
                            </div>
                            <div class="card-content">
                                <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Red Velvet Cake | United States</h5>
                                <p style="font-size: 16px !important;">
                                    Red velvet cake is a moist, velvety dessert with a subtle cocoa flavor, paired with tangy cream cheese frosting for a rich, indulgent treat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <a href="https://en.wikipedia.org/wiki/List_of_cakes" target="_blank" style="font-size: 12px;" class="btn btn-large red darken-4 hide-on-med-and-down z-depth-0">VIEW ALL CAKES</a>
                </div>
                <!-- On Mobiles 👀👇🏾 -->
            </div>
            <div class="row hide-on-large-only">
                <div class="col s12 m12 l4">
                    <div class="card z-depth-0" style="background-color: #f5f5f5;">
                        <div class="card-image">
                            <img src="assets/img/carrot cake.jpg" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Carrot Cake | England</h5>
                            <p style="font-size: 16px !important;">Carrot cake combines the natural sweetness of carrots with warm spices and creamy frosting for a deliciously moist and flavorful treat.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card z-depth-0" style="background-color: #f5f5f5;">
                        <div class="card-image">
                            <img src="assets/img/cheese cake.jpg" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Cheesecake | Ancient Greece</h5>
                            <p style="font-size: 16px !important;">Cheesecake is a creamy, rich dessert with a tangy-sweet flavor, often topped with fruit, glaze, chocolate, or nuts for added texture.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card z-depth-0" style="background-color: #f5f5f5;">
                        <div class="card-image">
                            <img src="assets/img/chiffon cake.jpg" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Chiffon Cake | United States</h5>
                            <p style="font-size: 16px !important;">Chiffon cake is a light, airy dessert with a delicate texture, combining oil and whipped egg whites for a tender, melt-in-your-mouth treat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide-on-large-only">
                <div class="col s12 m12 l4">
                    <div class="card z-depth-0" style="background-color: #f5f5f5;">
                        <div class="card-image">
                            <img src="assets/img/chocolate cake.jpg" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Chocolate Cake | United States</h5>
                            <p style="font-size: 16px !important;">Chocolate cake is a rich, moist dessert with a deep, indulgent flavor, often paired with creamy frosting or ganache for extra decadence.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card z-depth-0" style="background-color: #f5f5f5;">
                        <div class="card-image">
                            <img src="assets/img/coffee cake.jpg" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Coffee Cake | Germany</h5>
                            <p style="font-size: 16px !important;">Coffee cake is a soft, sweet dessert with a hint of cinnamon, often topped with a crumbly streusel, perfect for pairing with a warm cup of coffee.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card z-depth-0" style="background-color: #f5f5f5;">
                        <div class="card-image">
                            <img src="assets/img/fruit cake.jpg" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Fruit Cake | Ancient Rome</h5>
                            <p style="font-size: 16px !important;">Fruit cake is a dense, sweet dessert made with a mix of dried fruits, nuts, and spices, often soaked in liquor for added richness and flavor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hide-on-large-only">
                <div class="col s12 m12 l4">
                    <div class="card z-depth-0" style="background-color: #f5f5f5;">
                        <div class="card-image">
                            <img src="assets/img/layer cake.jpg" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Layer Cake | United States</h5>
                            <p style="font-size: 16px !important;">Layer cake is a multi-tiered dessert with layers of moist cake and filling, often frosted and decorated for a visually stunning and delicious treat.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card z-depth-0" style="background-color: #f5f5f5;">
                        <div class="card-image">
                            <img src="assets/img/pound cake.jpg" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Pound Cake | England</h5>
                            <p style="font-size: 16px !important;">Pound cake is a dense, buttery dessert made with equal parts flour, butter, sugar, and eggs, offering a rich, indulgent flavor.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card z-depth-0" style="background-color: #f5f5f5;">
                        <div class="card-image">
                            <img src="assets/img/red velvet cake.jpg" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content">
                            <h5 class="red-text text-darken-4" style="font-size: 16px !important;">Red Velvet Cake | United States</h5>
                            <p style="font-size: 16px !important;">
                                Red velvet cake is a moist, velvety dessert with a subtle cocoa flavor, paired with tangy cream cheese frosting for a rich, indulgent treat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <a href="https://en.wikipedia.org/wiki/List_of_cakes" style="font-size: 12px;" class="btn red darken-4 hide-on-large-only z-depth-0">VIEW ALL CAKES</a>
            </div>
        </section>
    </main>
    <footer class="page-footer section scrollspy gradient-bg" id="footer">
        <section class="section">
            <div class="section container">
                <div class="section row">
                    <div class="col s12 l3">
                        <h6 class="red-text text-darken-4">About</h6>
                        <ul>
                            <li><a class="black-text scrollspy" href="home.html#about_us">Who We Are</a></li>
                            <li><a class="black-text scrollspy" href="home.html#experts">Meet the Chefs</a></li>
                            <li><a class="black-text scrollspy" href="#top">Back to Top</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="red-text text-darken-4">Explore</h6>
                        <ul>
                            <li><a class="black-text" href="./cakes.html">Cakes</a></li>
                            <li><a class="black-text" href="./Chicken.html">Chicken</a></li>
                            <li><a class="black-text" href="./soups.html">Soups</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="red-text text-darken-4">Legal</h6>
                        <ul>
                            <li><a class="black-text" href="">Privacy Policy</a></li>
                            <li><a class="black-text" href="">Terms & Conditions</a></li>
                            <li><a class="black-text" href="">Disclosure</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l3">
                        <h6 class="red-text text-darken-4">Contact Us</h6>
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

    <!-- Scripts Below 👀👇🏾 -->
    <script src="assets/js/jqueryv3.4.1.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
            $('.slider').slider({
                height: 500,
                interval: 5000,
                indicators: false
            });
            $('.scrollspy').scrollSpy();
        });
    </script>
</body>
</html>