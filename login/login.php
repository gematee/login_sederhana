<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    <label for="user">Username</label>
    <input type="text" name="user" id="user"><br>
    <label for="pass">Password</label>
    <input type="text" name="pass" id="pass"><br> 
    <input type="submit" value="password" name="submit">
</form>
    <?php
        if (isset($_POST['submit'])) {
            include ('array.php');
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                if (key_exists($user,$tableuser)) {
                    if($pass ==$tableuser[$user]) {
                        session_start();
                        $_SESSION['user'] = $user;
                        header("location:user.php");
                    } else {
                        echo "password salah";
                    }
                } else {
                    echo "user tidak terdaftar";
                }
        }
    ?>
</body>
</html>