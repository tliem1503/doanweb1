<?php
include('../connect.php');
?>
<?php 
$maxe=isset($_GET['maxe'])?$_GET['maxe']:'';
$sql="delete from xe where maxe=? ";
$stm=$o->prepare($sql);
$stm->execute([$maxe]);
header('location:view_product.php')
 ?>