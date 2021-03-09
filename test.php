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
<div class="tab-content" id="nav-tabContent">

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img claaa="img-fluid" src="assets/logo.png" alt="" width="40"></img></th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    no favorite farmer
</div>

<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    no events
</div>

</div>


<?php
Shared::footer();
?>