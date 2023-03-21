<div class="shopping-cart">
    <div class="content">
        <div class="cart-title">
            <h3>Your Cart</h3>
            <i class="fa-sharp fa-solid fa-circle-xmark xmark"></i>
        </div>
        <div class="cart-boxes">

            @foreach ($itemAdded as $row)
                <div class="cart-box">
                    <img src="{{ asset('user/images/no-image.jpg') }}" alt="">
                    <div class="text">
                        <div class="cart-name">{{ $row->product->nama_produk }}</div>
                        <div class="cart-price">{{ number_format($row->product->harga, 0, ',', '.') }}</div>
                    </div>
                    <div class="row">
                        <input value="{{ $row->quantity }}" class="quantity" readonly>
                        <a href="{{ route('cart.hapus', $row->id) }}"
                            onclick="return confirm('Yakin Ingin Menghapus Data Ini?')">
                            <i class="fa-solid fa-trash trash-icon"></i>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="check-out">
            <div class="total">
                <span>Total:</span>
                <span class="total-cart-price">0</span>
            </div>
            <div class="btn">
                <button>Buy Now</button>
            </div>
        </div>
    </div>
</div>
