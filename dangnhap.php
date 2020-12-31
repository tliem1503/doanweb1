<?php 
session_start();
include('connect.php');

if(isset($_POST['btnSubmit']))
{

	$sql="select count(*) from nhanvien where username=:manv and password=(:matkhau) ";
	$data=$con->prepare($sql);
	$data1=array("username"=>$_POST['manv'],"password"=>$_POST['matkhau']);
	$data->execute($data1);   
	if($data->fetchColumn(0)>0)
	{
		$_SESSION['nhanvien']=$_POST['manv'];   
		header('location:admin/index.php');
	}

	$error = 'Lỗi đăng nhập';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.form-group{
		text-align: center;	;
		}
		.dn{
			text-align: center;	;
		}
		.card-header{
			text-align: center;
		}
		.row{
			text-align: center;
		}


	</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Đăng Nhập</title>
	<!-- Bootstrap core CSS-->
	<link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<link href="public/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header" ><h3>Đăng Nhập</h3></div>
			<div class="card-body">


				<form id="form" action="dangnhap.php" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" id="username" type="text"  placeholder="Enter Username" name="username">
						<br>
						<br>
						<label for="password">Password</label>
						<input class="form-control" id="password" type="password" placeholder="Enter Password" name="password">
					</div>
					<br>

				<?php if (isset($error)): ?>
					<div class="row">

								
								<strong><?php echo $error ?></strong>

					</div>
					<br>
				<?php endif ?>
					<div class="dn">
						<input class="btn btn-outline-info" name="btnSubmit"  type="submit" value="Đăng nhập">
					</div>
					

				</form>

			</div>
		</div>


		<!-- Bootstrap core JavaScript-->
		<script src="../public/vendor/jquery/jquery.min.js"></script>
		<script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Core plugin JavaScript-->
		<script src="../public/vendor/jquery-easing/jquery.easing.min.js"></script>
	</body>

	</html>