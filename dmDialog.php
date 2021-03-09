<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm DM", "css/customerProfilePage.css");
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!--Back button-->
        <input type="button" class="btn btn-lg btn-success" onclick="location.href='customerProfilePage.php';" value="<-" />
        <!--DM name-->
        <img src="assets/farmerIcon.png" alt="avatar1" width="50" height="50" style ="border-radius: 60%"><h5>Kenny Huang</h6></li>
        <!--More info-->
        <button class="bi bi-info-circle btn btn-lg btn-success" onclick="location.href='customerProfilePage.php';" ></button>
    </div>
</nav>

<!--Message box-->
<textarea size="10px"> </textarea>
<!--Image addition-->
<span style="float:right"><button class="bi bi-image btn btn-lg btn-success"></button></span>
<!--Farm Coin option-->
<input type="button" class="btn btn-lg btn-success" value="FARM COIN" />

<?php
Shared::footer();
?>