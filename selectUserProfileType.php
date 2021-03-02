<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm Login Page");
?>

<div style="height: 100%">
<div class="row" style="height: 100%">

<!-- Banner Section -->
<div class="col-lg-6 my-auto row" id="banner">
</div>

<!-- Form Section -->
<div class="col-lg-6 my-auto px-5">

<a href="index.php">
    <img class="px-3 py-3 img-fluid d-block align-self-center" src="./assets/logo.png" alt="loGrow farm logo">
</a>

<div class="mx-auto text-center" style="width: 90%;">
  <h2>Are You a ...?</h2>
</div>

<div class="row text-center">
    <div class="col">
        <a href="signUpPage.php">
        <img class="img-thumbnail mb-2 rounded-circle border-success" src="assets/farmerIcon.png" alt="farmer profile">
        </a>
    <h2>Farmer</h2>
        <!-- <button class="btn btn-primary">A Farmer</button class="btn"> -->
    </div>
    <div class="col">
        <a href="signUpPage.php">
            <img class="img-thumbnail mb-2 rounded-circle border-danger" src="assets/customerIcon.png" alt="customer profile">
        </a>
        <h2>Customer</h2>
        <!-- <button class="btn btn-primary">A Customer</button class="btn"> -->
    </div>
</div>


</div>

<!-- End of row -->
</div>
<!-- End of container -->
</div>

<?php
Shared::footer();
?>

