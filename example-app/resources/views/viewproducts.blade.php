@extends('template')

@section('judulHalaman')
    <h1>Tambah Tempat Wisata</h1>
@endsection

@section ('tombol')
    <a href="/"> <button type="button" class="btn btn-outline-primary">Kembali </button></a>
@endsection

@section('konten')
                <table class="table center">
                    <thead class="thead-dark">
                        <td>ID</td>
                        <td>Nama</td>
                        <td>Opsi</td>
                    </thead>
                    <tbody>
                        @foreach ($allProducts as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td class="inner-table">{{ $product->nama }}</td>
                                <td>
                                    <a href="/products/edit{{ $product->id }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                    <a href="/products/destroy{{ $product->id }}"><button type="button" class="btn btn-outline-danger btn-sm">Hapus</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection


