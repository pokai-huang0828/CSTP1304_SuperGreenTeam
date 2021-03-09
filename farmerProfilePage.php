<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/ProfilePage.class.php");
Shared::header("LoGrow farm Farmer Profile Page");
Shared::farmerNavbar();
ProfilePage::farmerProfileCard();
?>

<!-- Middle Tab bar -->
<nav>
    <div class="row text-center" style="font-size:small">
    <div class="nav nav-tabs mb-1" id="nav-tab" role="tablist">
    <a class="nav-item nav-link col-4" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false"><i class="bi bi-info-circle"></i> Farm Info</a>
    <a class="nav-item nav-link active col-4" id="nav-newPost-tab" data-toggle="tab" href="#nav-newPost" role="tab" aria-controls="nav-newPost" aria-selected="true"><i class="bi bi-star-fill"></i> New Post</a>
    <a class="nav-item nav-link col-4" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product" aria-selected="false"><i class="bi bi-cart4"></i> Products</a>
  </div>
  </div>
</nav>

<!-- Tab bar targets -->
<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade " id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
        <div class="container"> 
            <hr>   
            <p>
            <h5>At The Local Farm, we aim to provide hyper-local, living leafy greens year-round to 
            Vancouverites with a commitment to following sustainable practices in our specially designed hybrid greenhouse located in Ladner, B.C.</h5>
            <hr>
        </div>
        
    </div>

    <div class="tab-pane fade show active" id="nav-newPost" role="tabpanel" aria-labelledby="nav-newPost-tab">
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
    </div>
       
    
    <div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
        <div class="container">
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
                            <td><input type="number" style="width:50px" value="0.99" disabled></input></td>
                            <td><input id="input1" type="number" style="width:60px" value="0" min="0" onkeyup="sum()"></input></td>
                        </tr>
                        <tr>
                            <td> 
                                <img src="assets/tomato.jpg" class="rounded" width="130" height="100" alt="apple">
                                <p>
                                Tomato
                            </td>
                            <td><input id="number1" type="number" style="width:50px" value=2.99 disabled></input></td>
                            <td><input id="input2" type="number" style="width:60px" value="0" min="0" oninput="sum()"></input></td>
                        </tr>
                        <tr>
                            
                        </tr>    
                                                                       
                        
                    </tbody>
                         
                </table>   
            
                <div class="d-flex justify-content-around">
                    <div class="btn-sm col-5">                        
                        <h5>Sum of price:</h5>                           
                    </div>
                    <div class="btn-sm col-5">                            
                        <h5>$ <span id="output3">0</span> CAD </h5>                                     
                    </div>
                </div>                      
                <p>
                <tr>
                <div class="d-flex justify-content-around">                                                                    
                    <button class="btn btn-outline-success btn-sm col-5" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-credit-card-2-back"> </i>Credit card</button>                                                                
                    <button class="btn btn-outline-success btn-sm col-5" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-emoji-smile"> </i>Farmer Coin</button>
                </div>
                <br>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Purchase success message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Successfully purchased. Thank you! <i class="bi bi-emoji-smile"></i>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">Close</a>
                                <a type="button" class="btn btn-outline-success" href="farmerProfilePage.php">Back to profile</a>
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
    


<?php
Shared::footer();
?>