<?php
session_start();
$username = '';
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['username'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css.map">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/stylehome1.css">
    <link rel="stylesheet" href="assets/css/stylehome2.css">
    <link rel="stylesheet" href="assets/css/app.css"> -->


    <link rel="stylesheet" href="assets/css/brand.css">
    <link rel="stylesheet" href="assets/css/sanpham.css">
    <link rel="stylesheet" href="assets/css/formnhap.css">
    <title>Admin</title>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span>COLOSHOP</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php?controller=category&action=index" ><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="index.php?controller=khachhang&action=index"><span class="las la-users"></span>
                        <span>Khách hàng</span></a>
                </li>
                <li>
                    <a href="index.php?controller=product&action=index" ><span class="las la-clipboard-list"></span>
                        <span>Sản Phẩm</span></a>
                </li>
                <li>
                    <a href="index.php?controller=order&action=index"class="active" ><span class="las la-shopping-bag"></span>
                        <span>Đơn Hàng</span></a>
                </li>
                <li>
                    <a href="index.php?controller=brand&action=index"><span class="las la-receipt"></span>
                        <span>Thương hiệu</span></a>
                </li>
                <li>
                    <a href="index.php?controller=account&action=index"><span class="las la-user-circle"></span>
                        <span>Tài Khoản</span></a>
                </li>
                <li>
                    <a href="index.php?controller=category&action=index"><span class="las la-clipboard-list"></span>
                        <span>Danh mục</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                <?php
                
                     echo $this->page_title;
                ?>
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>
            <div class="user-wrapper">
                <img src="assets/images/sep.jpg" width="30px" height="30px" alt="">
                <div>
                    <h4><?php echo $username; ?></h4>
                    <small> Giám đốc điều hành</small>
                </div>
            </div>
        </header>
        <main>
            <div class="recent-grid">
                <?php
                     echo $this->content;
                ?>
            </div>
        </main>
    </div>

</body>

</html>