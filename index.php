<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flickr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <nav id="navTop" class="navbar navbar-dark navbar-expand-md bg-gradientg py-0 fixed-top ">
        <div class="container-fluid">
            <div class="nav-left">
                <a class="navbar-brand" href="#"><img class="logo" src="img/Flickr_logo.png" alt=""></a>
            </div>
            <div class="nav-middle">
                <div><i class="fa fa-search"></i></div>
                <input class="form-control search-bar d-none d-lg-block" type="search" placeholder="Photos, people, or groups" aria-label="Search">

            </div>
            <div class="nav-right">
                <a class="btn btn-outline-primary" href="login.php" role="button">Login</a>
                <a class="btn btn-light" href="signup.php">Sign up</a>

            </div>
        </div>
    </nav>
    <section class="home">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url('img/sky.jpg')">
                    <div class="container">
                        <h1 class="text-white">Find your inspiration.</h1>
                        <p class="text-white">Join the Flickr community, home to tens of billions of photos and 2
                            million groups.</p>
                        <button type="button" class="btn btn-light btn-lg">Start for free</button>
                    </div>
                </div>
                <div class="carousel-item" style="background-image:url('img/house-decoration.jpg')">
                    <div class="container">
                        <h1 class="text-white">Find your inspiration.</h1>
                        <p class="text-white">Join the Flickr community, home to tens of billions of photos and 2
                            million groups.</p>
                        <button type="button" class="btn btn-light btn-lg">Start for free</button>
                    </div>
                </div>
                <div class="carousel-item" style="background-image:url('img/house.jpg')">
                    <div class="container">
                        <h1 class="text-white">Find your inspiration.</h1>
                        <p class="text-white">Join the Flickr community, home to tens of billions of photos and 2
                            million groups.</p>
                        <button type="button" class="btn btn-light btn-lg">Start for free</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer id="navBottom" class="fixed-bottom">
        <nav id="navBottom" class="nav nav-pills nav-justified bg-black">
            <a class="nav-link link-light" href="#">About</a>
            <a class="nav-link link-light" href="#">Jobs</a>
            <a class="nav-link link-light" href="#">Blog</a>
            <a class="nav-link link-light" href="#">Developers</a>
            <a class="nav-link link-light" href="#">Guidelines</a>
            <a class="nav-link link-light" href="#">Help</a>
            <a class="nav-link link-light" href="#">Help forum</a>
            <a class="nav-link link-light" href="#">Privacy</a>
            <a class="nav-link link-light" href="#">Terms</a>
            <a class="nav-link link-light" href="#">Cookies</a>
            <a class="nav-link link-light" href="#">English</a>
            <a class="nav-link link-light" href="#">SmugMug+Flickr</a>
            <a class="nav-link link-light" href="#"><i class="fab fa-facebook"></i></a>
            <a class="nav-link link-light" href="#"><i class="fab fa-twitter"></i></a>
            <a class="nav-link link-light" href="#"><i class="fab fa-instagram"></i></a>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>