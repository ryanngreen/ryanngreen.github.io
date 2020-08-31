
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
  <title>Ryann Brown | Walker Baptist Church</title>
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

    <div class="row taller">
      <div class="col-sm-5 offset-sm-1">
        <h1>Walker Baptist</h1>
        <h2>Updated the web presence of a local church.</h2>
        <p class="h5 tasks">design, code, wordpress, seo, & content writing</p>
      </div>
      <div class="col-sm-5">
        <p>
          Walker Baptist Church is a growing church in southern Louisiana that tries to focus on how they can give to the community they are a part of, while showing love and respect, and sharing the Word. Their website has struggled in the past with remaining current, especially considering their intended audience is young adults, and also struggled to provide enough information to site visitors.
        </p>
        <a class="btn btn-outline-primary" href="http://wbc.ryannbrown.com/" role="button">view site</a>
      </div>
    </div>
  </div>

  <div class="pattern-bg">
    <div class="container feature">
      <img class="img-fluid" src="img/wbc-projtop.jpg" alt="Homepage"  />
    </div>
  </div>

  <div class="container taller">
    <div class="row">
      <div class="col-sm-5 offset-sm-1">
        <h3>the task</h3>
        <p>This site had a few must-haves that needed to be adhered to. The site is edited by multiple staff members, so it would need to be in a CMS. It also needed to be responsive across any screen size. We also wanted to be sure to provide enough information to allow visitors to feel involved and like a part of the church just from visiting the website. Finally, we would need to ensure that visitors can see what WBC is all about on every page.</p>
      </div>
      <div class="col-sm-5">
        <h3>the process</h3>
        <p>The design started out with multiple mockups, moving on to a static design being coded. After the code was finalized and responsiveness was working, it was moved into Wordpress, using a custom theme made specifically for the church, with multiple widgets installed to add functionality for the staff to be able to easily edit the content across the site as needed. </p>
      </div>
    </div>
  </div>

  <div class="light-bg">
    <div class="container slideshow" id="slideshow">
      <div class="arrow-box">
        <h1><span id="down">&lt;</span> &nbsp; <span id="counter">1</span> / <span id="maximum">5</span> &nbsp; <span id="up">&gt;</span></h1>
      </div>
      <img id="1" class="slide img-fluid d-block" src="img/wbc-salv-desk.png" alt="Salvation Page" />
      <img id="2" class="slide img-fluid d-none" src="img/wbc-calendar-desk.png" alt="Calendar Page" />
      <img id="3" class="slide img-fluid d-none" src="img/wbc-home-desk.png" alt="Homepage" />
      <img id="4" class="slide img-fluid d-none" src="img/wbc-sermon-desk.png" alt="Sermon Page" />
      <img id="5" class="slide img-fluid d-none" src="img/wbc-women-desk.png" alt="Women's Group Page" />
    </div>
  </div>

  <div class="light-pattern-bg">
    <div class="container taller">
      <div class="row justify-content-center">
        <div class="col-sm-5">
          <h1>Identity</h1>
          <h2>Reaching Up, Reaching Out</h2>
          <p>
            The first goal of the website was to provide information about salvation and the work of the church for the individual to grow in Christ. The second was to show what opportunities members and visitors had to get involved in the church as well as in the community. In order to make sure that both of these goals could be fulfilled, information needed to be easily scannable and accessible, so anyone would be able to find what they needed quickly.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="light-bg mobile">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <img class="img-fluid" src="img/wbc-events-mob.png" alt="Mobile Events Page" />
          <img class="img-fluid" src="img/wbc-salv-mob.png" alt="Mobile Salvation Page" />
        </div>
        <div class="col-lg-4">
          <img class="img-fluid" src="img/wbc-staff-mob.png" alt="Mobile Staff Page" />
          <img class="img-fluid" src="img/wbc-women-mob.png" alt="Mobile Women's Group Page" />
          <img class="img-fluid d-none d-lg-block" src="img/wbc-staff-mob.png" alt="Mobile Staff Page" />
        </div>
        <div class="col-lg-4">
          <img class="img-fluid" src="img/wbc-home-mob.png" alt="Mobile Homepage" />
          <img class="img-fluid" src="img/wbc-visit-mob.png" alt="Mobile Visit Page" />
        </div>
      </div>
    </div>
  </div>

  <div class="container taller pick-project">
    <div class="row">
      <div class="col-sm-5 offset-sm-1" style="margin-top: 15px;">
        <a href="tv.php"><h1>Last Project</h1>
        <h2>Timeless Vintage Rentals</h2></a>
      </div>
      <div class="col-sm-5" style="margin-top: 15px;">
        <a href="slu.php"><h1>Next Project</h1>
        <h2>Southeastern University</h2></a>
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
