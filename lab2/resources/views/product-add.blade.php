<h1>Trang them san pham</h1>
<form action="{{ route('product.store') }}" method="post">
{{-- <form action="{{ route('product.edit', ['productId'=>$product->id]) }}" method="post"> --}}
    @csrf
     {{-- Ngăn chặn mã script vào form --}}
    <label for="product_name">Ten san pham:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="product_price">Gia san pham:</label>
    <input type="number" id="price" name="price" step="0.01" required>
    <br><br>
    <label for="description">Mo ta san pham:</label>
    <textarea id="description" name="description" required></textarea>
    <br><br>
    <label for="quantity">So luong san pham:</label>
    <input type="number" id="quantity" name="quantity" min="1" required>
    <br><br>
    <button>Them san pham</button>
</form>