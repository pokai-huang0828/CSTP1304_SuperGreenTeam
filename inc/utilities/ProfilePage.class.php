<?php 

class ProfilePage {

    static function profileCard(){ ?>

        <div class="row justify-content-center mx-2">
            <div class="col-12 col-sm-8">
                
                <div class="row gx-0 px-2">
                    <div class="col-4 align-self-center">
                        <img class="img-fluid rounded" src="assets/mary.jpg" alt="profile picture">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                        <h5>Welcome, Mary</h5>
                        <hr>
                        <p><i class="fas fa-coins"></i> Farm Coins: 300</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }

    static function farmerProfileCard(){ ?>
    
    <div class="row justify-content-center mx-2 mb-2">
            <div class="col-12 col-sm-8 ">            
                <div class="row gx-0 px-2">
                    <div class="col-4 align-self-center">
                        <img class="img-fluid rounded" src="assets/user2.jpg" alt="profile picture">
                    </div>
                    <div class="col-8">                   
                        <div class="card-body">
                        <h5>Kenny's Farm</h5>
                        <hr>
                        <h6>Followers: <span id="followerNumber">168</span> 
                        <i class="bi bi-person-plus" id="addPerson" 
                        onclick="toggleFollower()"></i></h6>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }
    
    

}

?>