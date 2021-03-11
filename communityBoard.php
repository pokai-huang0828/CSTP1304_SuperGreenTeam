<?php
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Main page", "css/farmerProfilePage.css");

if($_GET["user"]=="farmer"){
     Shared::mainNavbar();
}else{
     Shared::Navbar();
}
?>

<!-- Update Post -->
<div class="container">
     <div class="card my-2">
            
          <!-- Card Header -->
          <div class="card-header">
                <img type="image" class="img-fluid rounded-circle" src="assets/user2.jpg" alt="farmer picture" width="40">
                <a class style="font-size:20px" href="farmerProfilePage.php<?php echo "?user=".$_GET["user"]?>">Jack's Farm</a>
                <span style="font-size:0.8em; color: grey;"> 2 days ago</span>
                <br>
          </div>

          <!-- Card body -->
          <div class="card-body py-0 container">
               <div class="row">
                    <img class="img-fluid rounded" src="assets/post1.jpg" alt="new post picture">
                    <span class="post-title">My Carrots are growing!</span>
                    <p class="text-truncate postContent">Carrots are easy to grow in a garden with deep, loose soil; and as you may have guessed from the name, they are packed with beta carotene. A half-cup serving gives you four times the Recommended Daily Allowance (RDA) of vitamin A in the form of beta carotene. Growing and harvesting carrots is a great way to take advantage of their nutritional benefits.</p>
                    <span class="readMore" onclick="readMore(this)">Read more...</span>
               </div>
               <!-- Icon Buttons -->
               <div class="row iconBar mb-1">
                    <div class="col-12 px-1 py-1">
                        <button class="navbar-toggler likes" onclick="toggleLikes(this)">
                        <i class="bi bi-heart"></i><span>42</span>
                        </button>
                        <button class="navbar-toggler" onclick="clickedCommentButton(this)">
                        <i class="bi bi-chat"></i><span>3</span>
                        </button>
                        <button class="navbar-toggler" type="button">
                        <i class="bi bi-cursor"></i><span> Share</span>
                        </button>
                    </div>
                    <!-- <hr> -->
               </div>

                <!-- hidden comments -->
               <div class="comments" id="comments" style="display:none">
                    <h6>Eric1920 : <span>Good day! So good to see you!!</span></h6>
                    <h6>Harleen306 : <span>I like this farm. It is so fun!!</span></h6>
                    <h6>PoKai1688 : <span>The farmer is friendly and nice!! Hope to see you again!</span></h5>
               </div>

          </div>
     </div>

        <!-- Event Post -->
     <div class="card my-2">
            
            <!-- Card Header -->
          <div class="card-header">
                <img type="image" class="img-fluid rounded-circle" src="assets/user2.jpg" alt="farmer picture" width="40">
                <a class style="font-size:20px" href="farmerProfilePage.php<?php echo "?user=".$_GET["user"]?>">Jack's Farm</a>
                <span style="font-size:0.8em; color: grey;"> 2 days ago</span>
                <br>
          </div>

            <!-- Card body -->
          <div class="card-body py-0 container">
               <div class="row">
                    <img class="img-fluid rounded" src="assets/farmparty.jpg" alt="new post picture">
                    <span class="post-title">Farm Party On April 15, 2020</span>
                    <p class="text-truncate postContent">Have a guest like you in our party will be awesome. Please join us as we all celebrate the evening with friends.</p>
                    <span class="readMore" onclick="readMore(this)">Read more...</span>
                    <button class="navbar-toggler join-event-button my-2" type="button" onclick="joinButtonClick(this)">
                        <i class="bi bi-check2-square"></i><span> Join Event</span>
                    </button>
               </div>

                <!-- Icon Buttons -->
               <div class="row iconBar mb-1">
                    <div class="col-12 px-1 py-1">
                        <button class="navbar-toggler likes" onclick="toggleLikes(this)">
                        <i class="bi bi-heart"></i><span>55</span>
                        </button>
                        <button class="navbar-toggler" onclick="clickedCommentButton(this)">
                        <i class="bi bi-chat"></i><span>4</span>
                        </button>
                        <button class="navbar-toggler" type="button">
                        <i class="bi bi-cursor"></i><span> Share</span>
                        </button>
                    </div>

               </div>

                <!-- hidden comments -->
               <div class="comments" id="comments" style="display:none">
                    <h6>Karen952 : <span>Good to see you!!</span></h6>
                    <h6>Henry8787 : <span>Can't wait to see everyone!!</span></h6>
                    <h6>Lucy666 : <span>Can I bring my pet to join?</span></h5>
                    <h6>jacksfarm : <span>Sure! Welcome!</span></h5>
               </div>

          </div>

     </div>
     </div>
</div>
<script src="js/communityBoard.js"></script>

<?php Shared::footer();?>