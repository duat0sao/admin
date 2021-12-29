<?php
include 'config.php';
if(isset($_POST['sign-in']) && $_POST['email'] != '' && $_POST['password'] != ''){
    $t1 = $_POST['email'];
    $t2 = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE admin = '$t1' AND matkhau = '$t2'";
    $duyet = mysqli_query($conn,$sql);
    if(mysqli_num_rows($duyet)>0){
        
        header('location: index1.php');
        die();
       
    }
    else {
        $_SESSION['thongbao']='tai khoan va mat khau khong chinh xac';
        header('location:../index.php');
        
    }
}
else {
    $_SESSION['thongbao']='vui long nhap day du thong tin dang nhap';
    header('location:../index.php');
    
}
?>
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>


<!--CREATE TABLE `admin` (
  `admin` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin`, `matkhau`) VALUES
('1', '1'),
('2', '2');
-->

