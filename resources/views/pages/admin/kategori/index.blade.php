@extends('layouts.admin.app')

@section('title', 'Data Kategori')

@section('content')
    <table class="table">
        <a href="{{ route('kategori.tambah') }}">
            <button class=" btn tambah"><i class="fa-solid fa-plus"></i> Tambah Data</button>
        </a>
        <thead>
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php($no = 1)
            @foreach ($kategori as $item)
                <tr>
                    <td data-label="No.">{{ $no++ }}</td>
                    <td data-label="Nama Kategori"><img src="{{ asset('user/images/no-image.jpg') }}" alt="" width="80" height="80"></td>
                    <td data-label="Nama Kategori">{{ $item->nama_kategori }}</td>
                    <td data-label="Aksi">
                        <a href="{{ route('kategori.edit', $item->id) }}">
                            <button class="btn">
                                <i class="fa fa-edit"></i> Edit
                            </button>
                        </a>
                        <a href="{{ route('kategori.hapus', $item->id) }}"
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
