// Giỏ hàng toàn cục
let cart = JSON.parse(localStorage.getItem('cart')) || [];

function addToCart(productName, productPrice) {
    // Tạo đối tượng sản phẩm
    const product = { name: productName, price: productPrice };

    // Thêm sản phẩm vào giỏ hàng
    cart.push(product);

    // Lưu giỏ hàng vào localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Hiển thị thông báo hoặc cập nhật giỏ hàng
    alert(`${productName} đã được thêm vào giỏ hàng!`);
}

// Hàm hiển thị giỏ hàng và tính tổng
function displayCart() {
    const cartList = document.getElementById('cart-list');
    const totalAmount = document.getElementById('total-amount');
    cartList.innerHTML = ''; // Xóa giỏ hàng hiện tại

    // Kiểm tra xem giỏ hàng có sản phẩm hay không
    if (cart.length === 0) {
        cartList.innerHTML = '<p>Giỏ hàng của bạn đang trống.</p>';
        totalAmount.innerHTML = 'Tổng tiền: 0 VND';
    } else {
        // Tính tổng giá trị giỏ hàng
        let total = 0;
        
        // Hiển thị sản phẩm trong giỏ hàng
        cart.forEach(product => {
            const item = document.createElement('li');
            item.textContent = `${product.name} - ${product.price.toLocaleString()} VND`;
            cartList.appendChild(item);

            // Cộng dồn giá trị sản phẩm vào tổng
            total += product.price;
        });

        // Hiển thị tổng tiền
        totalAmount.innerHTML = `Tổng tiền: ${total.toLocaleString()} VND`;
    }
}

// Hàm thanh toán (ví dụ đơn giản)
function checkout() {
    if (cart.length === 0) {
        alert('Giỏ hàng của bạn đang trống! Không thể thanh toán.');
    } else {
        alert('Thanh toán thành công! Cảm ơn bạn đã mua hàng.');
        // Xóa giỏ hàng sau khi thanh toán
        localStorage.removeItem('cart');
        cart = [];
        displayCart(); // Cập nhật lại giỏ hàng sau khi thanh toán
    }
}

// Gọi hàm hiển thị giỏ hàng khi trang giỏ hàng được tải
if (document.getElementById('cart-list')) {
    displayCart();
}
