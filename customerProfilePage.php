<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/ProfilePage.class.php");
Shared::header("LoGrow farm Customer Profile Page", "css/customerProfilePage.css");
Shared::navbar();
ProfilePage::profileCard();
?>

<!-- Middle Tab bar -->
<nav>
    <div class="row text-center" style="font-size:small">
    <div class="nav nav-tabs mb-1" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active col-4" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="bi bi-clock-history"></i> My History</a>
    <a class="nav-item nav-link col-4" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="bi bi-heart-fill"></i> My Farmers</a>
    <a class="nav-item nav-link col-4" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="bi bi-calendar2-check"></i> My Events</a>
  </div>
  </div>
</nav>

<!-- Tab bar targets -->
<div class="tab-content px-3" id="nav-tabContent">

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    <div class="card btn-border" style="color:#0b8032">
      <div class="card-body" >
        <h5 class="card-title" style="text-align:left">5 tomatoes <span style="float:right"> $25.00 CAD </span></h5>
        <h6 class="card-subtitle mb-2 text-muted">Purchased using Farm Coin</h6>
        <h6 class="card-subtitle mb-2 text-muted">March 02, 2021</h6>
      </div>
    </div>

    <div class="card" style="color:#0b8032">
      <div class="card-body">
        <h5 class="card-title" style="text-align:left">10 Carrots <span style="float:right"> $9.99 CAD</span></h5>
        <h6 class="card-subtitle mb-2 text-muted">Purchased using credit card</h6>
        <h6 class="card-subtitle mb-2 text-muted">February 27, 2021</h6>
      </div>
    </div>

  </div>

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <ul class="list-group">
      <li class="list-group-item"><img src="assets/farmerIcon.png" alt="avatar1" width="40" height="40" style ="border-radius: 50%"> Kenny Huang<span style="float:right"><i class="bi bi-heart-fill"></i></span></li>
      <li class="list-group-item"><img src="assets/farmFood.jpg" alt="avatar2" width="40" height="40" style ="border-radius: 50%"> Eric C.<span style="float:right"><i class="bi bi-heart-fill"></i></span></li>
      <li class="list-group-item"><img src="assets/farmerIcon.png" alt="avatar3" width="40" height="40" style ="border-radius: 50%"> Sehbaz Singh<span style="float:right"><i class="bi bi-heart-fill"></i></span></li>
      <li class="list-group-item"><img src="assets/customerIcon.png" alt="avatar4" width="40" height="40" style ="border-radius: 50%"> Jimmy Link<span style="float:right"><i class="bi bi-heart-fill"></i></span></li>
    </ul>
  </div>

  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

    <div class="card">
      <div class="card-body" style="color:#0b8032">
        <h5 class="card-title" style="text-align:left"><b>Happy Event</b><span style="float:right"> March 21, 2021 </span></h5>
        <h6 class="card-subtitle mb-2 text-muted">7710 Kingsway, Vancouver, BC</h6>
        <h6 class="card-subtitle mb-2 text-muted">Host: Kenny, the Farmer</h6>
      </div>
    </div>

    <div class="card">
      <div class="card-body" style="color:#0b8032">
        <h5 class="card-title" style="text-align:left"><b>Farm Show </b><span style="float:right"> March 30, 2021 </span></h5>
        <h6 class="card-subtitle mb-2 text-muted">3712 Hollyfield Ave, Richmond, BC</h6>
        <h6 class="card-subtitle mb-2 text-muted">Host: Sehbaz Singh</h6>
      </div>
    </div>

  </div>

</div>


<?php
Shared::footer();
?>