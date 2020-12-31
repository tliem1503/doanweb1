<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang admin</title>
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
                                <div class="left__image"><img src="cuoi.jpg" alt=""></div>
                                <p class="left__name"></p>
                            </div>
                            <ul class="left__menu">
                                <li class="left__menuItem">
                                    <a href="index.php" class="left__title"><img src="assets/icon-dashboard.svg" alt="">Trang chủ</a>
                                </li>
                                <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-tag.svg" alt="">Sản Phẩm<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_product.php">Chèn Sản Phẩm</a>
                                        <a class="left__link" href="view_product.php"></a>
                                    </div>
                                </li>
                                <!-- <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-edit.svg" alt="">Danh Mục SP<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_p_category.php">Chèn Danh Mục</a>
                                        <a class="left__link" href="view_p_category.php">Xem Danh Mục</a>
                                    </div>
                                </li>
                                <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-book.svg" alt="">Thể Loại<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_category.php">Chèn Thể Loại</a>
                                        <a class="left__link" href="view_category.php">Xem Thể Loại</a>
                                    </div>
                                </li>
                                <li class="left__menuItem">
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
                                </li>
                                <li class="left__menuItem">
                                    <a href="view_customers.php" class="left__title"><img src="assets/icon-users.svg" alt="">Khách Hàng</a>
                                </li>
                                <li class="left__menuItem">
                                    <a href="view_orders.php" class="left__title"><img src="assets/icon-book.svg" alt="">Đơn Đặt Hàng</a>
                                </li>
                                <li class="left__menuItem">
                                    <a href="edit_css.php" class="left__title"><img src="assets/icon-pencil.svg" alt="">Chỉnh CSS</a>
                                </li>
                                <li class="left__menuItem">
                                    <div class="left__title"><img src="assets/icon-user.svg" alt="">Admin<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                    <div class="left__text">
                                        <a class="left__link" href="insert_admin.php">Chèn Admin</a>
                                        <a class="left__link" href="view_admins.php">Xem Admins</a>
                                    </div>
                                </li> -->
                                <li class="left__menuItem">
                                    <a href="logout.php" class="left__title"><img src="assets/icon-logout.svg" alt="">Đăng Xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
<div class="right">
    <div class="right__content">
<!--         <div class="right__title" >Bảng điều khiển</div>
 -->            <!-- <p class="right__desc">Sản phẩm</p> -->
        <!-- <div class="right_table">
            <div class="right_tableWrapper"> -->
               <!--  <table>
                    <td>Mã xe</td>
                    <td>Tên xe</td>
                    <td>Hình ảnh</td>
                    <td>Xóa sản phẩm</td>
                    <tr> -->
                                <?php
                                include 'hienthisanpham.php';
                                ?>
                   
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>
<script src="js/main.js"></script>
</body>
</html>