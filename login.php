<?php require_once("config/constant.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>

<body>
    <nav id="navTopP" class="navbar navbar-dark navbar-expand-md bg-gradientg py-0 fixed-top ">
        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="#"><img class="logo" src="img/Flickr_logo.png" alt=""></a>
            </div>
        </div>
    </nav>
    <section class="container-fluid px-0">
        <div class="background">
            <img src="img/hill.jpg" alt="" class="img-fluid">
        </div>
        <form method="POST" action="config/process-login.php" class="login">
            <div class="box">
                <h1 class="mb-5">LOGIN</h1>
                <div class="mb-3 ms-10">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <?php if (isset($_GET['error'])) {
                        echo "<h5 style='color:red'>{$_GET['error']}</h5> ";
                    } ?>
                </div>
                <button type="submit" name="btnLogin" class="btn btn-primary btn-lg">Login</button>
                <br>
                <div><a href="signup.php">Dont have account yet?</a> </div>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>