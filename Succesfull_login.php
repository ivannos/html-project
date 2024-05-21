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

  <h1 class="text-center d-flex justify-content-center bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> rounded mt-3" style="width: 50%; margin: auto;">𝓦𝓔𝓛𝓒𝓞𝓜𝓔 𝓣𝓞 𝓞𝓤𝓡 𝓢𝓘𝓣𝓔</h1>

  <div class="mt-3 d-flex justify-content-center">
    <img src="image/thumbsup.png" alt="">
  </div>

  <div style="width: 80%; margin: auto;" class="card bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> mt-3">
        <h4 class="card-title">Dear Reel Rover User!</h4>
        <p>Welcome to Our Site! We're thrilled to have you here. Whether you’re visiting for the first time or returning as a valued guest, we hope you find everything you’re looking for and more. Our site is designed with you in mind, offering a wide range of features and resources to meet your needs. Take your time to explore all the sections and discover the variety of content we have curated just for you. If you have any questions or need assistance, our support team is always here to help. Enjoy your stay, and thank you for choosing our site!</p>
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