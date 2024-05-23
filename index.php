<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postcode Information</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Website Custom CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Website Custom JS -->
  <script src="assets/js/script.js"></script>
</head>
<body>

<div class="container mt-5">
  <div class='row justify-content-center'>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="wrap">
        <div class="logo mb-3">
          <img src='assets/img/PostCodesLogo.png.png'></img>
        </div>
        <h1>Postcode Information</h1>  
        <?php
          // Include the file containing the lookupPostcode() function
          include 'includes/postcode_lookup.php';

          // Include the HTML form from another file
          include 'includes/postcode_form.php';
                
          // Include the PHP logic for processing the form submission and displaying postcode information
          include 'includes/postcode_display.php';
        ?>
      </div>
    </div>
  </div>
</div>

<div class="container mt-3 mb-5">
  <div class='row justify-content-center'>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <!-- Copyright -->
      <div class="text-center">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href=#>Michael Hayes</a>
      </div>
      <!-- Copyright -->
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
