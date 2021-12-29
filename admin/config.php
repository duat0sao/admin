<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'flickr');
 

$conn=mysqli_connect('localhost', 'root', '', 'flickr');
mysqli_set_charset($conn, 'UTF8');

if(!$conn){
    die("connect fail ".mysqli_connect_error());
}
?>