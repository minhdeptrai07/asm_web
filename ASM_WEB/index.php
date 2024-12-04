<?php
session_start(); // Bắt đầu phiên làm việc
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Bán đất</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Chào mừng đến với MINH LAND</h1>
        <nav>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="cart.php">Giỏ hàng</a></li>
                <!-- Kiểm tra trạng thái đăng nhập -->
                <!-- Nếu người dùng đã đăng nhập, hiển thị liên kết đăng xuất -->
                <li id="logout">
                    <a href="logout.php">Đăng xuất</a>
                </li>
                <!-- Nếu người dùng chưa đăng nhập, hiển thị liên kết đăng nhập -->
            </ul>
        </nav>
    </header>

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cdnmedia.baotintuc.vn/Upload/GBzr0rzEkBb6ua36h4mJ9w/files/2021/02/15221bds.jpg"
                        class="d-block w-100" alt="Đất nền dự án A">
                </div>
                <div class="carousel-item">
                    <img src="https://bachkhoaland.com/wp-content/uploads/2021/05/takashi-ocean-suite-6.jpg"
                        class="d-block w-100" alt="Đất thổ cư B">
                </div>
                <div class="carousel-item">
                    <img src="https://nld.mediacdn.vn/291774122806476800/2024/7/8/a2-1720432918019128926139.jpg"
                        class="d-block w-100" alt="Đất nền dự án C">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Trước</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Tiếp theo</span>
            </a>
        </div>

        <h1>Sản phẩm đất đang bán có lợi nhuận cao</h1>
        <div class="container">
            <div class="row">
                <!-- Thêm các sản phẩm -->
                <div class="col-md-4 col-sm-6 col-12 product-item">
                    <img src="https://alocanhosg.com/wp-content/uploads/2020/12/nhu-ng-du-a-n-ba-t-do-ng-sa-n-tro-ng-die-m-cu-a-vinhomes.png"
                        alt="Đất nền dự án VINHOMES" class="img-fluid">
                    <h3>Đất nền dự án VINHOMES</h3>
                    <p>Giá: 100,000,000 VND /m2</p>
                    <button onclick="addToCart('Đất nền dự án VINHOMES', 100000000)">Thêm vào giỏ</button>
                    <a href="product/1.php?product_name=Đất nền Hoài Đức&price=100000000" class="btn btn-info">Xem chi
                        tiết</a>
                </div>
                <div class="col-md-4 col-sm-6 col-12 product-item">
                    <img src="https://duanvinhomes.vn/wp-content/uploads/2021/07/Du-an-Vinhomes-tai-Hai-Phong.jpg"
                        alt="Đất nền Hà Đông" class="img-fluid">
                    <h3>Đất nền Hà Đông</h3>
                    <p>Giá: 200,000,000 VND /m2</p>
                    <button onclick="addToCart('Đất nền Hà Đông', 200000000)">Thêm vào
                        giỏ</button>
                    <a href="product/2.php?product_name=Đất nền Hoài Đức&price=100000000" class="btn btn-info">Xem chi
                        tiết</a>
                </div>
                <div class="col-md-4 col-sm-6 col-12 product-item">
                    <img src="https://img.dothi.net/2022/02/18/Z9BcC3fq/vinhomes-thang-long-3-ba41.jpg"
                        alt="Đất nền Hoài Đức" class="img-fluid">
                    <h3>Đất nền Hoài Đức</h3>
                    <p>Giá: 100,000,000 VND /m2</p>
                    <button onclick="addToCart('Đất nền Hoài Đức', 100000000)">Thêm vào giỏ</button>
                    <a href="product/3.php?product_name=Đất nền Hoài Đức&price=100000000" class="btn btn-info">Xem chi
                        tiết</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 product-item">
                <img src="https://gaohouse.vn/wp-content/uploads/2024/03/doi-che-tan-cuong.jpg"
                    alt="Đồi chè Thái Nguyên" class="img-fluid">
                <h3>Đồi chè Thái Nguyên</h3>
                <p>Giá: 100,000,000 VND /m2</p>
                <button onclick="addToCart('Đồi chè Thái Nguyên', 100000000)">Thêm vào giỏ</button>
                <a href="product/4.php?product_name=Đất nền Hoài Đức&price=100000000" class="btn btn-info">Xem chi
                    tiết</a>
            </div>

        </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Bán đất. (Hãy vay tiền để đầu tư cho các dự án của chúng tôi).</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>