<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm DM list", "css/customerProfilePage.css");
Shared::navbar();
?>

<style>
a:link {
  text-decoration: none;
}
</style>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <input type="button" class="btn btn-lg btn-success" onclick="location.href='customerProfilePage.php';" value="<-" />

        <button class="bi bi-search btn btn-lg btn-success" ></button>

        <a class="navbar-brand" href="#">
            <img class="img-fluid" src="assets/logo.png" width=200 alt="LoGrow farm logo">
        </a>
    </div>
</nav> -->

<!--DM List-->
<ul class="list-group">
    <a href="dmDialog.php">
    <li class="list-group-item"><img src="assets/farmerIcon.png" alt="avatar1" width="40" height="40" style ="border-radius: 50%"> Kenny Huang<span style="float:right">15 min</span></li>
    <li class="list-group-item"><img src="assets/farmFood.jpg" alt="avatar2" width="40" height="40" style ="border-radius: 50%"> Eric C.<span style="float:right">20 h</span></li>
    <li class="list-group-item"><img src="assets/noProfilePic.png" alt="avatar3" width="40" height="40" style ="border-radius: 50%"> Sehbaz Singh<span style="float:right">2 d</span></li>
    <li class="list-group-item"><img src="assets/customerIcon.png" alt="avatar4" width="40" height="40" style ="border-radius: 50%"> Jimmy Link<span style="float:right">5 d</span></li>
</ul>