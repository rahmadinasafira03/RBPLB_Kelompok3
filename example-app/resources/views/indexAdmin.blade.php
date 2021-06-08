@extends('layouts.app')

@section('judulHalaman')
    <h1>Daftar Tempat Wisata</h1>
@endsection

@section ('tombol')
    <a href="/products/tambahTW"> <button type="button" class="btn btn-outline-primary">Tambah Tempat Wisata </button></a>
@endsection

@section('konten')
<div class="container">
    <form action = "/absen/cariAbsen" method = "GET">
        <div class="row">
        <input type = "text" class="form-control col-2" name="cariAbsen" id="cariAbsen" placeholder="Cari tempat wisata..." value="{{ old ('cariAbsen') }}">
        <input type = "submit" button type="button" class="btn btn-secondary" value = "cari">
        </div>
    </form>
</div>
	<br/>

	<table class="table center">
        <thead class="thead-dark">
		<tr>
			<th>ID </th>
			<th>Nama </th>
			<th>Opsi</th>
		</tr>
		@foreach($products as $a)
		<tr>
			<td>{{ $a->ID }}</td>
			<td>{{ $a->Nama}}</td>
			<td>
				<a href="/absen/editAbsen/{{ $a->ID }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
				<a href="/absen/hapusAbsen/{{ $a->ID }}"><button type="button" class="btn btn-outline-danger btn-sm">Hapus</button></a>
			</td>
		</tr>
		@endforeach
    </table>
    <br/>

        Halaman : {{ $products->currentPage() }} <br/>
        Jumlah Data : {{ $products->total() }} <br/>
        Data Per Halaman : {{ $products->perPage() }} <br/>

    <div class="center">
        <div class="pagination">
        {{ $products->links() }}
        </div>
    </div>

@endsection

