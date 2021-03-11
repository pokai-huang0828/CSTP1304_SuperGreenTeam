<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/ProfilePage.class.php");
Shared::header("LoGrow farm Farmer Profile Page", "css/farmerProfilePage.css");
Shared::farmerNavbar();
ProfilePage::farmerProfileCard();
?>

<!-- Middle Tab bar -->
<nav>
    <div class="row text-center" style="font-size:small">
    <div class="nav nav-tabs mb-1" id="nav-tab" role="tablist">
    <a class="nav-item nav-link col-4" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false"><i class="bi bi-info-circle"></i> Farm Info</a>
    <a class="nav-item nav-link active col-4" id="nav-newPost-tab" data-toggle="tab" href="#nav-newPost" role="tab" aria-controls="nav-newPost" aria-selected="true"><i class="bi bi-star-fill"></i> New Posts</a>
    <a class="nav-item nav-link col-4" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product" aria-selected="false"><i class="bi bi-cart4"></i> Products</a>
  </div>
  </div>
</nav>

<!-- Tab bar targets -->
<div class="tab-content" id="nav-tabContent">

    <!-- Farm Info Section -->
    <div class="tab-pane fade " id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
        <hr>  
        <div class="container mx-1"> 
            <h6 style="font-weight:bold"><i class="bi bi-file-person-fill"></i> Jack's Farm</h6> 
            <p>At The Local Farm, we aim to provide hyper-local, living leafy greens year-round to 
            Vancouverites with a commitment to following sustainable practices in our specially designed hybrid greenhouse located in Ladner, B.C.</p>
            <h6 style="font-weight:bold"><i class="bi bi-geo-alt-fill"></i> Address</h6> 
            <h6> 3614 Kettles Rd, Delta, BC VXK XNX</h6>
        </div>
        <hr>
    </div>

    <!-- New Posts Section -->
    <div class="tab-pane fade show active container" id="nav-newPost" role="tabpanel" aria-labelledby="nav-newPost-tab">
        
        <!-- Update Post -->
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

                <!-- hiddden comments -->
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
                    <img class="img-fluid rounded" src="assets/post1.jpg" alt="new post picture">
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
                        <i class="bi bi-heart"></i><span>42</span>
                        </button>
                        <button class="navbar-toggler" onclick="clickedCommentButton(this)">
                        <i class="bi bi-chat"></i><span>3</span>
                        </button>
                        <button class="navbar-toggler" type="button">
                        <i class="bi bi-cursor"></i><span> Share</span>
                        </button>
                    </div>

                </div>

                <!-- hiddden comments -->
                <div class="comments" id="comments" style="display:none">
                    <h6>Eric1920 : <span>Good day! So good to see you!!</span></h6>
                    <h6>Harleen306 : <span>I like this farm. It is so fun!!</span></h6>
                    <h6>PoKai1688 : <span>The farmer is friendly and nice!! Hope to see you again!</span></h5>
                </div>

            </div>

        </div>

    <!-- End of new post section -->
    </div>
       
    <!-- Products Section -->
    <div class="tab-pane fade" id="nav-product" role="tabpanel">
        <div class="container">

                <!-- Product table -->
                <table class="table table-image">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <script src="js/shared.js"></script>                       
                        <tr>
                            <td>
                                <img src="assets/apple.jpg" class="rounded" width="130" height="100" alt="apple">
                                <p>
                                Apple
                            </td>
                            <td><p>0.99</p></td>
                            <td><input id="input1" type="number" style="width:100%" value="0" min="0" onkeyup="sum()"></input></td>
                        </tr>
                        <tr>
                            <td> 
                                <img src="assets/tomato.jpg" class="rounded" width="130" height="100" alt="apple">
                                <p>
                                Tomato
                            </td>
                            <td><p>2.99</p></td>
                            <td><input id="input2" type="number" style="width:100%"  value="0" min="0" oninput="sum()"></input></td>
                        </tr>
                    </tbody>
                </table>   

                <hr style="margin:0">
            
                <!-- Sum of price section -->
                                                  
                <div class="d-flex priceSection text-center">
                    <div class="btn-sm col-5">                        
                        <p>Sum of price:</p>                           
                    </div>
                    <div class="btn-sm col-7">                            
                        <p>$ <span id="output3">0</span> CAD <span>(Tax free)</span></p>                                     
                    </div>
                </div>

                <!-- Payment Options -->
                <div class="paymentSection container border border-secondary py-1 mb-3">
                    <p>Choose Your Payment Method:</p>
                    <div class="row d-flex">
                        <div class="col-6">
                            <input type="radio" id="CreditCard" name="payment" value="CreditCard">
                            <label for="CreditCard"><i class="bi bi-credit-card"></i> Credit Card</label><br>
                        </div>
                        <div class="col-6">
                            <input type="radio" id="FarmCoin" name="payment" value="FarmCoin">
                            <label for="FarmCoin"><i class="fas fa-coins"></i> Farm Coins</label><br>
                        </div>
                    </div>
                </div>

                <!-- CheckOut Button -->
                <div class="d-flex justify-content-around mb-3">                                                                    
                    <button class="btn btn-outline-success btn-sm col-5" onclick="checkoutClick()" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-cart-check"></i> Check Out</button>                                                                
                </div>

                <!-- Checkout Model -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Purchase Success</h5>
                            </div>
                            <div class="modal-body">
                                Thank you! <i class="bi bi-emoji-smile"></i>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    <!-- End of Product Section -->
    </div>

</div>
    
<script src="js/farmerProfilePage.js"></script>

<?php
Shared::footer();
?>