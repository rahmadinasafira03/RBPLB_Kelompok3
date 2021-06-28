@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container" style="height: auto; margin-top: 50px;">
  <div class="row justify-content-center">
      <div class="col-lg-12 col-md-8">
          <h1 class="text-white text-center" style=" font-size: 65px; "><b>{{ __('Selamat datang di Indolidays!') }}</b></h1>
      </div>

      <div class="col-lg-7 col-md-8" style="margin-top: 30px;">
        <blockquote class="blockquote text-center" >
            <p class="mb-0">Hal terindah di dunia adalah dunia itu sendiri.</p><br>
            <footer class="blockquote-footer" style="color:white;">Unknown in <cite title="Source Title">Indolidays</cite></footer>
          </blockquote>
    </div>
    <div class="col-lg-7 col-md-8 text-center" style="margin-top: 50px;">
        <a href="{{ route('filter') }}" class="nav-link">
        <button class="btn btn-primary btn-lg">
            Temukan liburan yang pas &nbsp; &nbsp; &nbsp;<i class="material-icons" style="font-size:30px;">travel_explore</i>
        </button></a>
    </div>
  </div>
</div>
@endsection
