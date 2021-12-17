<?php
$conn = mysqli_connect('localhost', 'root', '', 'flickr');
if (!$conn) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
