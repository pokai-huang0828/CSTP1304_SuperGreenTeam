<?php 

class Form {

    static function signInForm(){ ?>

        <img class="img-fluid" src="assets/logo.png" alt="">
        <!-- sign up form start -->
        <form>
        <!-- User Email -->
        <div class="form-group my-2">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="username@example.com">
        </div>
        <div class="form-group">

        <!-- User Password -->
        <div class="form-group my-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="********">
        </div>

        <div class="form-group my-2">
        <!-- Remember me and forget password row -->
        <div class="d-flex flex-row justify-content-between ">
        <!-- Remember me check box and forget password link -->
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label small-text" for="rememberMe">Remember me</label>
        </div>
        <a class="small-text" href="#">Forget Password?</a>
        <!-- End of Remember me and forget password row -->
        </div>
        </div>

        <!-- Error Message -->
        <div class="row d-flex text-center"><span style="display: none;" id="loginFailed">Login Failed</span></div>
        <!-- Sign in button -->
        <button type="button" class="btn btn-success w-100 btn-lg my-2" onclick="signIn()">Sign in</button>

        <!-- Don't have an account link -->
        <a  href="selectUserProfileType.php">Don't have an account?</a>
        </form>
        <!-- End of form section -->

    <?php }

    static function signUpForm($user){?>

        <form>
            
        <!-- return basic info input controls -->
        <?php Form::basicInfo()?>

        <div class="form-group my-2">
        <!-- Remember me and forget password row -->
        <div class="d-flex flex-row justify-content-between ">
        <!-- Remember me check box and forget password link -->
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label small-text" for="rememberMe">By signing up you accept the term of service and privacy policy</label>
        </div>
        </div>
        </div>

        <!-- Sign in button -->
        <a href="communityBoard.php?user=<?php echo $user?>">
        <button type="button" class="btn btn-success w-100 btn-lg my-2">Sign Up</button>
        </a>

        </form>

    <?php }

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

    static function farmerBasicInfo($preset=false){ ?>

        <!-- User First Name -->
        <div class="form-group my-2">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="Sam" value="<?php echo ($preset==true)? 'Jack' : '' ?>">
        </div>
        <div class="form-group">

        <!-- User Last Name -->
        <div class="form-group my-2">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Hill" value="<?php echo ($preset==true)? 'Robinsin' : '' ?>">
        </div>
        <div class="form-group">

        <!-- User Email -->
        <div class="form-group my-2">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="username@example.com" value="<?php echo ($preset==true)? 'Jask@ms.com' : '' ?>">
        </div>
        <div class="form-group">

        <!-- User Password -->
        <div class="form-group my-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="********" value="<?php echo ($preset==true)? '87654321' : '' ?>">
        </div>

        <!-- User Confirm Password -->
        <div class="form-group my-2">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="********" value="<?php echo ($preset==true)? '87654321' : '' ?>">
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