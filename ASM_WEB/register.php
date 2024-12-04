<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .register-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 400px;
    }

    .register-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .register-container label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .register-container input[type="text"],
    .register-container input[type="password"],
    .register-container input[type="date"],
    .register-container input[type="tel"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    .register-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .register-container input[type="submit"]:hover {
        background-color: #45a049;
    }

    .register-container a {
        display: block;
        text-align: center;
        margin-top: 10px;
        color: #555;
    }

    input:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 8px rgba(76, 175, 80, 0.3);
    }
    </style>
</head>

<body>
    <div class="register-container">
        <h2>Đăng Kí</h2>
        <form action="register.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="e.g., 0123456789" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <input type="submit" value="Register">

            <a href="login.php">Bạn đã có tài khoản? Đăng Nhập</a>
        </form>
    </div>
    <?php
    // Thông tin kết nối cơ sở dữ liệu
    $servername = "localhost"; 
    $usernameDB = "root"; 
    $passwordDB = ""; 
    $dbname = "land_sales_db"; 

    // Tạo kết nối
    $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Kiểm tra nếu form đã được submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị từ form
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Thêm người dùng mới vào cơ sở dữ liệu
        $sql = "INSERT INTO users (fullname, phone, username, password) 
                VALUES ('$fullname', '$phone', '$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful! You can now <a href='login.php'>login</a>.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>

</html>