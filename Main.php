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
    <script src="js/javascript.js" defer></script>
    <script src="js/tos.js" defer></script>
    <title>Main</title>

</head>

  <?php
    include 'header/header.php';
  ?>

<body class="bcgrd_image">
  <h1 class="text-center d-flex justify-content-center bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> rounded mt-3" style="width: 50%; margin: auto;">𝓡𝓔𝓔𝓛 𝓡𝓞𝓥𝓔𝓡</h1>
  <div class="container mt-3">
    <div class="row gap-1">
        <div class="col-lg">
            <div class="card bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">
                <div class="card-body">
                    <h4 class="card-title">Our Passion for Cinema</h4>
                    <p class="card-text">Welcome to our cinematic haven, where a profound love for movies is not just a sentiment but a way of life. At ReelRover, we are a collective of film enthusiasts who believe in the transformative power of storytelling through the lens of a camera. Our journey began with a shared ardor for the silver screen, and over the years, it has evolved into a dedicated platform that celebrates the magic of movies in all their forms. From timeless classics to cutting-edge contemporary films, we are here to share our passion for the art of cinema with you.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg">
            <div class="card bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">
                <div class="card-body">
                    <h4 class="card-title">A Cinematic Odyssey</h4>
                    <p class="card-text">Embark on a cinematic odyssey with us as we traverse the vast landscape of storytelling, exploring the depths of human emotion, imagination, and creativity. ReelRover is more than just a platform; it's a curated experience designed to connect movie enthusiasts with the films that resonate with their souls. Our team is committed to bringing you a diverse selection of films that captivate, inspire, and entertain. Whether you're a casual moviegoer or a seasoned cinephile, join us on this exhilarating journey through the captivating world of cinema.</p>
                </div>
            </div>
        </div>
        
        <div class="col-lg">
            <div class="card bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">
                <div class="card-body">
                    <h4 class="card-title">Our Commitment to Quality</h4>
                    <p class="card-text">At ReelRover, we understand that each frame, dialogue, and musical note in a film contributes to its unique identity. That's why we are dedicated to curating a collection that reflects the highest standards of quality and craftsmanship. From indie gems to blockbuster hits, every movie in our catalog is carefully chosen to ensure a rich and immersive viewing experience. Our commitment extends beyond the screen, as we strive to foster a community that appreciates the art of storytelling and shares in the joy of discovering new cinematic wonders. Join us in celebrating the magic of movies, where every film is not just a story but an invitation to explore the boundless possibilities of the human imagination.</p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <hr>
  <button class="accordion bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> rounded"><h5>Diving into Fan-Favorites</h5></button>
  <div class="panel bg-<?php echo $theme ?> rounded">
    <p class="text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">Explore a curated collection of cinematic gems at ReelRover's Fan Favorites Gallery. Immerse yourself in a handpicked selection of movies that have captured the hearts of our community. From beloved classics that stand the test of time to contemporary masterpieces that redefine storytelling, our gallery is a celebration of the films that resonate most with passionate moviegoers. Join us on a visual journey through the iconic moments and unforgettable characters that make cinema an enduring art form.</p>
  </div>

  <button class="accordion bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> rounded mt-2"><h5>Fun Facts to Deepen Your Film Experience</h5></button>
  <div class="panel bg-<?php echo $theme ?> rounded">
    <p class="text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">Enhance your film knowledge with our Interesting Film Facts section, where trivia meets the magic of the silver screen. Delve into behind-the-scenes anecdotes, fascinating tidbits about your favorite actors, and obscure details that add layers to the films you love. Whether you're a casual viewer or a dedicated cinephile, these intriguing insights promise to enrich your appreciation for the art of filmmaking. Unearth the stories behind the stories and discover a new dimension to your favorite movies.</p>
  </div>

  <button class="accordion bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?> rounded mt-2 mb-2"><h5>Connect with Us</h5></button>
  <div class="panel bg-<?php echo $theme ?> rounded">
    <p class="text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">ReelRover is more than a platform; it's a community of passionate film enthusiasts. We value your thoughts, recommendations, and feedback. Have a film suggestion for our gallery? Exciting trivia to share? Or simply want to connect with fellow movie lovers? Reach out to us! Our contact information is readily available, and we welcome your messages. Your input helps shape the ReelRover experience, ensuring that our platform continues to be a go-to destination for cinematic discovery and shared enthusiasm.</p>
  </div>

  <?php
    include 'footer/footer.php';
  ?>

</body>

</html>