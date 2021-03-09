<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Farmer Update Info Page");
Shared::farmerNavbar();
?>

<!-- Farmer profile picture section -->
<form class="mx-4">
<div class="text-center mt-1 profileImgEditSection">
  <img class="img-fluid rounded-circle" src="assets/user2.jpg" alt="profile picture" width="40%"><br>
  <button type="button" class="btn btn-sm">Edit <i class="bi bi-pencil-square"></i></button>
</div>
<hr>
  
<!-- Farmer profile basic info section -->
<h5>Basic Info</h5>
<?php Form::basicInfo(true)?>
<div class="form-group my-2">
            <label for="Address">Address</label>
            <input type="text" class="form-control" id="Address" placeholder="XXXX 42rd Ave W ">
        </div>
        <div class="form-group">
<hr>
<h5 class="text">Farm Description:</h5>
    <div class="input-group">
        <textarea type="text" class="form-control" placeholder="Type your farm's information so user can know your farm well. :)"></textarea>
    </div>
<hr>

<!-- Confirm and cancel button -->
<div class="d-flex justify-content-around ">
  <a href="farmerProfilePage.php" class="btn btn-outline-danger btn-sm col-3">Cancel</a>
  <a href="farmerProfilePage.php" class="btn btn-outline-success btn-sm col-3">Confirm</a>
  
</div>

<!-- End of form -->
<div style="height: 10px;"></div>
</form>

<?php Shared::footer();?>