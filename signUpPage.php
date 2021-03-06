<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Login Page");
?>

<div class="row p-4">

	<div class="col-12 col-sm-6 offset-sm-3">
		<a href="index.php">
			<img class="img-fluid" src="./assets/logo.png" alt="loGrow farm logo">
		</a>
		<hr>
		<?php Form::signUpForm()?>
	</div>

</div>

<?php
Shared::footer();
?>

