<!DOCTYPE html>
<html>
<head>
    <title>Tugas pweb</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
    .pagination {
        display: inline-block;
    }
    .center{
        text-align: center;
    }
    .navbar{
        padding: .8rem;
        background-color: #336699;
    }
    .navbar-nav li{
        padding-right: 20px;
    }
    .nav-link{
        font-size: 1.1em;
    }
    .padding{
        padding-bottom: 2rem;
    }
    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }
    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }
    footer{
        padding-top: 2rem;
        background-color:#336699;
        color: #d5d5d5;
    }
    hr.light{
        border-top: 1px solid #d5d5d5;
        width: 75%;
        margin-top: .8rem;
        margin-bottom: 1rem;
    }
    hr.light-100{
        border-top: 1px solid #d5d5d5;
        width: 100%;
        margin-top: .8rem;
        margin-bottom: 1rem;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class= "navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/#">Lorem ipsum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#"> Lorem ipsum </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#"> Lorem ipsum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#"> Lorem ipsum</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row text-center">
        <div class="col-12">
            <br/>
            @yield ('judulHalaman')
        </div>
        <div class="col-12">
            @yield ('tombol')
        </div>
    </div>
</div>
	<br/>

<div class="container fluid padding">
        @yield ('konten')
</div>

<footer>
    <div class="container-fluid padding ">
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="light">
                <h5>Indolidays !</h5>
                <hr class="light">
                <p>14045</p>
                <p> Indolidays@mail.com</p>
                <p> Surabaya, Jawa Timur </p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Lorem ipsum</h5>
                <hr class="light">
                <p> Senin-Jumat: 08.00-17.00 </p>
                <p> Sabtu: 08.00-10.00</p>
                <p> Minggu: Libur</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Lokasi</h5>
                <hr class="light">
                <p> Surabaya, Jawa Timur </p>
                <p> Jombang, Jawa Timur</p>
                <p> Malang, Jawa Timur</p>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; Indolidays - RBPL B 3</h5>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
