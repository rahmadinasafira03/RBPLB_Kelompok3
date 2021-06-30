@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid ">
    <div class="col-md-5" style="display: block; margin-top: -25px; margin-left: auto; margin-right: auto; width: 40%;">
        <form class="navbar-form" >
            <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button>
            </div>
          </form>
    </div>


      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h3 class="card-title" style="text-align: center;">Daftar Tempat Wisata</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary" style="text-align: center;">
                  <th>
                    ID
                  </th>
                  <th>
                  Gambar
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Opsi
                  </th>
                </thead>
                <tbody>
	                @foreach($tempat_wisatas as $t)
	                <tr> <img width=”150px” src=”{{ url(‘ ‘. $t->gambar)}} “></td>
	                <td>  {{$t->nama}}</td>
                  @endforeach 
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
@endsection
