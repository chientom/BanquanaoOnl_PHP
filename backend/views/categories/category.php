<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css.map">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/stylehome1.css">
    <link rel="stylesheet" href="../../assets/css/stylehome2.css">

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
                    <a href="main.php" ><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="khachhang.php" ><span class="las la-users"></span>
                    <span>Khách hàng</span></a>
                </li>
                <li>
                    <a href="product.php" ><span class="las la-clipboard-list"></span>
                    <span>Sản Phẩm</span></a>
                </li>
                <li>
                    <a href="order.php"><span class="las la-shopping-bag"></span>
                    <span>Đơn Hàng</span></a>
                </li>
                <li>
                    <a href="kho.php"><span class="las la-receipt"></span>
                    <span>Kho</span></a>
                </li>
                <li>
                    <a href="account.php"><span class="las la-user-circle"></span>
                    <span>Tài Khoản</span></a>
                </li>
                <li>
                    <a href="category.php" class="active"><span class="las la-clipboard-list"></span>
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
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>
            <div class="user-wrapper">
                <img src="../../assets/images/sep.jpg"  width="30px" height="30px" alt="">
                <div>
                    <h4>Chien Tom</h4>
                    <small> Giám đốc điều hành</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>21</h1>
                        <span>Khách Hàng</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                   
                </div>
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Sản phẩm</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                   
                </div>
                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Đơn hàng</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                   
                </div>
                <div class="card-single">
                    <div>
                        <h1>VNĐ</h1>
                        <span>Thu Nhập</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                   
                </div>

            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Sản phẩm gần đây</h3>
                            <button>Xem thêm <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Tên sản phẩm</td>
                                        <td>Loại sản phẩm</td>
                                        <td>Trạng thái</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Varsity Jacket</td>
                                        <td>Áo Khoác</td>
                                        <td><span class="status pink"></span>Trạng thái</td>
                                    </tr>
                                    <tr>
                                        <td>Varsity Jacket</td>
                                        <td>Áo Khoác</td>
                                        <td><span class="status orange"></span>Trạng thái</td>
                                    </tr>
                                    <tr>
                                        <td>Varsity Jacket</td>
                                        <td>Áo Khoác</td>
                                        <td><span class="status purple"></span>Trạng thái</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="customers">
                    <div class="card-header">
                                <h3>Sản phẩm mới</h3>

                                <button>Xem thêm <span class="las la-arrow-right"></span></button>
                    </div>
                            <div class="card-body">
                                <div class="customer">
                                    <div>
                                    <img src="assets/images/sep.jpg"width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lê Văn Chiến</h4>
                                        <small>Giám Đốc điều hành</small>
                                    </div>
                                    </div>
                                    <div>
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                <div class="customer">
                                    <div>
                                    <img src="assets/images/sep.jpg"width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lê Văn Chiến</h4>
                                        <small>Giám Đốc điều hành</small>
                                    </div>
                                    </div>
                                    <div>
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                <div class="customer">
                                    <div>
                                    <img src="assets/images/sep.jpg"width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lê Văn Chiến</h4>
                                        <small>Giám Đốc điều hành</small>
                                    </div>
                                    </div>
                                    <div>
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>
                                <div class="customer">
                                    <div>
                                        <img src="assets/images/sep.jpg"width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Lê Văn Chiến</h4>
                                            <small>Giám Đốc điều hành</small>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
</body>
</html>