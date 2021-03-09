<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Farmer New Post Page");
Shared::farmerNavbar();
?>

<!-- Farmer New Post section -->
<div class="container">
    <div class="row" id="row_style">
        <h4 class="text-center">Submit new post</h4>
        <hr>
        <div class="col-md-4   col-md-offset-4">
            <h6 class="text">Image:</h6>
            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>
            <br>
            <h6 class="text">Description:</h6>
            <div class="input-group">    
                <textarea class="form-control" placeholder="Type your text here..." ></textarea>
            </div>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Event</label>
                
            </div>
            <p>
            <br>
        </div>
    </div>
</div>





<!-- Confirm and cancel button -->
<div class="d-flex justify-content-around ">
  <a href="farmerNewPostPage.php" class="btn btn-outline-danger col-3">Cancel</a>
  <a href="farmerProfilePage.php" class="btn btn-outline-success col-3">Post</a>
</div>

<!-- End of form -->

</form>

<?php Shared::footer();?>