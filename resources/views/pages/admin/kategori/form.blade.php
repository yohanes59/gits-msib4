@extends('layouts.admin.app')

@section('title', 'Form Data Kategori')

@section('content')
    <div class="container">
        <form
            action="{{ isset($kategori) ? route('kategori.edit.update', $kategori->id) : route('kategori.tambah.simpan') }}"
            method="POST">
            @csrf
            <h1 style="margin: 10px 0">{{ isset($kategori) ? 'Edit Kategori' : 'Tambah Kategori' }}</h1>
            <hr style="margin: 10px 0">
            <div id="row">
                <div class="col-25">
                    <label for="kategori">Nama Kategori</label>
                </div>
                <div class="col-75">
                    <input type="text" id="kategori" name="kategori" 
                    placeholder="Nama Kategori.." 
                    value="{{ isset($kategori) ? $kategori->nama_kategori : '' }}">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
@endsection
