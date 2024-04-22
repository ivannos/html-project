<?php
  require_once('classes/FilmFacts.php');

  // Zadefinujeme namespace
  use filmfacts\FilmFacts;

  // Insertovanie do databázy
  $filmfacts = new FilmFacts();
  $filmfacts->insertFilmFacts();

  // Načítavanie z databázy
  $filmfacts = new FilmFacts();
  $FilmFactsData = $filmfacts->getFilmFacts();
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
  <h1 class="d-flex justify-content-center bg-primary rounded mt-3 text-center" style="width: 50%; margin: auto;">𝓕𝓐𝓢𝓒𝓘𝓝𝓐𝓣𝓘𝓝𝓖 𝓕𝓘𝓛𝓜 𝓕𝓐𝓒𝓣𝓢</h1>

  <section class="mt-5">
    <div class="container bg-dark text-light rounded p-1">
      <h2 class="text-center mb-4">Behind the Scenes</h2>
      <p class="text-center">
        Explore the magic that happens off-screen with our "Behind the Scenes" insights. Gain a deeper understanding of the filmmaking process and discover intriguing stories from the making of iconic movies. From scriptwriting challenges to on-set surprises, this section offers a glimpse into the creative minds and extraordinary efforts that bring your favorite films to life.
      </p>
    </div>
  </section>

  <table class="table table-primary table-striped mt-3 " style="width: 90%; margin: auto;">
    <thead>
      <tr>
          <th>Film Title</th>
          <th>Year Released</th>
          <th>Director</th>
          <th>Genre</th>
          <th>Interesting Fact</th>
      </tr>
    </thead>

    <tbody>

    <?php
      foreach ($FilmFactsData as $film) {
        echo '<tr>';
          echo '<td> <a href="'.$film["link"].'" target="_blank">'.$film["name"].'</a></td>';
          echo '<td>'.$film["release_year"].'</td>';
          echo '<td>'.$film["director"].'</td>';
          echo '<td>'.$film["genre"].'</td>';
          echo '<td>'.$film["interesting_fact"].'</td>';
        echo '</tr>';
      }
    ?>
    </tbody>
    
  </table>

  <?php
    include 'footer/footer.php';
  ?>

</body>

</html>