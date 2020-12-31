 <?php
        session_start();
    include('connect.php');
?>
 <?php
    if(isset($_POST['login']))
        
    {
    $username = $_POST['user'];
    $password = MD5($_POST['password']);
    $sql_check = mysql_query("SELECT * FROM admin WHERE user = '$username'");
    $dem = mysql_num_rows($sql_check);
    if($dem == 0)
    {
    echo "<p class='thongbao1'>Tài khoản không tồn tại</p>";
    }
    else
    {
        $sql_check2 = "SELECT * FROM admin WHERE user = '$username' AND password = '$password'";
        $row=mysql_query($sql_check2);
        $dem2 = mysql_num_rows($row);
        if($dem2 == 0)
        echo "<p class='thongbao1'>Mật khẩu không chính xác</p>";
        else
        {
            while($rows = mysql_fetch_array($row))
            {
                $_SESSION['user'] = $username;
                $_SESSION['phanquyen'] = $rows['phanquyen'];
                $_SESSION['idnd'] = $rows['idnd'];
                if($rows['phanquyen'] == 1)
                {
                
                    echo "
                        <script language='javascript'>
                        alert('Đăng nhập quản trị thành công');
                        window.open('index.php','_self', 1x);
                        </script>
                        ";
                }
                else
                {
            
                header('location:../index.php');
                }
            }
        }
    }
}
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng Nhập</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <!-- // tuthem -->
    <form action="index.php" method="post">
        <div class="imgcontainer">
            <h1>Đăng nhập quản trị</h1>
        </div>
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="user" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit" name="login">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
   
    <!-- //tu thhem -->
   
</html>