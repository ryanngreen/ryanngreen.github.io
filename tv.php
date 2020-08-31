
<!DOCTYPE html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-59235137-5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-59235137-5');
  </script>

  <meta charset="UTF-8">
  <link rel="icon" href="favicon.ico">
  <title>Ryann Brown | Timeless Vintage Rentals</title>
  <meta name="description" content="I'm Ryann Brown, a web designer based in Baton Rouge, Louisiana. I have a passion for web, but I also have a passion for learning, so my skillset is constantly evolving. Helping small businesses provide their clients with functional and user-friendly websites is what I work hard to do for you.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php include 'inc/contact-code.php'; ?>

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php"><img src="img/header-logo.png" height="30" alt="RGB Logo" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ml-auto" role="navigation">
          <li class="nav-item">
            <a class="nav-link" href="about.php">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact" onclick="slideOut()" href="#">contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row taller align-items-center">
      <div class="col-sm-5 offset-sm-1">
        <h1>Timeless Vintage Rentals</h1>
        <h2>Creating a web presence for a wedding rental company.</h2>
        <p class="h5 tasks">design, code, php, & branding</p>
      </div>
      <div class="col-sm-5">
        <p>
          Timeless Vintage Rentals is a small business based in Louisiana that provides rental furniture, lighting, and accessories to a variety of clients. Just prior to their website being redesigned, they overhauled their logo, but they were still lacking a professional website that would look and work on mobile devices as well as desktops.
        </p>
        <a class="btn btn-outline-primary" href="http://www.timelessvintagerentals.com/" role="button">view site</a>
      </div>
    </div>
  </div>

  <div class="pattern-bg">
    <div class="container feature">
      <img class="img-fluid" src="img/tv-projtop.jpg" alt="Homepage"  />
    </div>
  </div>

  <div class="container taller">
    <div class="row">
      <div class="col-sm-5 offset-sm-1">
        <h3>the task</h3>
        <p>The main visitors coming to the Timeless Vintage Rental site were potential clients, mostly bride-to-be's. Keeping that in mind, it was clear the inventory should be the prime focus of the site, while also showcasing beautiful wedding shots that Timeless Vintage has been featured in. Photography would be a key factor of the site, but too much of it would be distracting, so it ws important to maintain a easy to scan site, and find the desired items quickly.</p>
      </div>
      <div class="col-sm-5">
        <h3>the process</h3>
        <p>Timeless Vintage had just recently gotten a new logo, but didn't have a defined brand, so that's where we started, looking at colors, fonts, and elements that would lend themselves toward the style and core values of the company. After a few mockups, we came up with a photography-focused site, leaning toward neutrals and blushes, and letting color peak through where possible. </p>
      </div>
    </div>
  </div>

  <div class="light-bg">
    <div class="container slideshow" id="slideshow">
      <div class="arrow-box">
        <h1><span id="down">&lt;</span> &nbsp; <span id="counter">1</span> / <span id="maximum">4</span> &nbsp; <span id="up">&gt;</span></h1>
      </div>
      <img id="1" class="slide img-fluid d-block" src="img/tv-invent-desk.png" alt="Inventory Page" />
      <img id="2" class="slide img-fluid d-none" src="img/tv-port-desk.png" alt="Photo Shoot Page" />
      <img id="3" class="slide img-fluid d-none" src="img/tv-services-desk.png" alt="Services Page" />
      <img id="4" class="slide img-fluid d-none" src="img/tv-home-desk.png" alt="Homepage" />
    </div>
  </div>

  <!-- <div class="pattern-bg">
    <div class="container taller">
      <div class="row justify-content-center">
        <div class="col-sm-5">
          <h1>Identity</h1>
          <h2>Reaching Up, Reaching Out</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget ex nibh. Sed sit amet mi luctus, viverra justo vitae, rutrum odio. Vestibulum faucibus scelerisque nulla eu commodo. Proin et fermentum diam. Pellentesque eget placerat lacus. Fusce vehicula mauris nec justo ultricies, eu tempor diam suscipit. Sed lorem turpis, ultricies quis mauris ac, varius efficitur nibh. Maecenas condimentum elit vitae odio gravida, nec bibendum dui congue. Duis tempus libero quis odio congue, quis commodo risus pharetra. Praesent ex lorem, condimentum at tristique sit amet, egestas eu metus. Etiam ac neque sit amet sapien suscipit venenatis in vel mi. Sed et nunc nulla. Pellentesque feugiat arcu et ornare dictum. Sed tincidunt non libero eget malesuada.
          </p>
        </div>
      </div>
    </div>
  </div> -->

  <div class="pattern-bg">
    <div class="container">
      <img class="img-fluid" src="img/tv-3phones.png" alt="Mobile mocks" />
    </div>
  </div>

  <div class="container taller pick-project">
    <div class="row">
      <div class="col-sm-5 offset-sm-1" style="margin-top: 15px;">
        <a href="fta.php"><h1>Last Project</h1>
        <h2>Flying Tiger Aviation</h2></a>
      </div>
      <div class="col-sm-5" style="margin-top: 15px;">
        <a href="wbc.php"><h1>Next Project</h1>
        <h2>Walker Baptist Church</h2></a>
      </div>
    </div>
  </div>

  <footer class="light-pattern-bg">
    <div class="container taller">
      <div class="row justify-content-center">
        <div class="col-sm-4">
          <img style="max-width: 100%;" src="img/profile.png" alt="Walker Baptist Mockups" />
        </div>

        <div class="col-sm-5">
          <h1>I'm Ryann Brown</h1>
          <h2>and i really like doing a lot.</h2>
          <p>
            I started working on websites years ago, and haven't stopped learning new things every day since. Technology is constantly changing and evolving, especially on the web. It's one of the things I love about it. It doesn't get old. With a background in design, as well as experience working with a team at a large company, I am confident that I can work with you to create something custom tailored to fit your needs. Let's get started.
          </p>
          <button class="btn btn-primary" onclick="slideOut()" role="button">contact me</button>
        </div>
      </div>
    </div>
  </footer>

</body>

<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
