<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Login Page", "css/signInPage.css");
?>

<div class="row row align-items-end" id="signUpWrapper">

<div class="col-12 col-sm-6 offset-sm-3 gx-0 px-4 align-self-start text-center">

	<!-- Select a user form -->
	<h2 style="padding:5% 0">Choose an user type:</h2>

	<div class="row justify-content-center">

	<div class="col-8">
	<a href="signUpPage.php?user=farmer">
	<img class="img-thumbnail mb-2 rounded-circle border-success" src="assets/farmerIcon.png" alt="farmer profile">
	</a>
	<h2>Farmer</h2>
	</div>

	<div class="col-8">
	<a href="signUpPage.php?user=customer">
	<img class="img-thumbnail mb-2 rounded-circle border-danger" src="assets/customerIcon.png" alt="customer profile">
	</a>
	<h2>Customer</h2>
	</div>
	<!-- End of row -->
	</div>
	
</div>

<div class="col-12 col-sm-12">
	<img class="farmFoodBanner" src="assets/farmFood.jpg" alt="">
</div>

</div>

<?php
Shared::footer();
?>

