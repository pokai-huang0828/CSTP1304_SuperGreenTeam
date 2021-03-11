<?php 
require_once("inc/utilities/Shared.class.php");
require_once("inc/utilities/Form.class.php");
Shared::header("LoGrow farm Farmer New Post Page");
Shared::farmerNavbar();
?>

<!-- Farmer New Post section -->
<div class="mx-2 p-4">
        <h4 class="text-center">Submit new post</h4>

        <div class="form-check d-flex justify-content-center pb-1">
            <input class="form-check-input" type="checkbox" id="event">
            <h6 class="form-check-label" for="event">This an event post.</h6>
        </div>

        <hr>

        <div class="input-group my-2">
            <input type="text" class="form-control" placeholder="Post Title" id="title">
        </div>

        <div class="input-group my-2">    
            <textarea class="form-control" placeholder="Post Content" id="Content"></textarea>
        </div>

        <span class="text d-flex">Upload an image (Optional):</span>
        <div class="input-group my-2 d-flex">
            <input type="file" class="form-control" id="image">
        </div>

        <!-- Confirm and cancel button -->
        <div class="d-flex justify-content-evenly py-2">
            <a href="farmerProfilePage.php" class="btn btn-danger col-4" role="button">Cancel</a>
            <a href="farmerProfilePage.php" class="btn btn-success col-4" role="button">Post</a>
        </div>
</div>



<!-- End of form -->

</form>

<?php Shared::footer();?>