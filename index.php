<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm Login Page", "css/signInPage.css");
?>

<div style="height: 100%">
<div class="row" style="height: 100%">

<!-- Banner Section -->
<div class="col-lg-6 my-auto row" id="banner">
</div>

<!-- Form Section -->
<div class="col-lg-6 my-auto px-5">

<img class="px-3 py-3 img-fluid d-block align-self-center" src="./assets/logo.png" alt="loGrow farm logo">

<form>

<!-- User Email -->
<div class="form-group my-2">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="username@example.com">
  </div>
<div class="form-group">

<!-- User Password -->
<div class="form-group my-2">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="********">
</div>

<div class="form-group my-2">
<!-- Remember me and forget password row -->
<div class="d-flex flex-row justify-content-between ">
<!-- Remember me check box and forget password link -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="rememberMe">
    <label class="form-check-label small-text" for="rememberMe">Remember me</label>
</div>
<a class="small-text" href="#">Forget Password?</a>
<!-- End of Remember me and forget password row -->
</div>
</div>

<!-- Sign in button -->
<button type="button" class="btn btn-success w-100 btn-lg my-2">Sign in</button>

<!-- Don't have an account link -->
<a  href="selectUserProfileType.php">Don't have an account?</a>
</form>
<!-- End of form section -->
</div>

<!-- End of row -->
</div>
<!-- End of container -->
</div>

<!-- Prevent footer from hiding the "Don't have an account?" link -->
<div style="height: 50px;"></div>

<?php
Shared::footer();
?>

