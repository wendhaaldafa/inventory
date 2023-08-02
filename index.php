<?php 
    include 'koneksi.php';

    if(isset($_POST['login'])) {

        $cek = mysqli_query($conn, "SELECT * FROM admin WHERE username = 
        '".$_POST['user']."' AND password = '".md5($_POST['pass'])."' ");

        if(mysqli_num_rows($cek)>0) {
            echo '<script>window.location="dashboard.php"</script>';
        }else {
            echo '<script>alert("Username atau password salah")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css";>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <!-- main Login -->

    <section class="login">

        <div class="imgcontainer">
                <img src="CSS/img/logo-kominfo-.png.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="box-login">
            <img src="CSS/img/WhatsApp Image 2023-07-19 at 20.01.27.jpg" alt="icon" class="icon">
            <h2>Log in to your account</h2>
            <h3>Welcome back! Please enter your details</h3>

        <form action="" method="post">
            <div class="box">
                <table>
                    <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="user" placeholder="Enter username" class="input-control">
                    </td>
                    </tr>

                    <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="pass" placeholder="Enter password" class="input-control">
                    </td>
                    </tr>

                    <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="login"  class="btn-login" value="Login">
                    </td>
                    </tr>
                </table>
            </div>
        </form>


        </div>
    </section>
</body>
        

</html>