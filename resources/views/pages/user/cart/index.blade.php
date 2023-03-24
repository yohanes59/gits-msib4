@extends('layouts.user.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="products">
        <div class="container">
            <div class="title">
                <h3>Our Product</h3>
            </div>
            <div class="product-boxes">

                @foreach ($produk as $item)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('user/images/no-image.jpg') }}" alt="product-image">
                            <div class="image-icons">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <form action="{{ route('cart.tambah.simpan') }}" method="POST">
                                    @csrf
                                    <button type="submit" style="border: none;">
                                        <i class="fa-solid fa-cart-plus add-cart-icon"></i>
                                        <input type="hidden" name="product_id" value="{{ $item->id }}" class="@error('product_id') @enderror">
                                        <input type="hidden" name="quantity" value="1" class="@error('quantity') @enderror">
                                    </button>
                                </form>
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
