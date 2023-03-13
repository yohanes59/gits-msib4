@extends('layouts.app')

@section('title', 'Data Barang')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @php($no = 1)
        @foreach ($barang as $item)
            <tr>
                <td data-label="No.">{{ $no++ }}</td>
                <td data-label="Kode Barang">{{ $item->kode_barang }}</td>
                <td data-label="Nama Barang">{{ $item->nama_barang }}</td>
                <td data-label="Kategori Barang">{{ $item->kategori_barang }}</td>
                <td data-label="Harga Barang">{{ number_format($item->harga) }}</td>
                <td data-label="Jumlah">{{ $item->jumlah }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
