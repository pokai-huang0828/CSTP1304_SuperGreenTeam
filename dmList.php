<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm DM list", "css/customerProfilePage.css");
Shared::dmNavbar();
?>

<!--DM List-->
<div class="container">
    <ul class="list-group">
        <?php if ($_GET["user"] == "customer") echo
        '<a href="dmDialogCustomer.php?user=customer" style="text-decoration:none">
            <li class="list-group-item"><img src="assets/farmerIcon.png" alt="avatar1" width="40" height="40" style ="border-radius: 50%"> Kenny Huang <span class="badge badge-pill badge-primary">new</span><span style="float:right">1 min</span></li>
        </a>'?>
        <?php if ($_GET["user"] == "farmer") echo
        '<a href="dmDialogFarmer.php?user=farmer" style="text-decoration:none">
            <li class="list-group-item"><img src="assets/farmFood.jpg" alt="avatar2" width="40" height="40" style ="border-radius: 50%"> Billy <span class="badge badge-pill badge-primary">new</span><span style="float:right">1 min</span></li>
        </a>'?>
        <li class="list-group-item"><img src="assets/farmerIcon.png" alt="avatar3" width="40" height="40" style ="border-radius: 50%"> Sehbaz Singh<span style="float:right">2 d</span></li>
        <li class="list-group-item"><img src="assets/customerIcon.png" alt="avatar4" width="40" height="40" style ="border-radius: 50%"> Jimmy Link<span style="float:right">5 d</span></li>
    </ul>
</div>

<script src="js/dm.js"></script>