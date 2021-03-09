<?php
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Main page");
Shared::mainNavbar();
?>
<hr>
<div class="card">
     <div class="card-header">
          <img type="image" class="img-fluid rounded-circle" src="assets/user2.jpg" alt="farmer picture" width="40"><span> </span><a class style="font-size:20px" href="farmerProfilePage.php">Robinson Jack</a><br>
     </div>
               <div class="card-body">
                    <img class="img-fluid rounded" src="assets/post1.jpg" alt="new post picture" width="80%">
                    <hr>
                    <a class="navbar-toggler" type="button">
                    <i class="bi bi-hand-thumbs-up"></i>42
                    </a>

                    <a class="navbar-toggler" type="button">
                    <i class="bi bi-chat"></i>
                    </a>

                    <a class="navbar-toggler" type="button">
                    <i class="bi bi-cursor"></i>
                    </a>

                    <a class="navbar-toggler" type="button">
                    <i class="bi bi-check2-square"></i> Join Event
                    </a>

                    <p>
                    <div class="container">
                         <h5>Eric1920 : <span style="font-size:18px">Good day! So good to see you!!</span></h5>
                         <h5>Harleen306 : <span style="font-size:18px">I like this farm. It is so fun!!</span></h5>
                         <h5>PoKai1688 : <span style="font-size:18px">The farmer is friendly and nice!! Hope to see you again!</span></h5>
                    </div>
               </div>
               <div class="card-footer text-muted">
                    2 days ago
               </div>
</div>
<?php Shared::footer();?>