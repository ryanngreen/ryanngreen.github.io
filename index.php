
<html>

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
  <title>Ryann Brown | Web Design</title>
  <meta name="description" content="I'm Ryann Brown, a web designer based in Baton Rouge, Louisiana. I have a passion for web, but I also have a passion for learning, so my skillset is constantly evolving. Helping small businesses provide their clients with functional and user-friendly websites is what I work hard to do for you.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <?php include 'inc/contact-code.php'; ?>

  <div class="pattern-bg">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark">
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
              <p class="nav-link" id="contact" onclick="slideOut()">contact</p>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container taller">
      <div class="row">
        <div class="col-sm-6 offset-sm-2 tagline">
          <p class="h2">Design, Develop, <br /> <span class="h3 green">Delight</span></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5 offset-sm-6">
          <h1>I'm Ryann Brown</h1>
          <p>
            I am a web designer based in Baton Rouge, Louisiana. I have a passion for web, but I also have a passion for learning, so my skillset is constantly evolving. Helping businesses provide their clients with functional, user-friendly and accessible websites is what I work hard to do, every time.
          </p>
          <p>
              Running a business can be hectic, and as important as the web is for your success, it can be complicated and time consuming. That's what I'm here for. I can design and code your website, so that you can make less stops and get better results.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="light-bg">
    <div class="container">
      <div class="row align-items-center project">
        <div class="col-sm-5">
          <p class="h4">Client</p>
          <h1>Walker Baptist Church</h1>
          <h2>Updated the web presence of a local church.</h2>
          <p class="h5 tasks">design, code, wordpress, seo, & content writing</p>

          <a class="btn btn-outline-primary" href="wbc.php" role="button">view case</a>
        </div>
        <div class="col"></div>
        <div class="col-sm-6">
          <img class="img-fluid" src="img/wbc-projhome.png" alt="Walker Baptist Mockups" />
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row align-items-center project">
      <div class="col-sm-6">
        <p class="h4">Client</p>
        <h1>Southeastern Louisiana University</h1>
        <h2>Reevaluating who the target audience really is.</h2>
        <p class="h5 tasks">design & code</p>

        <a class="btn btn-outline-primary" href="slu.php" role="button">view case</a>
      </div>

      <div class="col-sm-6">
        <img class="img-fluid" src="img/slu-projhome.png" alt="Southeastern Mockups" />
      </div>
    </div>
  </div>

  <div class="light-bg">
    <div class="container">
      <div class="row align-items-center project">
        <div class="col-sm-6">
          <p class="h4">Client</p>
          <h1>Flying Tiger Aviation</h1>
          <h2>Unifying the brand of a flight school.</h2>
          <p class="h5 tasks">design, code, & wordpress</p>

          <a class="btn btn-outline-primary" href="fta.php" role="button">view case</a>
        </div>

        <div class="col-sm-6">
          <img class="img-fluid" src="img/fta-projhome.png" alt="Flying Tiger Mockups" />
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row align-items-center project">
      <div class="col-sm-6">
        <p class="h4">Client</p>
        <h1>Timeless Vintage Rentals</h1>
        <h2>Creating a web presence for a wedding rental company.</h2>
        <p class="h5 tasks">design, code, php, & branding</p>

        <a class="btn btn-outline-primary" href="tv.php" role="button">view case</a>
      </div>

      <div class="col-sm-6">
        <img class="img-fluid" src="img/tv-projhome.png" alt="Timeless Vintage Mockups" />
      </div>
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
</html>
