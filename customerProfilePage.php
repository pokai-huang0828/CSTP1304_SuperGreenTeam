<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm Login Page", "css/customerProfilePage.css");
Shared::navbar();
?>

<div class="container">

<!-- Customer Info Section -->
<div class="row container text-center mt-1 mb-2">
    <div class="col-4">
        <img class="img-fluid rounded mb-1" src="assets/user1.jpg" alt="profile picture">
        <h2>Billy G.</h2>
    </div>

    <div class="card success col-8" id="creditBoard">
    <div class="card-body row align-items-center">
        <h1>Your farm Credits: 721</h1>
    </div>
    </div>
</div>

<!-- Middle Tab bar -->
<nav>
    <div class="row">
    <div class="nav nav-tabs mb-1" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active col-4" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="bi bi-clock-history"></i> My History</a>
    <a class="nav-item nav-link col-4" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="bi bi-heart-fill"></i> My Farmers</a>
    <a class="nav-item nav-link col-4" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="bi bi-calendar2-check"></i> My Events</a>
  </div>
  </div>
</nav>

<!-- Tab bar targets -->
<div class="tab-content" id="nav-tabContent">

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      no shopping history
    </div>

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      no favorite farmer
    </div>

  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
      no events
    </div>

</div>

<!-- End of container -->
</div>

<?php
Shared::footer();
?>