@extends('layouts.user.app')

@section('content')
    <div class="products">
        <div class="container">
            <div class="title">
                <h3>Our Product</h3>
            </div>
            <div class="product-boxes">

                <div class="box">
                    <div class="image">
                        <img src="{{ asset('user/images/no-image.jpg') }}" alt="">
                        <div class="image-icons">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <i class="fa-solid fa-cart-plus add-cart-icon"></i>
                        </div>
                    </div>
                    <div class="text">
                        <span>Makanan</span>
                        <h4>Beng-Beng</h4>
                        <span class="product-price">Rp. 150.000</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
