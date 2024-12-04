<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="css/product.css">
</head>

<body>
    <header>
        <h1>Chi tiết sản phẩm</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="../cart.php">Giỏ hàng</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Đất nền Hoài Đức</h2>
        <img src="https://img.dothi.net/2022/02/18/Z9BcC3fq/vinhomes-thang-long-3-ba41.jpg" alt="Đất nền Hoài Đức">
        <p>Giá: 100,000,000 VND /m2</p>
        <p>Vị trí: Khu vực A, gần trung tâm thành phố.</p>
        <button onclick="addToCart('Đất nền Hoài Đức', 100000000)">Thêm vào giỏ</button>
    </main>

    <footer>
        <p>&copy; 2024 Bán đất. Tất cả các quyền được bảo lưu.</p>
    </footer>

    <script>
    function addToCart(productName, productPrice) {
        // Logic thêm vào giỏ hàng (có thể lưu vào localStorage hoặc sessionStorage)
        alert('Sản phẩm "' + productName + '" đã được thêm vào giỏ hàng!');
    }
    </script>

    <script src="js/app.js"></script>
</body>

</html>