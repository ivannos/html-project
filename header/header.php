<?php
    // Check if theme is set in cookies
    if(isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') {
        $theme = 'dark';
    } else {
        $theme = 'light';
    }

    // Handle theme toggle
    if(isset($_POST['toggle'])) {
        $theme = $theme === 'dark' ? 'light' : 'dark';
        setcookie('theme', $theme, time() + (86400 * 30), "/"); // Set cookie for 30 days
        header('Location: ' . $_SERVER['PHP_SELF']); // Refresh page
        exit;
    }
?>

  <nav class="navbar navbar-expand-md navbar-<?php echo $theme ?> bg-<?php echo $theme ?> sticky-top">
    <div class="container-fluid">
      <p class="navbar-brand" href="#">
        <img src="image/logo.png" alt="" width="30" height="24">
      </p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-center t" href="Main.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-center t" href="Gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-center t" href="FilmFacts.php">Film Facts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-center t" href="Contacts.php">Contacts</a>
          </li>

          <li class="nav-item"></li>
          <?php
          session_start();
          if (isset($_SESSION['login'])) {
              echo '<a class="nav-link active text-center t" href="db/logout.php">Prihlásený: ' . $_SESSION['login'] . ' (' . $_SESSION['role'] . ')</a>';
          } else {
              echo '<a class="nav-link active text-center t" href="signin.php">Prihlásiť/Registrovat</a>';
          }
          ?>
          </li>
          
          <li class="nav-item">
            <form method="post">
                <button type="submit" class="btn btn-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>" name="toggle"> <?php echo ucfirst($theme) ?> theme</button>
            </form>
          </li>

        </ul>
      </div>
    </div>
  </nav>