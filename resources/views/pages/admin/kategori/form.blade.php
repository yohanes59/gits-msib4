@extends('layouts.admin.app')

@section('title', 'Form Data Kategori')

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
        <form
            action="{{ isset($kategori) ? route('kategori.edit.update', $kategori->id) : route('kategori.tambah.simpan') }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            <h1 style="margin: 10px 0">{{ isset($kategori) ? 'Edit Kategori' : 'Tambah Kategori' }}</h1>
            <hr style="margin: 10px 0">
            <div class="row">
                <div class="col-25">
                    <label for="kategori">Nama Kategori</label>
                </div>
                <div class="col-75">
                    <input type="text" id="kategori" name="kategori" placeholder="Nama Kategori.."
                        value="{{ isset($kategori) ? $kategori->nama_kategori : '' }}" class="@error('kategori') @enderror">
                </div>
            </div>

            <div class="row">
                <div class="col-25"></div>
                <div class="col-75">
                    @if (isset($kategori) && $kategori->image)
                        <img id="image-preview" src="{{ asset('storage/images/' . $kategori->image) }}" width="160px"
                            height="150px">
                    @else
                        <img id="image-preview">
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="nama">Gambar Produk</label>
                </div>
                <div class="col-75">
                    <input type="file" id="gambar" name="gambar" onchange="previewImage()">
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
@endsection



{{-- <div class="row">
    <div class="col-25"></div>
    <div class="col-75">
        <img id="gambar-preview" src="{{ asset('user/images/no-image.jpg') }}" alt="" width="150"
            height="150">
    </div>
</div>
<div class="row">
    <div class="col-25">
        <label for="nama">Gambar Produk</label>
    </div>
    <div class="col-75">
        <input type="file" id="gambar" name="gambar" onchange="previewImage()">
    </div>
</div> --}}

<script>
    function previewImage() {
        var preview = document.getElementById('image-preview');
        var file = document.querySelector('input[type=file]').files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            var tempImg = new Image();
            tempImg.src = reader.result;

            tempImg.onload = function() {
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');

                canvas.width = 160;
                canvas.height = 150;

                ctx.drawImage(tempImg, 0, 0, 160, 150);

                preview.src = canvas.toDataURL('image/jpeg', 1.0);
            }
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
