<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">
  <title>WOW Food</title>
</head>

<body>
  <!-- Navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" class="navbar-brand-img" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav navbar-nav-custom">
          <li class="nav-item">
            <a class="nav-link nav-link-custom" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link-custom" href="#explore">Categories</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link-custom" href="#food-menu">Foods</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link-custom" href="#footer">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->


  <!-- Search -->
  <div class="container-fluid p-0">
    <div class="header__search">
      <input class="header__search-input" type="text" placeholder="Search for Food...">
      <input class="header__search-btn" type="button" value="Search">
    </div>
  </div>
  <!-- End Search -->


  <!-- Explore Foods -->
  <div id="explore" class="container explore pb-5">
    <div class="row explore-list">
      <h1 class="explore-title p-5">Explore Foods</h1>
      <div class="explore-item explore-item-pizza col-md-4 mb-6 col-sm-12 col-12">
        <h2 class="explore-item-title text-white">Pizza</h2>
      </div>

      <div class="explore-item explore-item-burger mb-5">
        <h2 class="explore-item-title text-white">Burger</h2>
      </div>

      <div class="explore-item explore-item-momo">
        <h2 class="explore-item-title text-white">Momo</h2>
      </div>
    </div>
  </div>
  <!-- End Explore Foods -->


  <!-- Food Menu -->
  <div id="food-menu" class="container-fluid bg-light">
    <div class="row food-menu-list pb-5">
      <h1 class="food-menu-title p-5">Food Menu</h1>
      <div class="food-menu__item p-0 col-md-6 mb-6 col-sm-12 col-12">
        <div class="item-food  bg-white">
          <img class="item-food-img" src="images/menu-pizza.jpg" alt="">
          <div class="item-price pr-1">
            <h3 class="mb-0">Food Title</h3>
            <span class="food-menu__item-price">$2.3</span>
            <p class="food-menu__item-description text-secondary mb-1">Made with Italian Sauce, Chicken and organice vegetables.</p>
            <input type="button" class="food-menu__item-btn text-white" value="Order  Now">
          </div>
        </div>
      </div>

      <div class="food-menu__item p-0 col-md-6">
        <div class="item-food  bg-white">
          <img class="item-food-img" src="images/menu-burger.jpg" alt="">
          <div class="item-price mr-1">
            <h3 class="mb-0">Smoky Burger</h3>
            <span class="food-menu__item-price">$2.3</span>
            <p class="food-menu__item-description text-secondary mb-1">Made with Italian Sauce, Chicken and organice vegetables.</p>
            <input type="button" class="food-menu__item-btn text-white" value="Order  Now">
          </div>
        </div>
      </div>

      <div class="food-menu__item p-0 col-md-6">
        <div class="item-food  bg-white">
          <img class="item-food-img" src="images/menu-burger.jpg" alt="">
          <div class="item-price mr-1">
            <h3 class="mb-0">Nice Burger</h3>
            <span class="food-menu__item-price">$2.3</span>
            <p class="food-menu__item-description text-secondary mb-1">Made with Italian Sauce, Chicken and organice vegetables.</p>
            <input type="button" class="food-menu__item-btn text-white" value="Order  Now">
          </div>
        </div>
      </div>

      <div class="food-menu__item p-0 col-md-6">
        <div class="item-food  bg-white">
          <img class="item-food-img" src="images/menu-pizza.jpg" alt="">
          <div class="item-price mr-1">
            <h3 class="mb-0">Food Title</h3>
            <span class="food-menu__item-price">$2.3</span>
            <p class="food-menu__item-description text-secondary mb-1">Made with Italian Sauce, Chicken and organice vegetables.</p>
            <input type="button" class="food-menu__item-btn text-white" value="Order  Now">
          </div>
        </div>
      </div>

      <div class="food-menu__item p-0 col-md-6">
        <div class="item-food  bg-white">
          <img class="item-food-img" src="images/menu-pizza.jpg" alt="">
          <div class="item-price mr-1">
            <h3 class="mb-0">Food Title</h3>
            <span class="food-menu__item-price">$2.3</span>
            <p class="food-menu__item-description text-secondary mb-1">Made with Italian Sauce, Chicken and organice vegetables.</p>
            <input type="button" class="food-menu__item-btn text-white" value="Order  Now">
          </div>
        </div>
      </div>

      <div class="food-menu__item p-0 col-md-6">
        <div class="item-food  bg-white">
          <img class="item-food-img" src="images/menu-momo.jpg" alt="">
          <div class="item-price mr-1">
            <h3 class="mb-0">Chicken Steam Momo</h3>
            <span class="food-menu__item-price">$2.3</span>
            <p class="food-menu__item-description text-secondary mb-1">Made with Italian Sauce, Chicken and organice vegetables.</p>
            <input type="button" class="food-menu__item-btn text-white" value="Order  Now">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Food Menu -->

  <!-- Footer -->
  <div id="footer" class="container-fluid bg-white footer">
    <div class="contact mt-4">
      <i class="fab fa-facebook"></i>
      <i class="fab fa-instagram" style="padding-left: 4px;"></i>
      <i class="fab fa-twitter"></i>
  </div>
    <div class="auth ">
        <p class="mb-4">All rights reserved. Designed By
            <a href="#">Ngọc Được</a>
        </p>
    </div>
  </div>
  <!--End Footer-->

  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>