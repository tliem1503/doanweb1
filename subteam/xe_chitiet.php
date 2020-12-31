<style>
  #content-right-chitiet .content-right-box-chitiet li
  {
  list-style: none;
  color: #FF0000;
  padding-left: 50px;
  }
  #content-right-chitiet .content-right-box-chitiet img{
    height: 500px;
    width: 600px;   
  }
</style>
<div class= "container-fluid">
  <div class= "row">
    <div class ="col-sm-3 ">
      <div id="content-left-up">
        <li><h2>Hãng Sản Xuất</h2></li>
        <?php
        $tam=$o->query('select * from hang');
        $data=$tam->fetchAll();
        foreach ($data as $key => $value) {
        ?>
        <li><a href="xe_hang.php?mahang=<?php echo $value['mahang'] ?>"><h5><?php echo $value['tenhang'] ?></h5></a></li>
        <?php
        }
        ?>
      </div>
      <hr>
      <div id="content-left-down">
        <li><h2>Xe bán chạy</h2></li>
        <?php
        $tam=$o->query("select * from xe order by rand() limit 0,7");
        $data=$tam->fetchAll();
        foreach ($data as $value) {
        ?>
        <li><a href="chitiet.php?maxe=<?php echo $value['maxe'] ?>"><h5><?php echo $value['tenxe'] ?></h5></a></li>
        <?php
        }
        ?>
      </div>
    </div>
    <div class ="col-sm-9 ">
      <div id="content-right-chitiet">
        <?php
        $maxe = $_GET['maxe'];
        $tam = $o->query("select * from xe where maxe='$maxe' ");
        $data = $tam->fetchAll();
        foreach ($data as $value) {
        ?>
        <div class="content-right-box-chitiet">
          <img src="img/<?php echo $value['hinh'] ?>" alt="">
          <li><h3>Giá từ : <?php echo number_format($value['gia']) ?> VNĐ</h3></li>
          <li><h3><?php echo $value['tenxe'] ?></h3></li>
          <form action="giohang.php?action=add" method="POST">
                  <input type="text" value="1" name="quantity[<?php echo $value['maxe'] ?>]">
                   <input type="submit" value="MUA SẢN PHẨM" name="">
                 </form>
          <h5><b><?php echo $value['mota'] ?></b></h5>
        </div>
        <?php
        }
        ?>
        
      </div>
    </div>
  </div>
</div>