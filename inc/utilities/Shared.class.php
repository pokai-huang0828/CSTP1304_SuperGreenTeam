<?php 

class Shared {

    static function header($title = "Unknown Title", $extraLink = ""){ ?>

        <!doctype html>
            <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- Google Font Recursive -->
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;400;700&display=swap" rel="stylesheet">

                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
                
                <!-- Bootstrap Icons -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

                <!-- Font Awesome here (from our CDN or by hosting yourself) -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

                <!-- CSS -->
                <link rel="stylesheet" href="css/shared.css">
                
                <!-- For Extra CSS -->
                <link rel="stylesheet" href="<?php echo $extraLink?>">

                <title><?php echo $title ?></title>
            </head>
            <body>

    <?php }


    static function footer() { ?>

            <!-- Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        </body>
        </html>

    <?php }

    static function navbar() { ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>

            <a class="navbar-brand" href="communityBoard.php?user=<?php echo $_GET['user']?>">
                <img class="img-fluid" src="assets/logo.png" width=160 alt="LoGrow farm logo">
            </a>

            <div class="row gx-1">
                <div class="col">
                    <a class="navbar-toggler"  type="button" href="customerProfilePage.php?user=<?php echo $_GET['user']?>">
                    <i class="bi bi-person-circle"></i>
                    </a>
                </div>
                <div class="col">
                    <a href="dmList.php?user=customer" class="navbar-toggler"  type="button">
                    <i class="bi bi-chat-left-dots"></i>
                    </a>
                </div>
            </div>

            

            <div class="collapse navbar-collapse flex-row-reverse " id="navbarTogglerDemo01">
                <hr>
                <ul class="navbar-nav list-group">
                
                <li class="nav-item list-group-item list-group-item-success">
                    <a class="nav-link" href="customerInfoUpdatePage.php?user=<?php echo $_GET['user']?>"><i class="fas fa-user-circle"></i> Update Info</a>
                </li>
                
                <li class="nav-item list-group-item list-group-item-info">
                    <a class="nav-link" href="dmList.php?user=<?php echo $_GET['user']?>"><i class="far fa-comment-dots"></i> Messages</a>
                </li>

                <li class="nav-item list-group-item list-group-item-danger">
                    <a class="nav-link" href="index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>

                </ul>
            </div>
        </div>
        </nav>

    <?php }

    static function farmerNavbar() { ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>

            <a class="navbar-brand" href="communityBoard.php?user=<?php echo $_GET['user']?>">
                <img class="img-fluid" src="assets/logo.png" width=160 alt="LoGrow farm logo">
            </a>

            <a href="dmList.php?user=farmer" class="navbar-toggler" type="button" type="button">
            <i class="bi bi-chat-left-dots"></i>
            </a>

            <div class="collapse navbar-collapse flex-row-reverse " id="navbarTogglerDemo01">
                <hr>
                <ul class="navbar-nav list-group">
                
                <li class="nav-item list-group-item list-group-item-success">
                    <a class="nav-link" href="farmerNewPostPage.php?user=<?php echo $_GET['user']?>"><i class="bi bi-file-plus"></i> New Post</a>
                </li>

                <li class="nav-item list-group-item list-group-item-info">
                    <a class="nav-link" href="dmList.php?user=<?php echo $_GET['user']?>"><i class="bi bi-chat-left-dots"></i> Messages</a>
                </li>

                <li class="nav-item list-group-item list-group-item-light">
                    <a class="nav-link" href="farmerInfoUpdatePage.php?user=<?php echo $_GET['user']?>"><i class="fas fa-user-circle"></i> Update Info</a>
                </li>

                <li class="nav-item list-group-item list-group-item-warning">
                    <a class="nav-link" href="farmerProductUpdatePage.php?user=<?php echo $_GET['user']?>"><i class="bi bi-bag-plus"></i> Update Product</a>
                </li>

                <li class="nav-item list-group-item list-group-item-danger">
                    <a class="nav-link" href="index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>

                </ul>
            </div>
        </div>
        </nav>

    <?php }

