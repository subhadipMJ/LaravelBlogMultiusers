<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Blogy - Hey, we’re Blogy. See our thoughts, stories and ideas.</title>
  <meta name="title" content="Blogy - Hey, we’re Blogy. See our thoughts, stories and ideas.">
  <meta name="description" content="This is a blog html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header section" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="129" height="40" alt="Blogy logo">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link hover:underline" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover:underline" data-nav-link>Recent Post</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover:underline" data-nav-link>Membership</a>
          </li>

        </ul>
      </nav>

      <div class="wrapper">

        <button class="search-btn" aria-label="search" data-search-toggler>
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

          <span class="span">Search</span>
        </button>

        <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
          <span class="span one"></span>
          <span class="span two"></span>
          <span class="span three"></span>
        </button>

        <a href="{{route('register')}}" class="btn">Join</a>

      </div>

    </div>
  </header>





  <!-- 
    - #SEARCH BAR
  -->

  <div class="search-bar" data-search-bar>

    <div class="input-wrapper">
      <input type="search" name="search" placeholder="Search" class="input-field">

      <button class="search-close-btn" aria-label="close search bar" data-search-toggler>
        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>

    <p class="search-bar-text">Please enter at least 3 characters</p>

  </div>

  <div class="overlay" data-overlay data-search-toggler></div>



{{$slot}}

 

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="129" height="40" alt="Blogy logo">
          </a>

          <p class="footer-text">
            A minimal, functional theme for running a paid-membership publication on Ghost.
          </p>

        </div>

        <ul class="footer-list">

          <li>
            <p class="h5">Social</p>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-facebook"></ion-icon>

            <a href="#" class="footer-link hover:underline">Facebook</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-twitter"></ion-icon>

            <a href="#" class="footer-link hover:underline">Twitter</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-pinterest"></ion-icon>

            <a href="#" class="footer-link hover:underline">Pinterest</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-vimeo"></ion-icon>

            <a href="#" class="footer-link hover:underline">Vimeo</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h5">About</p>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Style Guide</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Features</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Contact</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">404</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Privacy Policy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h5">Features</p>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Upcoming Events</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Blog & News</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Features</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">FAQ Question</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Testimonial</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h5">Membership</p>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Account</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Membership</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Subscribe</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Tags</a>
          </li>

          <li>
            <a href="#" class="footer-link hover:underline">Authors</a>
          </li>

        </ul>

      </div>

      <div class="section footer-bottom">

        <p class="copyright">
          &copy; Blogy 2022. Published by <a href="#" class="copyright-link hover:underline">codewithsadee</a>.
        </p>

      </div>

    </div>
  </footer>






  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>