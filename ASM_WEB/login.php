<?php
session_start(); // Bắt đầu session để lưu trạng thái đăng nhập
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        background-color: #ffffff;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    form input[type="text"],
    form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    form input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    form input[type="submit"]:hover {
        background-color: #45a049;
    }

    form label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    form a {
        display: block;
        margin-top: 10px;
        text-align: center;
    }
    </style>
</head>

<body>

    <form action="" method="POST">
        <h2>Đăng Nhập</h2>
        <label for="username">Tên đăng nhập</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" name="login" value="Đăng Nhập">
        <a href="register.php">Chưa có tài khoản? Đăng ký ngay</a>
    </form>

    <?php
    // Kết nối đến cơ sở dữ liệu
    $connect = mysqli_connect('localhost', 'root', '', 'land_sales_db');
    if (!$connect) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    // Xử lý đăng nhập
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);

        // Câu truy vấn kiểm tra thông tin đăng nhập
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $username; // Lưu username vào session
            echo "<script>alert('Đăng nhập thành công!');</script>";
            echo "<script>window.location.href = 'index.php';</script>"; // Chuyển hướng đến trang chủ
        } else {
            echo "<p style='color:red; text-align:center;'>Sai tên đăng nhập hoặc mật khẩu</p>";
        }
    }
    ?>
</body>

</html>