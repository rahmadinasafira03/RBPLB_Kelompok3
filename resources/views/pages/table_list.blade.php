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
                <tbody class=" text-primary" style="text-align: center;"> 
                            @foreach ($tempatwisata as $tw)
                            <tr>
                                <td>{{ $tw->idTW }}</td>
                                <td><img src="{{ asset('material') }}/img/{{ $tw->gambar }}" width="100px"> </td>
                                <td class="inner-table">{{ $tw->nama }}</td>
                              

                                <td>
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                    
                                    <a href="/table_list/hapus/{{ $tw ->idTW }}" type="button" class="btn btn-outline-danger btn-sm">Hapus</a> 
                                </td>
                            </tr>
                            @endforeach
                        
                    </tbody>


              </table>
            </div>
          </div>
        </div>
      </div>

              <!-- <div class="center">
                  <div class="pagination">
                  {{ $tempatwisata->links() }}
                  </div>
              </div> -->
  </div>
</div>
@endsection
