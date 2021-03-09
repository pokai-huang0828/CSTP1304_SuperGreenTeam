<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm DM", "css/dmDialog.css");
Shared::navbar();
?>



<div id="messageParent">

    <div id="messages">
        some messages here...
    </div>

    <div class="row justify-content-evenly text-center align-items-center" id="messageInput" style="margin:0">
      
            <div class="col-8 col-sm-8" style="padding:0">
                <!--Message box-->
                <input type="text" name="textMessage" id="textMessage" style="width:100%">
            </div>
            <div class="col-4 col-sm-4" style="padding:0">
                <button class="btn btn-success" style="margin:1px"><i class="fas fa-paper-plane"></i></button>
                <button class="btn btn-success"><i class="fas fa-coins"></i></button>
            </div>
    </div>

</div>

<?php
Shared::footer();
?>