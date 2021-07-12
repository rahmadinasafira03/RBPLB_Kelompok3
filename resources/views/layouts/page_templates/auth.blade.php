<div class="wrapper ">
  <!-- @include('layouts.navbars.sidebar') -->
  <div class="main-panel" filter-color="black" style="background-image: url('{{ asset('material') }}/img/bg-landingpage2.jpeg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
    @include('layouts.navbars.navs.auth')
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>