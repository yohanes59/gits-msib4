@extends('layouts.user.app')

@section('content')
    <div class="products">
        <div class="container">
            <div class="title">
                <h3>Our Product</h3>
            </div>
            <div class="product-boxes">

                @foreach ($produk as $item)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('user/images/no-image.jpg') }}" alt="">
                            <div class="image-icons">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <i class="fa-solid fa-cart-plus add-cart-icon"></i>
                            </div>
                        </div>
                        <div class="text">
                            <span>{{ $item->category ? $item->category->nama_kategori : 'Uncategorized' }}</span>
                            <h4>{{ $item->nama_produk }}</h4>
                            <span class="product-price">{{ number_format($item->harga, 0, ',', '.') }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
