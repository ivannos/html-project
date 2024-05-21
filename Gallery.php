<?php 

require_once('classes/Gallery.php');

$Gallery = new Gallery();

?>

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
      <?php 
        $Gallery->showGallery();
      ?>
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