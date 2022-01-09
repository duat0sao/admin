<?php include 'partials/header.php' ?>

<head>
    <title>Sign Up</title>
</head>
<section class="container-fluid px-0">
    <div class="background">
        <img src="img/hill.jpg" alt="" class="img-fluid">
    </div>
    <form action="process-signup.php" method="post" class="signup">
        <div class="box">
            <p class="text-center">Signup for Flickr</p>

            <div class="mb-3">
                <label for="fname" class="form-label">First name</label>
                <input type="text" name="fname" class="form-control" placeholder="First name" require>
            </div>
            <div class="mb-1">
                <label for="lname" class="form-label">Last name</label>
                <input type="text" name="lname" class="form-control" placeholder="Last name" require>
            </div>
            <div class="mb-1">
                <label for="age" class="form-label">Your age</label>
                <input type="text" name="age" class="form-control" placeholder="Age" require>
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" require>
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password" require>
            </div>
            <div class="mb-1">
                <?php if (isset($_GET['error'])) {
                    echo "<h5 style='color:red'>{$_GET['error']}</h5> ";
                } elseif (isset($_GET['signupsuccessed'])) {
                    echo "<h5 style='color:red'>{$_GET['signupsuccessed']}</h5> ";
                } ?>
            </div>
            <button type="submit" name="btnSignUp" class="btn btn-primary btn-lg">Sign up</button>
            <br>
            <p>Already a Flickr member? <a href="login.php">Log in here</a> </p>

        </div>
    </form>
</section>

</body>

</html>