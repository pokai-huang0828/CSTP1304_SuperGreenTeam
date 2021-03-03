<?php 

class Form {

    static function basicInfo($preset=false){ ?>

        <!-- User First Name -->
        <div class="form-group my-2">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Sam" value="<?php echo ($preset==true)? 'Billy' : '' ?>">
        </div>
        <div class="form-group">

        <!-- User Last Name -->
        <div class="form-group my-2">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Hill" value="<?php echo ($preset==true)? 'G.' : '' ?>">
        </div>
        <div class="form-group">

        <!-- User Email -->
        <div class="form-group my-2">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="username@example.com" value="<?php echo ($preset==true)? 'billy@ms.com' : '' ?>">
        </div>
        <div class="form-group">

        <!-- User Password -->
        <div class="form-group my-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="********" value="<?php echo ($preset==true)? '12345678' : '' ?>">
        </div>

        <!-- User Confirm Password -->
        <div class="form-group my-2">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="********" value="<?php echo ($preset==true)? '12345678' : '' ?>">
        </div>

    <?php }

    static function creditCardInfo(){ ?>

        <div class="card">
        <div class="card-body">

        <div class="form-row">
            <div class="col mb-2">
                <span>Credit Card Number</span>
                <input type="text" class="form-control" placeholder="credit card number">
            </div>
            <div class="col mb-2">
                <span>Expire date</span>
                <input type="date" class="form-control">
            </div>
            <div class="col mb-2">
                <span>CVV</span>
            <input type="text" class="form-control" placeholder="cvv">
            </div>
        </div>

        </div>
        </div>

    <?php }

}

?>