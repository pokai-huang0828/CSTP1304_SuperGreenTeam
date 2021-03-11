<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Login Page", "css/customerProfilePage.css");
Shared::navbar();
?>

<!-- Customer profile picture section -->
<form class="mx-4">
<div class="text-center mt-1 profileImgEditSection">
  <img class="img-fluid rounded-circle" src="assets/user1.jpg" alt="profile picture" width="40%"><br>
  <button type="button">Edit <i class="bi bi-pencil-square"></i></button>
</div>
<hr>
  
<!-- Customer profile basic info section -->
<h5>Basic Info</h5>
<?php Form::basicInfo(true)?>
<hr>

<!-- Customer credit card info section -->
<h5>Credit Card Info</h5>
<?php Form::creditCardInfo(true)?>
<hr>

<!-- Confirm and cancel button -->
<div class="d-flex justify-content-around ">
  <a href="customerProfilePage.php?user=customer" class="btn btn-danger btn-sm col-3">Cancel</a>
  <a href="customerProfilePage.php?user=customer" class="btn btn-success btn-sm col-3">Confirm</a>
</div>

<!-- End of form -->
<div style="height: 10px;"></div>
</form>

<?php Shared::footer();?>