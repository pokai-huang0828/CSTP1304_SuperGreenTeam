<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
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

<form>

<!-- return basic info input controls -->
<?php Form::basicInfo()?>

<div class="form-group my-2">
<!-- Remember me and forget password row -->
<div class="d-flex flex-row justify-content-between ">
<!-- Remember me check box and forget password link -->
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="rememberMe">
    <label class="form-check-label small-text" for="rememberMe">By signing up you accept the term of service and privacy policy</label>
</div>
</div>
</div>

<!-- Sign in button -->
<button type="button" class="btn btn-success w-100 btn-lg my-2">Sign Up</button>

</form>
<!-- End of form section -->
</div>


</div>

<!-- End of row -->
</div>
<!-- End of container -->
</div>

<?php
Shared::footer();
?>

