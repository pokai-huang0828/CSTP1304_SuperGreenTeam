<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Login Page", "css/signInPage.css");
?>

<div class="row row align-items-end" id="signUpWrapper">
	
<div class="col-12 col-sm-12">
	<img class="farmFoodBanner" src="assets/farmFood.jpg" alt="">
</div>

<div class="col-12 col-sm-6 offset-sm-3 align-self-start">
	<div class="px-4">
		<?php Form::signInForm() ?>
	</div>
</div>

</div>

<script src="js/shared.js"></script>

<?php
Shared::footer();
?>

