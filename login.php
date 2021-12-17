<?php include 'partials/header.php' ?>

<head>
    <title>Login</title>
</head>

<section class="container-fluid px-0">
    <div class="background">
        <img src="img/hill.jpg" alt="" class="img-fluid">
    </div>
    <form method="POST" action="process-login.php" class="login-form">
        <div class="box">
            <h1 class="mb-5">LOGIN</h1>
            <div class="mb-3 ms-10">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
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