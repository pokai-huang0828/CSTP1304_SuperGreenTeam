<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Farmer New Post Page");
Shared::farmerNavbar();
?>

<!-- Farmer New Post section -->



<div class="container">
    <form class="mx-4">
    <div class="row" id="row_style">
        <h4 class="text-center">Submit new product</h4>
        <p>
        <div class="col-md-4   col-md-offset-4">
            <h6 class="text">Product Name:</h6>
            <div class="input-group">
                
                <input type="text" class="form-control" placeholder="Product Name">
            </div>            
            <p>
            <h6 class="text">Description:</h6>
            <div class="input-group">
                <textarea type="text" class="form-control" placeholder="Description"></textarea>
            </div>
            <p>
            <h6 class="text">Image:</h6>
            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>
            <p>
            <h6 class="text">Price:</h6>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">CAD</span>
            </div>
            <p>
            <h6 class="text">Farm Coins (1 CAD = 1 Farm Coin)</h6>
            <p>
        </div>
    </div>
    </form>
</div>





<!-- Confirm and cancel button -->
<div class="d-flex justify-content-around ">
  <a href="farmerProductUpdatePage.php" class="btn btn-outline-danger col-3">Cancel</a>
  <a href="farmerProductUpdatePage.php" class="btn btn-outline-success col-3">Post</a>
  <a href="farmerProfilePage.php" class="btn btn-outline-success col-3">Back to profile</a>
</div>

<!-- Farmer View Products -->
<div class="container">
    <hr>
    <h4 class="text-center">Your products</h4>
    <br>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card h-100">
                <button type="button" class="btn-close" aria-label="Close"></button>
                <img src="assets/apple.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Fresh apple</h4>
                    <p class="card-text-left">These are fresh apples.</p>
                    <h5 class="card-title">Price: 0.99 CAD</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <button type="button" class="btn-close" aria-label="Close"></button>
                <img src="assets/tomato.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Fresh tomato</h4>
                    <p class="card-text-left">These are fresh tomato.</p>
                    <h5 class="card-title">Price: 1.99 CAD</h5>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>

<!-- End of form -->
<div style="height: 10px;"></div>
</form>

<?php Shared::footer();?>