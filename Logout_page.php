<!DOCTYPE html>
<html lang="sk">

<head>

    <meta charset="utf-8">
    <meta name="description" content="popis mojej stranky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/forms.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Thank You</title>

</head>

  <?php
    include 'header/header.php';
  ?>

<body class="bcgrd_image">

  <h1 class="text-center d-flex justify-content-center bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> rounded mt-3" style="width: 50%; margin: auto;">𝓛𝓔𝓐𝓥𝓘𝓝𝓖 𝓢𝓞 𝓢𝓞𝓞𝓝?</h1>

  <div class="mt-3 d-flex justify-content-center">
    <img src="image/thumbsup.png" alt="">
  </div>

  <div style="width: 80%; margin: auto;" class="card bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> mt-3">
        <h4 class="card-title">Dear Reel Rover User!</h4>
        <p>Thank you for visiting Reel Rover! We hope you enjoyed your time exploring our extensive collection of movies, reviews, and recommendations. Your passion for cinema is what drives us to continuously improve and expand our offerings. As you log out, remember to check back often for the latest updates, new releases, and exclusive content tailored just for you. If you have any feedback or suggestions, we’d love to hear from you. Safe travels, and we look forward to seeing you again soon at Reel Rover!</p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex flex-column">
                <p class="mb-0">Warm regards</p>
                <p class="mb-0">The Reel Rover Team</p>
            </div>
        </div>
    </div>
  </div>

  <?php
    include 'footer/footer.php';
  ?>

</body>

</html>