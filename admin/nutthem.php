<?php
	$conn=new PDO("mysql:host=localhost;dbname=id15078428_xemay",'id15078428_liem','Matkhau123456789@');
	$conn->query('set names utf8');
	$mx =isset($_POST['maxe'])?$_POST['maxe']:'' ;
	$tx =isset($_POST['tenxe'])?$_POST['tenxe']:'';
	$mt =isset($_POST['mota'])?$_POST['mota']:'';
	$g =isset($_POST['gia'])?$_POST['gia']:'';
	$h =isset($_POST['hinh'])?$_POST['hinh']:'';
	$mh=isset($_POST['mahang'])?$_POST['mahang']:'';
	$ml=isset($_POST['maloai'])?$_POST['maloai']:'';	
?>
<form action="" method="post">
	<table>
		<tr>
			<td>Mã xe</td>
			<td>
				<input type="text" name="maxe">
			</td>
		</tr>
		<tr>
			<td>Tên xe</td>
			<td>
				<input type="text" name="tenxe">
			</td>
		</tr>
		<tr>
			<td>Mô tả</td>
			<td>
				<input type="text" name="mota">
			</td>
		</tr>
		<tr>
			<td>Giá</td>
			<td>
				<input type="number" name="gia">

			</td>
		</tr>
		<tr>
			<td>Hình</td>
			<td>
				<input type="file" name="hinh">
				
			</td>
		</tr>
		<tr>
			<td>Hãng</td>
			<td>
				
				<select name="mahang">
					<option value="">--Chọn hãng--</option>
					<?php 
						$selectHang = "SELECT * FROM hang";
						$get = $conn->prepare("SELECT * FROM hang");
						$get->execute();
						$row = $get->fetchALL(PDO::FETCH_ASSOC);

						//echo "<pre>"; print_r($row); exit();

						foreach ($row as $value) {
						?>
						<option value="<?php echo $value['mahang'];?>">
							<?php echo $value['tenhang'];?>
                        </option>
                        <?php } ?>
                                        
					?>
				</select>
			</td>
		</tr>
				<tr>
			<td>Loại</td>
			<td>
				<select name="maloai">
					<option value="">--Chọn loại--</option>
					<?php 
						$selectHang = "SELECT * FROM loai";
						$get = $conn->prepare("SELECT * FROM loai");
						$get->execute();
						$row = $get->fetchALL(PDO::FETCH_ASSOC);

						//echo "<pre>"; print_r($row); exit();

						foreach ($row as $value) {
						?>
						<option value="<?php echo $value['maloai'];?>">
							<?php echo $value['tenloai'];?>
                        </option>
                        <?php } ?>
                                        
					?>
				</select>
			</td>
		</tr>	
		<tr>
			<td colspan="2">
				<input name="submit" type="submit" value="thêm">
			</td>
			
		</tr>
	</table>
</form>
<hr>

<?php

if(isset($_POST['submit']))
{
	$extension = substr($h,strlen($h)-4,strlen($h));
	$accept_img = array(".jpg","jpeg",".png",".gif",".JPG","JPEG",".PNG",".GIF");

	if($g<=0){
		 echo "<script>alert('Số tiền không hợp lệ!!');</script>";
        echo "Thêm thất bại";
	}

	else if(!in_array($extension,$accept_img))
    {
        echo "<script>alert('Định dạng ảnh không đúng. Hãy sử dụng các định dạng ảnh sau: jpg / jpeg/ png /gif format allowed');</script>";
        echo "Thêm thất bại";
    }
    else
    {

		$sql="INSERT INTO xe (maxe, tenxe, mota, gia, hinh, mahang, maloai) VALUES ('$mx', '$tx', '$mt', '$g', '$h', '$mh', '$ml')";
		$kq=$conn->query($sql);
		
		if($kq)
		{
			echo "Thêm thành công";
		}
		else
		{
			echo "Thêm thất bại";
		}
	}
}
?>