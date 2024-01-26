<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Lembaga Penelitian</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            th, .ctr {
                text-align: center;
            }
            h1 {
                text-shadow: 0px 3px 4px #00000080;
                position: relative;
                top: 100px;
                font-size: 46px;
                bottom: 40px;
                margin-left: 10px;
            }
            h2 {
                margin-left: 10px;
            }
            h4 {
                text-align: center;
                font-size: 22px;
                margin-top: 4px;
                color: #E3AFFF;
            }
            #active {
                color: orange;
            }
            .container-fluid {
                display: flex;
                flex-direction: column;
                width: 100%;
                justify-content: right;
            }
            .container-fluid .tombol {
                position: relative;
                width: 90px;
                height: 35px;
                border: none;
                outline: none;
                background: purple;
                color: #fff;
                font-family: "Poppins", sans-serif;
                border-radius: 8px;
                cursor: pointer;
                top: 7rem;
                left: 58rem;
                font-size: 14.5px;
                font-weight: 500;
                transition: .2 ease;
            }
            .container-fluid .tombol:hover {
                color: gold;
            }
            p {
                text-shadow: 0px 3px 4px #00000080;
                position: relative;
                top: 100px;
                font-size: 46px;
                margin-left: 10px;
            }
            .usr {
                position: relative;
                top: 69px;
                float: left;
                color: black;
                font-size: 40px;
            }
            img {
                position: relative;
                margin-left: 0px;
                width: 188px;
                height: auto;
                padding: 8px;
                filter: drop-shadow(0px 0px 5px #00000080);
            }
            .item1 {
                float: left; 
                display: flex; 
                transform: scale(1.4); 
                max-width: 30px; 
                margin-right: 15px;
                margin-top: 7px;
            }
            span {
                font-size: 30px;
                margin-right: 8px;
                width: 70%;
            }
            .span1 {
                font-size: 22px;
                position: relative;
                margin-right: -3px;
            }
            .span2 {
                font-size: 22px;
                color: #FBB80B;
            }
            .mg-h {
                margin-top: 120px;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-transparant">
            <!-- Navbar-->
            <li class="navbar-nav ms-auto ms-md-8 me-3 me-lg-4">
                <div class="nav-profile-img dropdown rounded-circle nav-link dropdown-toggle" id="profileDropdown" data-toggle="dropdown" href="#" aria-expanded="true">
                    <p class="usr select-p">{{ auth()->user()->name }}</p>
                    <img src="{{ asset('assets/img/profile-logo.png') }}" alt="Avatar" style="float: right;" class="select-p">
                    <div class="dropdown-menu">
                        <a type="button" class="dropdown-item" href="#">
                            <div>
                                <img src="{{ asset('assets/img/dropdown-item1.png') }}" class="item1" onclick="">
                                <span>Dashboard</span>
                            </div>
                        </a>
                        <a type="button" class="dropdown-item" href="#">
                            <div>
                                <img src=""{{ asset('assets/img/dropdown-item2.png') }}"" class="item1" onclick="">
                                <span>Profile</span>
                            </div>
                        </a>
                        <a type="button" class="dropdown-item dropdown-item-l" onclick="window.location.href='login.html'"><span>Log Out</span></a>
                    </div>
                </div>
            </li>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav" id="sidenavAccordion">
                    <div class="sb-sidenav-menu" style="text-shadow: 0px 3px 4px #00000080;">
                        <!-- Logo -->
                        <a class="navbar-brand ps-3" href="{{route('hki.index')}}">
                            <img src="assets/img/gunadarma-logo.png" alt="Logo">
                        </a>
                        <!-- Navbar Brand-->
                        <a class="navbar-brand ps-3" href="{{route('home')}}">
                            <h4>Lembaga Penelitian</h4> 
                            <h4><span class="span1">U<span class="span2">G</span></span>University</h4>
                        </a>
                        <div class="nav mt-5">                            
                        <a class="nav-link" href="{{route('home')}}"> Home </a>
                        <a class="nav-link" href="{{route('penelitian.index')}}"> Penelitian </a>
                        <a class="nav-link" href="{{route('forum.index')}}"> Forum </a>
                        <a class="nav-link" href="{{route('hki.index')}}" id="active"> HKI </a>
                        <a class="nav-link" href="{{route('buku-ajar-teks.index')}}"> Ajartext </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h2>Hi, Selamat Datang {{ auth()->user()->name }}</h2>
                    <div class="container-fluid">
                    <button type="button" id="unggah" class="tombol" value="Unggah">Unggah</button>
                        <div class="mg-h">
                            <div class="card-body">                            
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No Penugasan</th>
                                                <th>Judul</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hkis as $hki)
                                                <tr>
                                                    <td class="ctr">{{$hki->penelitian->no_penugasan}}</td>
                                                    <td>{{$hki->judul}}</td>
                                                    @if ($hki->status == "Granted")
                                                        <td style="text-align: center;">
                                                            <span style="font-size: 16px;" class="btn non btn-info4">
                                                                Granted
                                                            </span>
                                                        </td>
                                                    @elseif ($hki->status == "Terdaftar")
                                                        <td style="text-align: center;">
                                                            <span style="margin-top: 2px;" class="btn non btn-secondary2">
                                                                Terdaftar
                                                            </span>
                                                        </td>
                                                    @else
                                                        <td>undefined</td>
                                                    @endif
                                                    
                                                    <td style="text-align: center;">
                                                        <form action="{{route('hki.destroy', $hki->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="" onclick="location.href='{{route('hki.show', $hki->id)}}'">
                                                                View
                                                            </button>
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="" onclick="location.href='{{route('hki.edit', $hki->id)}}'">
                                                                Edit
                                                            </button>
                                                            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="">
                                                                Delete
                                                            </button>
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
                </main>
            </div>
        </div>
        <script>
            document.getElementById("unggah").addEventListener("click", function () {
                window.location.href = "{{route('hki.create')}}";
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
