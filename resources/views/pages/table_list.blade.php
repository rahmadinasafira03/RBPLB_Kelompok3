@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid ">
    <div class="col-md-3" >
        <form class="navbar-form" >
            <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button>
            </div>
          </form>
        <div class="col-md-3" >
            <div class="input-group no-border">
            <a href="/createTW" class="nav-link">
                <button class="btn btn-primary btn-lg">
                    Tambah tempat wisata
                </button></a>
            </div>
        </div>
    </div>
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

                                    <form action="/editTW/{{$tw->idTW}}">
                                        @csrf
                                        @method('POST')

                                        <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Edit" />
                                    </form>

                                    <form action="{{ route('hapusTW', $tw->idTW)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                      <input class="btn btn-outline-danger btn-sm" type="submit" value="Hapus" />
                                      </form>
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
