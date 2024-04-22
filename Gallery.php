<!DOCTYPE html>
<html lang="sk">

<head>

    <meta charset="utf-8">
    <meta name="description" content="popis mojej stranky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/expanding_img.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Gallery</title>

</head>

  <?php
    include 'header/header.php';
  ?>

<body class="bcgrd_image">

  <h1 class="d-flex justify-content-center bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> rounded mt-3 text-center" style="width: 50%; margin: auto;">𝓕𝓐𝓝 𝓕𝓐𝓥𝓞𝓤𝓡𝓘𝓣𝓔𝓢</h1>
  <div id="carousel" class="carousel slide mt-3">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container w-75">
          <div class="row gap-5 d-flex justify-content-center mt-5 mb-5">
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/intrestelar.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>INTERSTELLAR</h4></p>
                <p>Genre - Science Fiction, Adventure, Drama</p>
                <p>Director - Christopher Nolan</p>
                <p>IMDB - 8.6/10</p>
              </div>
            </div>
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/matrix.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>The Matrix</h4></p>
                <p>Genre - Action, Sci-Fi</p>
                <p>Director - Lana Wachowski, Lilly Wachowski</p>
                <p>IMDB - 8.7/10</p>
              </div>
            </div>
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/btf.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>Back to the Future</h4></p>
                <p>Genre - Adventure, Comedy, Sci-Fi</p>
                <p>Director - Robert Zemeckis</p>
                <p>IMDB - 8.5/10</p>
              </div>
            </div>
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/dune.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>Dune</h4></p>
                <p>Genre - Adventure, Drama, Sci-Fi</p>
                <p>Director - Denis Villeneuve</p>
                <p>IMDB - 8.0/10</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container w-75">
          <div class="row gap-5 d-flex justify-content-center mt-5 mb-5">
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/nttd.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>No Time to Die</h4></p>
                <p>Genre - Action, Adventure, Thriller</p>
                <p>Director - Cary Joji Fukunaga</p>
                <p>IMDB - 7.4/10</p>
              </div>
            </div>
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/diehard.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>Die Hard</h4></p>
                <p>Genre - Action, Thriller</p>
                <p>Director - John McTiernan</p>
                <p>IMDB - 8.2/10</p>
              </div>
            </div>
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/terminator.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>Terminator</h4></p>
                <p>Genre - Action, Sci-Fi</p>
                <p>Director - James Cameron</p>
                <p>IMDB - 8.0/10</p>
              </div>
            </div>
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/johnwick.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>John Wick</h4></p>
                <p>Genre - Action, Crime, Thriller</p>
                <p>Director - Chad Stahelski</p>
                <p>IMDB - 7.4/10</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container w-75">
          <div class="row gap-5 d-flex justify-content-center mt-5 mb-5">
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/hf.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>Hot Fuzz</h4></p>
                <p>Genre - Action, Comedy, Mystery</p>
                <p>Director - Edgar Wright</p>
                <p>IMDB - 7.8/10</p>
              </div>
            </div>
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/ngun.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>The Naked Gun</h4></p>
                <p>Genre - Comedy, Crime</p>
                <p>Director - David Zucker</p>
                <p>IMDB - 7.6/10</p>
              </div>
            </div>
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/ghogday.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>Groundhog Day</h4></p>
                <p>Genre - Comedy, Drama, Fantasy</p>
                <p>Director - Harold Ramis</p>
                <p>IMDB - 8.0/10</p>
              </div>
            </div>
            <div class="image-container col-md-5 align-self-center">
              <img style="width: 100%;" src="image/tlh.jpg" alt="...">
              <div class="text-center overlay">
                <p><h4>The Last Hangover</h4></p>
                <p>Genre - Comedy</p>
                <p>Director - Rodrigo Van Der Put</p>
                <p>IMDB - 6.7/10</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <?php
    include 'footer/footer.php';
  ?>

</body>

</html>