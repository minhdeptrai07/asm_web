<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng - Bán đất</title>
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <header>
        <h1>Giỏ hàng của bạn</h1>
        <nav>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="cart.php">Giỏ hàng</a></li> <!-- Liên kết đến cart.php -->
            </ul>
        </nav>
    </header>

    <main>
        <h2>Sản phẩm trong giỏ hàng:</h2>
        <ul id="cart-list">
            <!-- Các sản phẩm sẽ được hiển thị ở đây -->
        </ul>

        <div id="total-amount">
            <!-- Tổng tiền sẽ được hiển thị ở đây -->
        </div>

        <button onclick="window.location.href='index.php'">Tiếp tục mua sắm</button>
        <button onclick="checkout()">Thanh toán</button>
    </main>

    <footer>
        <p>&copy; 2024 Bán đất. Tất cả các quyền được bảo lưu.</p>
    </footer>

    <script src="js/app.js"></script>
</body>
</html>
