<?php 
require_once("inc/utilities/Shared.class.php");
Shared::header("LoGrow farm DM", "css/dmDialog.css");
Shared::dmNavbar();
?>

<div id="messageParent">

    <div id="messages" class="border border-success">

        <div class="row d-flex flex-row-reverse">
            <div class="col-10 col-sm-8">
                <div class="card">   
                    <div class="card-body customer-text">     
                        <h5 class="card-title" style="color:#0b8032"><b>Join Event Request</b></h5>
                        <span class="card-text">From: Billy<br> Event: Happy Event<br> Date: March 21, 2021</span>
                        <div class="py-1" id="eventBtn">
                            <a href="#" class="btn btn-success" onclick="eventBtnClick(this)">Accept</a>
                            <a href="#" class="btn btn-danger" onclick="eventBtnClick(this)">Decline</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
    <div class="row text-center align-items-center" id="messageInput" style="margin:0">
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

<script src="js/dm.js"></script>

<?php
Shared::footer();
?>