<?php

session_start();

require_once('classes/User.php');

// login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login']) && !isset($_SESSION['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Overenie údajov
    if (empty($username) || empty($password)) {
        die('Chyba: Všetky polia sú povinné!');
    }

    // Uloženie správy do databázy
    try {
        $user = new Users();
        $user->login($username, $password);
        exit;
    } catch (Exception $e) {
        http_response_code(404);
        die('Chyba pri odosielaní správy do databázy!');
    }
}

// register
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register']) && !isset($_SESSION['login'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Overenie údajov
    if (empty($username) || empty($email) || empty($password)) {
        die('Chyba: Všetky polia sú povinné!');
    }

    // Uloženie správy do databázy
    try {
        $user = new Users();
        $user->register($username, $email, $password);
        exit;
    } catch (Exception $e) {
        http_response_code(404);
        die('Chyba pri odosielaní správy do databázy!');
    }
}

?>

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
    <title>Contacts</title>

</head>

  <?php
    include 'header/header.php';
  ?>

<body class="bcgrd_image">
  <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">
                <h5 class="text-center mb-4">Login</h5>
                <form action="signin.php" method="post" class="form-card">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> 
                          <label class="form-control-label px-3">Username<span class="text-danger"> *</span></label> 
                          <input type="text" id="username" name="username" placeholder="Enter your username" required> 
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> 
                          <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> 
                          <input type="password" id="password" name="password" placeholder="" required> 
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> 
                          <button name="login" type="submit" class="btn btn-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">Login</button> 
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="card bg-<?php echo $theme ?> text-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">
                <h5 class="text-center mb-4">Register</h5>
                <form action="signin.php" method="post" class="form-card">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> 
                          <label class="form-control-label px-3">Username<span class="text-danger"> *</span></label> 
                          <input type="text" id="username" name="username" placeholder="Enter your username" required> 
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> 
                          <label class="form-control-label px-3">E-mail<span class="text-danger"> *</span></label> 
                          <input type="email" id="email" name="email" placeholder="" required> 
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> 
                          <label class="form-control-label px-3">Password<span class="text-danger"> *</span></label> 
                          <input type="password" id="password" name="password" placeholder="" required> 
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> 
                          <button name="register" type="submit" class="btn btn-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">Register</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div> 

  <?php
    include 'footer/footer.php';
?>

</body>

</html>