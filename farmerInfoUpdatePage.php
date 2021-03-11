<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Farmer Update Info Page");
Shared::farmerNavbar();
?>

<!-- Farmer profile picture section -->
<form class="mx-4">
  <div class="text-center mt-0 profileImgEditSection">
    <img class="img-fluid rounded-circle" src="assets/user2.jpg" alt="profile picture" width="45%"><br>
    <button>Edit <i class="bi bi-pencil-square" style="color:black"></i></button>
  </div>
  <!-- <hr> -->
    
  <!-- Farmer profile basic info section -->
  <h5 style="font-weight:bold">Basic Info</h5>
  <?php Form::basicInfo(true)?>

  <div class="form-group my-2">
              <label for="Address">Address</label>
              <input type="text" class="form-control" id="Address" placeholder="Address">
  </div>

  <!-- <hr> -->

  <div class="form-group">
  <h5 class="text my-3" style="font-weight:bold">Farm Information:</h5>
  <div class="input-group">
    <textarea type="text" class="form-control" placeholder="Type Your Farm Info"></textarea>
  </div>

  <!-- <hr> -->

  <!-- Confirm and cancel button -->
  <div class="d-flex justify-content-around my-3">
    <a href="farmerProfilePage.php" class="btn btn-danger btn-sm col-3" role="button">Cancel</a>
    <a href="farmerProfilePage.php" class="btn btn-success btn-sm col-3" role="button">Confirm</a>
  </div>

  <!-- End of form -->
</form>

<?php Shared::footer();?>