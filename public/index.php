<?php
 $image = '/img/1.jpg';
 $image = (isset($_GET['bg']) && $_GET['bg'] === '2') ? '/img/2.jpg' : $image;
 $image = (isset($_GET['bg']) && $_GET['bg'] === '3') ? '/img/3.jpg' : $image;
 $image = (isset($_GET['bg']) && $_GET['bg'] === '4') ? '/img/4.jpg' : $image;
 $image = (isset($_GET['bg']) && $_GET['bg'] === '5') ? '/img/5.jpg' : $image;
 $image = (isset($_GET['bg']) && $_GET['bg'] === '6') ? '/img/6.jpg' : $image;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="6qWY1L39LXBBdhRdYeo0QPCLyLUhlqJa_c9sNFBpT00" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="iBox Design Studio. ideasbox.com.ar">
    <title>Agricolasanfrancisco.com</title>
    <link href="/img/favicon.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="/css/bulma.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
    <section class="hero is-fullheight" style="background-image:url('<?php echo $image ?>')">
      <div class="overlay">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              Agricola San Francisco
            </h1>
            <h2 class="subtitle">
              Proximamente...
            </h2>
          </div>
      </div>
      </div>
    </section>
  </body>
</html>