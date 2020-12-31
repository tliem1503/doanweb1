<div class= "container-fluid">
  <div class= "row">
    <div class ="col-sm-3 ">
      <div id="content-left">
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
    </div>
    <div class ="col-sm-9 ">
      <div id="content-right">
        <?php 
if (isset($_POST['timkiem'])) 
{
  if(empty($_POST['tim'])) 
  {
    //var_dump($_POST['tim']);exit;
    echo "<h2>Chưa nhập dữ liệu tìm kiếm</h2>";
  }
  else
  {
    $key =$_POST['tim'];  
    $select = $o->query("SELECT * FROM xe WHERE tenxe LIKE '%$key%'");
    $data = $select->fetchAll();
    ?>
    <div class="search">
      <?php
    if($data)
    {
      ?><table>
        <?php
        foreach($data as $value)
        {
          ?>
            <div class="content-right-box">
                  <img src="img/<?php echo $value['hinh'] ?>" alt="">
                  <li><h3><?php echo number_format($value['gia']) ?>VND</h3></li>
                  <li><a href="chitiet.php?maxe=<?php echo $value['maxe'] ?>"><h3><?php echo $value['tenxe'] ?></h3></a></li>
                </div>
          <?php
        }
        ?>
      </table>
      <?php 
    }
    else echo "<h2>Không tìm thấy sản phẩm</h2>";
  }
  ?>
  </div>
  <?php  
}
?>
      </div>
    </div>
  </div>
</div>