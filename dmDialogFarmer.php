<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm DM - Farmer", "css/dmDialog.css");
Shared::navbar();
?>

<div id="messageParent">
    
    <div id="messages">

        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Add me to this event</li>
            </ul>
        </div>

        <div class="card" style="width: 18rem;">   
            <div class="card-body">     
                <h5 class="card-title" style="color:#0b8032"><b>RSVP - Happy Event</b></h5>
                <p class="card-text">Address: 114 Kingsway, Vancouver <br> Hosted by: Kenny, the Farmer <br> Date: March 21, 2021</p>
                <a href="#" class="btn btn-success" style="width: 7.5rem;">Accept</a>
                <a href="#" class="btn btn-danger" style="width: 7.5rem;">Decline</a>
            </div>
        </div>
        
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