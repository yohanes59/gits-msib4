@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
    <div class="info-section">

        <div class="info">
            <div class="info-body">
                <div class="info-header">
                    <h3 class="info-title">{{ $jumlahKategori }}</h3>
                    <p>Total Kategori</p>
                </div>
                <div class="info-icon">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>
            </div>
            <a href="{{ route('kategori') }}" class="info-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>

        <div class="info">
            <div class="info-body">
                <div class="info-header">
                    <h3 class="info-title">{{ $jumlahProduk }}</h3>
                    <p>Total Produk</p>
                </div>
                <div class="info-icon">
                    <i class="fa-solid fa-rectangle-list"></i>
                </div>
            </div>
            <a href="{{ route('produk') }}" class="info-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>

        <div class="info">
            <div class="info-body">
                <div class="info-header">
                    <h3 class="info-title">{{ $jumlahUser }}</h3>
                    <p>Total Pelanggan</p>
                </div>
                <div class="info-icon">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <a href="" class="info-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>

    </div>
@endsection
