<?php
include 'connect.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng xe máy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
    <?php
    if(!isset($_SESSION["giohang"]))
    {
    $_SESSION["giohang"]=array();
    }
    $error=false;
    $success=false;
    if(isset($_GET['action']))
    {
    function update_giohang($add=false)
    {
      foreach ($_POST['quantity'] as $maxe=>$quantity) 
        
      {

        if($quantity <='0' )
          {
            unset($_SESSION["giohang"][$maxe]);

          }else{
            if($add)
            {
              $_SESSION["giohang"][$maxe] +=$quantity;
            }
            else
            {
              $_SESSION["giohang"][$maxe]=$quantity;
            }
        }
      }
    }
    switch ($_GET['action'])
    {
    case "add":
    update_giohang(true);
    header('location: ./giohang.php');
    break;
    case "delete":
   // echo 'hhhh';exit;
    if (isset($_GET['id'])) {
    unset($_SESSION["giohang"][$_GET['id']]);
    }
    header('location: ./giohang.php');
    break;
    case "submit":
    if(isset($_POST['update']))
    {
    update_giohang();
    header('location: ./giohang.php');
    }
    else if($_POST['order'])
      {
        if(empty($_POST['name']))
          {
            $error="Bạn chưa nhập TÊN NGƯỜI NHẬN !!!!!";
          }
            else if(empty($_POST['phone']))
              {
                $error="Bạn chưa nhập SỐ ĐIỆN THOẠI người nhận !!!";
              }
                else if(empty($_POST['address']))
                {
                  $error="Bạn chưa nhập ĐỊA CHỈ người nhận !!!!!!";
                }
                  else if(empty($_POST['quantity'])) 
                  {
                    $error="Giỏ hàng rỗng.";
                 }
        if($error == false && !empty($_POST['quantity']))
          {
            $sql="SELECT * FROM `xe` WHERE `maxe` IN (".implode(",", array_keys($_POST['quantity'])).")";
            $stm=$o->query($sql);
            $data=$stm->fetchAll();
            $money=0;
            $dathangsanpham= array();
            foreach ($data as $value)
            {
              $dathangsanpham[]=$value;

              $money +=  $value['gia'] * $_POST['quantity'][$value['maxe']];
          //var_dump($money);exit;
            }
              $sql="INSERT INTO `donhang` (`madh`, `tenkh`, `sdt`, `diachi`, `tongtien`) VALUES (NULL, '".$_POST['name']."', '".$_POST['phone']."', '".$_POST['address']."', '".$money."'); ";
              $stm=$o->query($sql);
              $data=$stm->fetchAll();
              $giohangmadh=$o->lastInsertId();
              $insertString="";
              
              foreach ($dathangsanpham as $key => $value) {
                
                $insertString .="(NULL, '".$giohangmadh."', '".$value['maxe']."', '".$_POST['quantity'][$value['maxe']]."', '".$value['gia']."')";
                if($key !=count($dathangsanpham) - 1){
                  $insertString.=",";
                }
              }
              $sql="INSERT INTO `chitietdonhang` (`id`, `madh`, `maxe`, `soluong`, `gia`) VALUES ".$insertString." ";
              $stm=$o->query($sql);
              $data=$stm->fetchAll();
              $success="Đặt hàng thành công !";
            }
      }
    break;
    }
    }
    if(!empty($_SESSION["giohang"])){
    
    $sql="SELECT * FROM `xe` WHERE `maxe` IN (".implode(",", array_keys($_SESSION["giohang"])).")";
    $stm=$o->query($sql);
    $data=$stm->fetchAll();
    }
    ?>
    <div class="container">
      <?php 
        if(!empty($error))
        {
          ?>
            <div>
              <?php echo $error ?>.<a href="javascript:history.back()">Quay lại!</a>
            </div>
          <?php
        } elseif (!empty($success)) {
          ?>
          <div>
              <?php echo $success ?>.<a href="index.php">Tiếp tục mua hàng!</a>
            </div>
          <?php
        } else{
      ?>
      <div id="giohang">
       <div id="giohang-trangchu">
          <a href="index.php">TRANG CHỦ</a>
          
          <h1>Giỏ Hàng</h1>
       </div>
        <form action="giohang.php?action=submit" method="POST">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>STT</th>
                <th>TÊN SẢN PHẨM</th>
                <th>Hình</th>
                <th>GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
                <th>XOÁ</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if(!empty($data)){
              $money=0;
              $num=1;

              foreach ($data as $value) {
              ?>
              <tr>
                <td><?php echo $num++ ?></td>
                <td><?php echo $value['tenxe']; ?></td>
                <td><img src="img/<?php echo $value['hinh'] ?>" width="200px" height="170px"></td>
                <td><?php echo number_format($value['gia']) ?></td>
                <td><input type="text" value="<?php echo $_SESSION["giohang"][$value['maxe']] ?>" name="quantity[<?php echo $value['maxe'] ?>]"></td>
                <td><?php echo number_format($value['gia'] * $_SESSION["giohang"][$value['maxe']]) ?></td>
                <td><a href="giohang.php?action=delete&id=<?php echo $value['maxe']?>">Xóa</a></td>
              </tr>
              <?php
              $money +=  $value['gia'] * $_SESSION["giohang"][$value['maxe']];
              }
              ?>
              <tr>
                <td></td>
                <td>Tổng tiền : </td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo number_format($money)  ?> </td>
                <td> </td>
              </tr>
              <?php
              }
              
              ?>
              
            </tbody>
          </table>
          <input type="submit" name="update" value="CẬP NHẬT" >
          <hr>
        <!--   <?php 
          if($num>0){
          ?> -->
          <div id="order">
            <div id="order-name">Người nhận <input type="text" name="name"><br></div>
            <div>Số điện thoại <input type="text" name="phone"><br></div>
            <div>Địa chỉ <input type="text" name="address"><br></div>
            
            <input type="submit" name="order" value="ĐẶT HÀNG" >
          </div>
        <!--   <?php 
        }
          ?> -->
        </div>
      </form>
      <?php
      }
      ?>
      
      <hr>
      
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>