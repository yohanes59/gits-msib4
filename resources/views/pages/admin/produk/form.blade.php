@extends('layouts.admin.app')

@section('title', 'Form Data Produk')

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
    <div class="container">
        <form action="{{ isset($produk) ? route('produk.edit.update', $produk->id) : route('produk.tambah.simpan') }}"
            method="POST">
            @csrf
            <h1 style="margin: 10px 0">{{ isset($produk) ? 'Edit Produk' : 'Tambah Produk' }}</h1>
            <hr style="margin: 10px 0">
            <div class="row">
                <div class="col-25">
                    <label for="kategori">Kategori</label>
                </div>
                <div class="col-75">
                    <select id="kategori" name="kategori" class="@error('kategori') @enderror">
                        <option value="" selected disabled hidden>-- Pilih Kategori --</option>
                        @foreach ($kategori as $row)
                            <option value="{{ $row->id }}"
                                {{ isset($produk) ? ($produk->kategori_id == $row->id ? 'selected' : '') : '' }}>
                                {{ '' . $row->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="nama">Nama Produk</label>
                </div>
                <div class="col-75">
                    <input type="text" id="nama" name="nama" placeholder="Nama Produk.."
                        value="{{ isset($produk) ? $produk->nama_produk : '' }}" class="@error('nama') @enderror">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="harga">Harga Produk</label>
                </div>
                <div class="col-75">
                    <input type="number" id="harga" name="harga" placeholder="Harga Produk.."
                        value="{{ isset($produk) ? $produk->harga : '' }}" class="@error('harga') @enderror">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="deskripsi">Deskripsi</label>
                </div>
                <div class="col-75">
                    <textarea id="deskripsi" name="deskripsi" style="height:70px" class="@error('deskripsi') @enderror">
                        {{ isset($produk) ? $produk->deskripsi : '' }}
                    </textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
@endsection
