<?php

require_once('classes/FilmFacts.php');
use filmfacts\FilmFacts;

$id = intval($_GET['id']); // Get ID from URL and convert to integer
$FilmFacts = new FilmFacts();

$row = $FilmFacts->getFilmFactsById($id);
if (!$row) {
    echo 'Otázka s daným ID nebola nájdená.';
    exit;
}

if(isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') {
  $theme = 'dark';
} else {
  $theme = 'light';
}

if(isset($_POST['toggle'])) {
  $theme = $theme === 'dark' ? 'light' : 'dark';
  setcookie('theme', $theme, time() + (86400 * 30), "/"); // Set cookie for 30 days
  header('Location: ' . "delete_filmfacts.php?id=" . $id); // Refresh page
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'  && isset($_POST['DELETE'])) {
    // Process submitted form
    $FilmFacts->deleteFilmFacts($id);
    header('Location: ./FilmFacts.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="sk">

<head>

    <meta charset="utf-8">
    <meta name="description" content="popis mojej stranky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>FilmFacts</title>

</head>

  <?php
    include 'header/header.php';
  ?>

<body class="bcgrd_image">
  <h1 class="d-flex justify-content-center bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> rounded mt-3 text-center" style="width: 50%; margin: auto;">𝓕𝓐𝓢𝓒𝓘𝓝𝓐𝓣𝓘𝓝𝓖 𝓕𝓘𝓛𝓜 𝓕𝓐𝓒𝓣𝓢</h1>

  <section class="mt-5">
    <div class="container bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> rounded p-1">
      <h2 class="text-center mb-4">Behind the Scenes</h2>
      <p class="text-center">
        Explore the magic that happens off-screen with our "Behind the Scenes" insights. Gain a deeper understanding of the filmmaking process and discover intriguing stories from the making of iconic movies. From scriptwriting challenges to on-set surprises, this section offers a glimpse into the creative minds and extraordinary efforts that bring your favorite films to life.
      </p>
    </div>
  </section>

<body class="bcgrd_image">
  <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">
                <h5 class="text-center mb-4">Delete film fact</h5>
                <form action="delete_filmfacts.php?id=<?php echo $id ?>" method="post" class="form-card">
                  <button name="DELETE" type="submit" class="btn btn-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">DELETE</button>
                </form> 
                <div class="form-group col-sm-6"> 
                    <form action="FilmFacts.php" method="post" class="form-card">
                        <button type="submit" class="btn btn-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">KEEP</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div> 

  <?php
    include 'footer/footer.php';
  ?>

</body>

</html>