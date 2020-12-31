<?php
include('../connect.php');
?>
<?php
$sql="select * from xe";
$stm=$o->prepare($sql);
$stm->execute();
$data=$stm->fetchALL(PDO::FETCH_ASSOC);
?>
<table>
    <div class="container">
        <div id="giohang">
            <h1 align="center">Sản Phẩm</h1>
            <form action="giohang.php?action=submit" method="POST">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>TÊN SẢN PHẨM</th>   
                            <th>GIÁ</th>
                            <th>Loại xe</th>
                            <th>Hình ảnh</th>
                            <th>Xóa sản phẩm</th>
                            <?php
                            foreach ($data as $key => $value)
                            {
                            ?>
                            <tr>
                                <td><?php echo $value['maxe']?></td>
                                <td><?php echo $value['tenxe']?></td>
                                <td><?php echo $value['gia']?></td>
                                <td><?php echo $value['maloai']?></td>
                                <td><img src="../img/<?php echo $value['hinh'];?>" alt=""></td>
                                <td><a href="xoa.php?maxe=<?php echo $value['maxe']?>">Xóa</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>