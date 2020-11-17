<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $nama = $_SESSION['user'];
        if (!isset($_SESSION['user'])) {
            header("location:login.php");
        } echo "<h2>Selamat datang $nama</h2>";
        echo "<a href ='logout.php'>Logout</a>";
    ?>
</body>
</html>