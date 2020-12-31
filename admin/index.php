 <?php
session_start();
if(isset($_SESSION['login']))
{
header('Location:dangnhap.php');
}
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang Admin</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="dashboard">
                    <div class="left">
                        <span class="left__icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <div class="left__content">
                            <div class="left__logo">Xin chào admin</div>
                            <div class="left__profile">
                                <div class="left__image"><img src="" alt=""></div>
                                <p class="left__name"></p>
                            </div>
                            <ul class="left__menu">
                                <li class="left__menuItem">
                                    <a href="index.php" action="index.php" class="left__title"><img src="assets/icon-dashboard.svg" alt="">Trang chủ</a>
                                </li>
                                <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-tag.svg" alt="">Sản Phẩm<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_product.php">Chèn Sản Phẩm</a>
                                        <a class="left__link" href="view_product.php">Cập nhật & Sửa Sản Phẩm</a>
                                    </div>
                                </li>
                                <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-edit.svg" alt="">Danh Mục SP<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_p_category.php">Chèn Danh Mục</a>
                                        <a class="left__link" href="view_p_category.php">Xem Danh Mục</a>
                                    </div>
                                </li>
                                <!-- <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-book.svg" alt="">Thể Loại<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_category.php">Chèn Thể Loại</a>
                                        <a class="left__link" href="view_category.php">Xem Thể Loại</a>
                                    </div>
                                </li> -->
                                <!-- <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-settings.svg" alt="">Slide<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_slide.php">Chèn Slide</a>
                                        <a class="left__link" href="view_slides.php">Xem Slide</a>
                                    </div>
                                </li>
                                <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-book.svg" alt="">Coupons<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_coupon.php">Chèn Coupon</a>
                                        <a class="left__link" href="view_coupons.php">Xem Coupons</a>
                                    </div>
                                </li> -->
                                <!--
                                <li class="left__menuItem">
                                    <a href="view_customers.php" class="left__title"><img src="assets/icon-users.svg" alt="">Khách Hàng</a>
                                </li>
                                <li class="left__menuItem">
                                    <a href="view_orders.php" class="left__title"><img src="assets/icon-book.svg" alt="">Đơn Đặt Hàng</a>
                                </li>
                                <li class="left__menuItem">
                                    <a href="edit_css.php" class="left__title"><img src="assets/icon-pencil.svg" alt="">Chỉnh CSS</a>
                                </li>
                                -->
                                <!-- <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-user.svg" alt="">Admin<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_admin.php">Chèn Admin</a>
                                        <a class="left__link" href="view_admins.php">Xem Admins</a>
                                    </div>
                                </li> -->
                                <li class="left__menuItem">
                                    <a href="logout.php" class="left__title"><img src="assets/icon-logout.svg" alt="">
                                    Đăng Xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right__content">
                            <div class="right__title">Bảng điều khiển</div>
                            <p class="right__desc">Bảng điều khiển</p>
                            <div class="right__cards">
                                <a class="right__card" href="view_product.php">
                                    <div class="right__cardTitle">Sản Phẩm</div>
                                    <div class="right__cardNumber">12</div>
                                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                                </a>
                                <a class="right__card" href="#">
                                    <div class="right__cardTitle">Khách Hàng</div>
                                    <div class="right__cardNumber">12</div>
                                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                                </a>
                                <a class="right__card" href="#">
                                    <div class="right__cardTitle">Danh Mục</div>
                                    <div class="right__cardNumber">4</div>
                                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                                </a>
                                <a class="right__card" href="#">
                                    <div class="right__cardTitle">Đơn Hàng</div>
                                    <div class="right__cardNumber">72</div>
                                    <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                                </a>
                            </div>
                            <div class="right__table">
                                <p class="right__tableTitle">Đơn hàng mới</p>
                                <div class="right__tableWrapper">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th style="text-align: left;">Tên xe</th>
                                                <th>Mô tả</th>
                                                <th>Hình ảnh</th>
                                                <th>Số Lượng</th>
                                                <th>Hãng</th>
                                                <th>Trạng Thái</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td data-label="STT">1</td>
                                                <td data-label="Tên xe" style="text-align: left;">Wave Alpha 110cc</td>
                                                <td data-label="Mô tả">6577544</td>
                                                <td data-label="Hình ảnh">2</td>
                                                <td data-label="Số lượng">1</td>
                                                <td data-label="Hãng">Honda</td>
                                                <td data-label="Trạng Thái">Còn hàng</td>
                                            </tr>
                                            <tr>
                                                <td data-label="STT">2</td>
                                                <td data-label="Tên xe" style="text-align: left;">Honda Winner X</td>
                                                <td data-label="Mô tả">4578644</td>
                                                <td data-label="Hình ảnh">4</td>
                                                <td data-label="Số Lượng">2</td>
                                                <td data-label="Hãng">Honda</td>
                                                <td data-label="Trạng Thái">Hết hàng</td>
                                            </tr>
                                            <tr>
                                                <td data-label="STT">3</td>
                                                <td data-label="Tên xe" style="text-align: left;">Vespa Primavera</td>
                                                <td data-label="Mô tả">2657544</td>
                                                <td data-label="Hình ảnh">3</td>
                                                <td data-label="Số Lượng">5</td>
                                                <td data-label="Hãng">Piaggo</td>
                                                <td data-label="Trạng Thái">Hết hàng </td>
                                            </tr>
                                            <tr>
                                                <td data-label="STT">4</td>
                                                <td data-label="Tên xe" style="text-align: left;">Kawasaki Ninja H2R
                                                </td>
                                                <td data-label="Mô tả">9659544</td>
                                                <td data-label="Hình ảnh">8</td>
                                                <td data-label="Số Lượng">12</td>
                                                <td data-label="Hãng">Kawasaki</td>
                                                <td data-label="Trạng Thái">Còn hàng</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="" class="right__tableMore"><p>Xem tất cả các đơn đặt hàng</p> <img src="assets/arrow-right-black.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/main.js"></script>
    </body>
</html>