<?php
if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $conn = mysqli_connect('localhost', 'root', '', 'flickr');
    if (!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_user WHERE email ='$email' AND pwd = '$pwd'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        header("location: admin.php");
    } else {
        $error = "Email or password is not correct";
        header("location: login.php?error=$error");
    }
    mysqli_close($conn);
} else {
    header("location:login.php");
}
