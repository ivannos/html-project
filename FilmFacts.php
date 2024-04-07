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
      <tr>
          <td><a href="https://www.imdb.com/title/tt0111161/" target="_blank">The Shawshank Redemption</a></td>
          <td>1994</td>
          <td>Frank Darabont</td>
          <td>Drama</td>
          <td>Based on the novella by Stephen King, this film initially struggled at the box office but gained widespread acclaim later.</td>
      </tr>
      <tr>
          <td><a href="https://www.imdb.com/title/tt0034583/" target="_blank">Casablanca</a></td>
          <td>1942</td>
          <td>Michael Curtiz</td>
          <td>Drama, Romance, War</td>
          <td>The script was written as the movie was being filmed, and the ending was undecided until late in the production.</td>
      </tr>
      <tr>
          <td><a href="https://www.imdb.com/title/tt0021749/" target="_blank">City Lights</a></td>
          <td>1931</td>
          <td>Charlie Chaplin</td>
          <td>Comedy, Drama, Romance</td>
          <td>A silent film released well into the era of talkies, and it remains one of Charlie Chaplin's masterpieces.</td>
      </tr>
      <tr>
          <td><a href="https://www.imdb.com/title/tt0032138/" target="_blank">The Wizard of Oz</a></td>
          <td>1939</td>
          <td>Victor Fleming</td>
          <td>Adventure, Family, Fantasy</td>
          <td>One of the first films to use Technicolor, transitioning from sepia tones to full color in the journey to Oz.</td>
      </tr>
      <tr>
          <td><a href="https://www.imdb.com/title/tt0068646/" target="_blank">The Godfather</a></td>
          <td>1972</td>
          <td>Francis Ford Coppola</td>
          <td>Crime, Drama</td>
          <td>The severed horse head in the film was a real horse head sourced from a dog food company.</td>
      </tr>
      <tr>
          <td><a href="https://www.imdb.com/title/tt0054215/" target="_blank">Psycho</a></td>
          <td>1960</td>
          <td>Alfred Hitchcock</td>
          <td>Horror, Mystery, Thriller</td>
          <td>The famous shower scene was shot with 78 camera setups and 52 cuts in just three minutes.</td>
      </tr>
      <tr>
          <td><a href="https://www.imdb.com/title/tt0076759/" target="_blank">Star Wars</a></td>
          <td>1977</td>
          <td>George Lucas</td>
          <td>Action, Adventure, Fantasy</td>
          <td>The iconic opening crawl was inspired by the Flash Gordon serials, and George Lucas had to fight to keep it in the film.</td>
      </tr>
      <tr>
          <td><a href="https://www.imdb.com/title/tt1375666/" target="_blank">Inception</a></td>
          <td>2010</td>
          <td>Christopher Nolan</td>
          <td>Action, Adventure, Sci-Fi</td>
          <td>The rotating hallway fight scene was a practical effect using a rotating set, not CGI.</td>
      </tr>
      <tr>
          <td><a href="https://www.imdb.com/title/tt0107290/" target="_blank">Jurassic Park</a></td>
          <td>1993</td>
          <td>Steven Spielberg</td>
          <td>Adventure, Sci-Fi, Thriller</td>
          <td>The T-Rex roar is a combination of the sounds of a baby elephant, a tiger, and an alligator.</td>
      </tr>
      <tr>
          <td><a href="https://www.imdb.com/title/tt0133093/" target="_blank">The Matrix</a></td>
          <td>1999</td>
          <td>Lana Wachowski, Lilly Wachowski</td>
          <td>Action, Sci-Fi</td>
          <td>The falling green code is a combination of symbols from Japanese, Korean, and Chinese languages.</td>
      </tr>
    </tbody>
  </table>

  <?php
    include 'footer/footer.php';
  ?>

</body>

</html>