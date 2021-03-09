<?php 

class ProfilePage {

    static function profileCard(){ ?>

        <div class="row justify-content-center mx-2">
            <div class="col-12 col-sm-8">
                
                <div class="row gx-0 px-2">
                    <div class="col-4 align-self-center">
                        <img class="img-fluid rounded" src="assets/user1.jpg" alt="profile picture">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                        <h5>Welcome, Billy G.</h5>
                        <hr>
                        <p>Your farm Credits: 721</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }

    static function farmerProfileCard(){ ?>
    
    <div class="row justify-content-center mx-2">
            <div class="col-12 col-sm-8">            
                <div class="row gx-0 px-2">
                    <div class="col-4 align-self-center">
                        <img class="img-fluid rounded" src="assets/user2.jpg" alt="profile picture">
                    </div>
                    <div class="col-8">                   
                        <div class="card-body">
                        <h5>Robinson Jack</h5>
                        <div class="col-4 align-self-left">
                            <button class="btn btn-success" type="button">Follow</button>
                        </div>
                        <hr>
                        <h6>Follower: 168</h6>
                        <h6><i class="bi bi-geo-alt-fill"></i> 3614 Kettles Rd, Delta, BC VXK XNX</h6>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }
    
    

}

?>