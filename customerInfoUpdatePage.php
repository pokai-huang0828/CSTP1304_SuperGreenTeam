<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Login Page", "css/signInPage.css");
Shared::navbar();
?>

<!-- Customer profile picture section -->
<div class="container text-center mt-1 mb-2">
    <img class="img-fluid rounded-circle mb-1" src="assets/user1.jpg" alt="profile picture" width="40%"><br>
    <button type="button" class="btn btn-sm btn-outline-dark">Edit <i class="bi bi-pencil-square"></i></button>
</div>

<hr>

<form class="container mx-4">
<!-- Customer profile basic info section -->
<h5>Basic Info</h5>

<!-- return basic info input controls -->
<?php Form::basicInfo(true)?>

<hr>
<!-- Customer credit card info section -->
<h5>Credit Card Info</h5>
<div class="card">
  <div class="card-body">

  <div class="form-row">
    <div class="col mb-2">
        <span>Credit Card Number</span>
        <input type="text" class="form-control" placeholder="credit card number">
    </div>
    <div class="col mb-2">
        <span>Expire date</span>
        <input type="date" class="form-control">
    </div>
    <div class="col mb-2">
        <span>CVV</span>
      <input type="text" class="form-control" placeholder="cvv">
    </div>
  </div>

  </div>
</div>

<hr>

<div class="d-flex justify-content-around ">
    <a href="customerProfilePage.php" class="btn btn-danger btn-sm col-3">cancel</a>
    <a href="customerProfilePage.php" class="btn btn-success btn-sm col-3">confirm</a>
</div>

</form>

<?php
Shared::footer();
?>