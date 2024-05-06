<?php

require_once('classes/FilmFacts.php');
use filmfacts\FilmFacts;

$FilmFacts = new FilmFacts();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ADD'])) {
    // Process submitted form
    
    $FilmFacts->addFilmFacts($_POST['link'], $_POST['name'], $_POST['release_year'], $_POST['director'], $_POST['genre'], $_POST['interesting_fact']);
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
                <h5 class="text-center mb-4">Change the film fact</h5>
                <form action="add_filmfacts.php" method="post" class="form-card">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label  for="link" class="form-control-label px-3">Link<span class="text-danger"> *</span></label> 
                          <textarea id="link" name="link"></textarea>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label for="name" class="form-control-label px-3">Title/Name<span class="text-danger"> *</span></label> 
                          <textarea id="name" name="name"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label for="release_year" class="form-control-label px-3">Release Year<span class="text-danger"> *</span></label> 
                          <textarea id="release_year" name="release_year"></textarea>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label for="director" class="form-control-label px-3">Director<span class="text-danger"> *</span></label> 
                          <textarea id="director" name="director"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label  for="genre" class="form-control-label px-3">Genre<span class="text-danger"> *</span></label> 
                          <textarea id="genre" name="genre"></textarea>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label for="interesting_fact" class="form-control-label px-3">Interesting Fact<span class="text-danger"> *</span></label> 
                          <textarea id="interesting_fact" name="interesting_fact"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> 
                          <button name="ADD" type="submit" class="btn btn-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">ADD</button> 
                        </div>
                    </div>
                </form>
                <div class="form-group col-sm-6"> 
                    <form action="FilmFacts.php" method="post" class="form-card">
                        <button type="submit" class="btn btn-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">RETURN</button> 
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