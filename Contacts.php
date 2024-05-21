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
                <h5 class="text-center mb-4">We appreciate your feedback</h5>
                <form action="Thank You.php" class="form-card">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" required> 
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> 
                          <input type="text" id="lname" name="lname" placeholder="Enter your last name" required> 
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> 
                          <label class="form-control-label px-3">E-mail<span class="text-danger"> *</span></label> 
                          <input type="email" id="email" name="email" placeholder="" required> 
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> 
                          <label class="form-control-label px-3">How would you improve Reel Rover?<span class="text-danger"> *</span></label> 
                          <textarea type="text" id="ans" name="ans" placeholder="" required></textarea>
                        </div>
                    </div>
                    <div>
                      <label class="form-control-label px-3">I have read and agrre to TOS<span class="text-danger"> *</span></label> 
                      <input type="checkbox" id="tos" name="tos" required> 
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> 
                          <button type="submit" class="btn btn-<?php echo ($theme == 'light') ? 'dark' : 'light'; ?>">Submit</button> 
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