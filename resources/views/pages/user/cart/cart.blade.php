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
                        <form action="{{ route('cart.update', $row->id) }}" method="POST" class="quantity-form">
                            @csrf
                            @method('PUT')
                            <button type="button" class="quantity-btn minus"><i class="fa-solid fa-minus"></i></button>
                            <input name="quantity" value="{{ $row->quantity }}" class="quantity" readonly>
                            <button type="button" class="quantity-btn plus"><i class="fa-solid fa-plus"></i></button>
                            <a href="{{ route('cart.hapus', $row->id) }}"
                                onclick="return confirm('Yakin Ingin Menghapus Data Ini?')">
                                <i class="fa-solid fa-trash trash-icon"></i>
                            </a>
                        </form>
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

<script>
    $(function() {
        $('.quantity-btn').click(function() {
            var $form = $(this).closest('.quantity-form');
            var quantity = parseInt($form.find('.quantity').val());
            if ($(this).hasClass('minus')) {
                quantity = Math.max(1, quantity - 1);
            } else {
                quantity += 1;
            }
            $form.find('.quantity').val(quantity);
            $.ajax({
                url: $form.attr('action'),
                method: $form.attr('method'),
                data: $form.serialize(),
                success: function(response) {},
                error: function(xhr, status, error) {}
            });

            // Start Total Harga
            // Menampilkan Total Harga
            const quantities = $('.quantity');
            const prices = $('.cart-price');
            // Hitung total harga
            let totalPrice = 0;
            for (let i = 0; i < quantities.length; i++) {
                const quantity = parseInt(quantities[i].value);
                const price = parseInt(prices[i].textContent.replace(/\D/g, ''));
                totalPrice += quantity * price;
            }
            // Tampilkan total harga pada elemen total-cart-price
            const totalCartPrice = $('.total-cart-price');
            totalCartPrice.text(totalPrice.toLocaleString('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }));
            // End Total Harga

            // Start Banyak Jenis Item diKeranjang
            // Mengambil elemen cart-boxes dan amount
            const cartBoxes = $('.cart-boxes');
            const amount = $('.amount');

            // Mengambil jumlah total produk dalam keranjang
            const totalProducts = cartBoxes.children().length;

            // Menampilkan jumlah total produk dalam keranjang ke elemen amount
            amount.html(totalProducts);
            // Ends Banyak Jenis Item diKeranjange
        });
    });
</script>
