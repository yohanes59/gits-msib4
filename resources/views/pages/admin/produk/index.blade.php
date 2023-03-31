@extends('layouts.admin.app')

@section('title', 'Data Produk')

@section('content')
    <table class="table">
        <a href="{{ route('produk.tambah') }}">
            <button class=" btn tambah"><i class="fa-solid fa-plus"></i> Tambah Data</button>
        </a>
        <thead>
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $item)
                <tr>
                    <td data-label="No.">{{ $loop->iteration }}</td>
                    <td data-label="Gambar">
                        @if ($item->image != '')
                            <img src="{{ asset('storage/images/' . $item->image) }}" alt="gambar {{ $item->nama_produk }}"
                                width="80" height="80">
                        @else
                            <img src="{{ asset('user/images/no-image.jpg') }}" alt="gambar {{ $item->nama_produk }}"
                                width="80" height="80">
                        @endif
                    </td>
                    <td data-label="Kategori">
                        {{ $item->category ? $item->category->nama_kategori : 'Uncategorized' }}
                    </td>
                    <td data-label="Nama Produk">{{ $item->nama_produk }}</td>
                    <td data-label="Deskripsi">{{ $item->deskripsi }}</td>
                    <td data-label="Harga">{{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td data-label="Aksi">
                        <a href="{{ route('produk.edit', $item->id) }}">
                            <button class="btn">
                                <i class="fa fa-edit"></i> Edit
                            </button>
                        </a>
                        <a href="{{ route('produk.hapus', $item->id) }}"
                            onclick="return confirm('Yakin Ingin Menghapus Data Ini?')">
                            <button class="btn">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