    static function mainNavbar() { ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>

            <a class="navbar-brand" href="communityBoard.php?user=<?php echo $_GET['user']?>">
                <img class="img-fluid" src="assets/logo.png" width=160 alt="LoGrow farm logo">
            </a>

            <div class="row gx-1">
                <div class="col">
                    <a class="navbar-toggler"  type="button" href="farmerProfilePage.php?user=<?php echo $_GET['user']?>">
                    <i class="bi bi-person-circle"></i>
                    </a>
                </div>
                <div class="col">
                    <a href="dmList.php?user=farmer" class="navbar-toggler"  type="button">
                    <i class="bi bi-chat-left-dots"></i>
                    </a>
                </div>
            </div>


            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>

            <div class="collapse navbar-collapse flex-row-reverse " id="navbarTogglerDemo01">
                <hr>
                <ul class="navbar-nav list-group">
                
                <li class="nav-item list-group-item list-group-item-light">
                    <a class="nav-link" href="farmerInfoUpdatePage.php?user=<?php echo $_GET['user']?>"><i class="fas fa-user-circle"></i> Update Info</a>
                </li>
                
                <li class="nav-item list-group-item list-group-item-warning">
                    <a class="nav-link" href="farmerProductUpdatePage.php?user=<?php echo $_GET['user']?>"><i class="bi bi-bag-plus"></i> Update Product</a>
                </li>

                <li class="nav-item list-group-item list-group-item-success">
                    <a class="nav-link" href="farmerNewPostPage.php?user=<?php echo $_GET['user']?>"><i class="bi bi-file-plus"></i> New Post</a>
                </li>

                <li class="nav-item list-group-item list-group-item-info">
                    <a class="nav-link" href="dmList.php?user=<?php echo $_GET['user']?>"><i class="bi bi-chat-left-dots"></i> Messages</a>
                </li>
                
                <li class="nav-item list-group-item list-group-item-danger">
                    <a class="nav-link" href="index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>

                </ul>
            </div>
        </div>
        </nav>

    <?php }

    static function customerNavbar() { ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>

            <a class="navbar-brand" href="communityBoard.php?user=<?php echo $_GET['user']?>">
                <img class="img-fluid" src="assets/logo.png" width=160 alt="LoGrow farm logo">
            </a>

            <div class="row gx-1">
                <div class="col">
                    <a class="navbar-toggler"  type="button" href="customerProfilePage.php?user=<?php echo $_GET['user']?>">
                    <i class="bi bi-person-circle"></i>
                    </a>
                </div>
                <div class="col">
                    <a href="dmList.php?user=customer" class="navbar-toggler"  type="button">
                    <i class="bi bi-chat-left-dots"></i>
                    </a>
                </div>
            </div>



            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>

            <div class="collapse navbar-collapse flex-row-reverse " id="navbarTogglerDemo01">
                <hr>
                <ul class="navbar-nav list-group">
                
                <li class="nav-item list-group-item list-group-item-success">
                    <a class="nav-link" href="customerInfoUpdatePage.php?user=<?php echo $_GET['user']?>"><i class="fas fa-user-circle"></i> Update Info</a>
                </li>
                
                <li class="nav-item list-group-item list-group-item-info">
                    <a class="nav-link" href="dmList.php?user=<?php echo $_GET['user']?>"><i class="far fa-comment-dots"></i> Messages</a>
                </li>

                <li class="nav-item list-group-item list-group-item-danger">
                    <a class="nav-link" href="index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>

                </ul>
            </div>
        </div>
        </nav>

    <?php }

    static function dmNavbar() { ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="communityBoard.php?user=<?php echo $_GET['user']?>">
            <img class="img-fluid" src="assets/logo.png" width=160 alt="LoGrow farm logo">
        </a>

        <button class="navbar-toggler" onclick="goBack()">
        <i class="bi bi-arrow-90deg-left"></i>
        </button>

    </div>
    </nav>

<?php }
    

}

?>