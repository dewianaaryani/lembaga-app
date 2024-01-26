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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300;400;700&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            .navbar {
                width: 100%;
                position: fixed;
                padding: 4rem;
                background: white;
                height: 175px;
            }
            .back {
                width: 90%;
                display: flex;
                align-items: center;
                margin-right: auto;
                margin: 0 35rem 0 0;
            }
            .nav-profile-img {
                display: flex;
                align-items: center;
                margin-left: auto;
            }
            .nav-profile-img img {
                position: relative;
                height: auto;
                width: 170px;
                margin-top: -5rem;
            }

            .nav-profile-img .dropdown img {
                height: auto;
                width: 50px;
            }

            .dropdown {
                padding: 20px 0;
            }
            
            .item1 {
                float: left; 
                display: flex; 
                transform: scale(1.4); 
                max-width: 30px; 
                margin-right: 15px;
                position: relative;
                top: 88px;
                left: 20px;
            }
            .span1 {
                font-size: 30px;
                position: relative;
                left: 70px;
                width: 70%;
            }
            .sh-mg {
                width: 270px;
                position: absolute;
                left: -15px;
            }
            .dropdown-item-2 {
                text-align: center;
                font-size: 30px;
            }
            .divider {
                width: 100%;
                border: 1px solid black;
            }
            
            .navbar-nav .back a i {
                font-size: 35px;
                color: purple;
                transition: .2s ease;
            }
            .navbar-nav .back a i:hover {
                color: gold;
            }
            .navbar-nav .back .keterangan {
                width: 90%;
                font-family: "Poppins", sans-serif;
                font-size: 35px;
                font-weight: 400;
                color: rgb(100, 100, 100);
                margin-left: 32px;
            }
            .content {
                position: absolute;
                top: 14rem;
                width: 100%;
                height: 100%;
            }
            .content .form-box {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
            }
            .content .input-box {
                position: relative;
                flex-direction: column;
                margin: 50px 0;
                width: 700px;
                height: 50px;
            }
            .input-box .label {
                position: absolute;
                width: 100%;
                top: -2rem;
                font-family: "Poppins", sans-serif;
                font-size: 16px;
                font-weight: 500;
                pointer-events: none;
            }
            .input-box input {
                width: 100%;
                height: 100%;
                border: 1px solid purple;
                border-radius: 12px;
                outline: none;
                font-family: "Poppins", sans-serif;
                font-size: 14px;
                font-weight: 500;
            }
            .input-text {
                padding: 0 20px;
                width: 100%;
                box-sizing: border-box;
            }
            .input-with-icon {
                position: relative;
                display: flex;
                align-items: center;
                width: 712px;
            }
            .input-with-icon i {
                position: absolute;
                right: 25px;
                top: 50%;
                transform: translateY(-50%);
                color: #555;
                font-size: 20px;
                transition: transform 0.3s;
                cursor: pointer;
            }
            .dropdown-opened .arrow-icon {
                transform: translateY(-50%) rotate(180deg);
            }
            .input-with-icon .input-text {
                width: 100%;
                box-sizing: border-box;
                height: 55px;
                display: flex;
                align-items: center;
            }
            .dropdown {
                position: relative;
                display: inline-block;    
                margin-left: 10px;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }
            .dropdown-content a {
                display: block;
                padding: 10px;
                text-decoration: none;
                color: #333;
            }
            .dropdown-content a:hover {
                background-color: #ddd;
            }
            .dropdown:hover .dropdown-content {
                display: block;
            }
            .btn {
                width: 130px;
                height: 35px;
                border: none;
                outline: none;
                background: purple;
                color: #fff;
                font-family: "Poppins", sans-serif;
                border-radius: 8px;
                cursor: pointer;
                font-size: 17px;
                font-weight: 500;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                transition: 0.2 ease;
            }

            .btn:hover {
                color: gold;
                background: purple;
            }
        </style>
    </head>
    <body>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-transparant">
            <!-- Navbar-->
            <li class="navbar-nav ms-auto ms-md-8 me-3 me-lg-4">
                <div class="back">
                    <a href="{{route('hki.index')}}"><i class="bi bi-chevron-left"></i></a>
                    <span class="keterangan"><b>EDIT HKI</b></span>
                </div>
                <div class="nav-profile-img dropdown rounded-circle nav-link dropdown-toggle" id="profileDropdown" data-toggle="dropdown" href="#" aria-expanded="true">
                <img src="{{ asset('{{ asset('assets/img/profile-logo.png') }}') }}" alt="Avatar" class="">
                    <div class="dropdown-menu sh-mg">
                        <a class="dropdown-item" href="#">
                            <div class="dropdown">
                                <img src="{{ asset('{{ asset('assets/img/dropdown-item1.png') }}') }}" class="item1">
                                <span class="span1">Dashboard</span>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="dropdown">
                                <img src="{{ asset('assets/img/dropdown-item2.png') }}" class="item1">
                                <span class="span1">Profile</span>
                            </div>
                        </a>
                        <hr class="divider">
                        <a class="dropdown-item dropdown-item-2" href="#"><span>Log Out</span></a>
                    </div>
                </div>
            </li>
        </nav>
        <div class="content">
        
            <div class="form-box">
            <form action="{{ route('hki.update', $hki->id) }}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="input-box">
                    <span class="label">Penelitian</span>
                    <input type="text" name="id_penelitian" id="idPenelitian" oninput="autoDelete()" class="input-text" placeholder="" value="{{$hki->penelitian->judul}}"disabled />
                </div>
                <div class="input-box">
                    <span class="label">Sertifikat HKI</span>
                    <input type="text" name="sertifikat_hki" id="judulHki" oninput="autoDelete()" class="input-text" placeholder="Pemrograman Naive-Bayes" disabled value="{{$hki->sertifikat_hki}}"/>
                </div>
                <div class="input-box">
                    <span class="label">Judul HKI</span>
                    <input type="text" name="judul" id="judulHki" oninput="autoDelete()" class="input-text" placeholder="Pemrograman Naive-Bayes"  value="{{$hki->judul}}"/>
                </div>
                <div class="input-box">
                    <span class="label">Status</span>
                    <input type="text" name="status" id="status" oninput="autoDelete()" class="input-text" placeholder=""  value="{{$hki->status}}" />
                </div>
                <div class="input-box">
                    <span class="label">Jenis</span>
                    <input type="text" name="jenis" id="status" oninput="autoDelete()" class="input-text" placeholder=""  value="{{$hki->jenis}}" />
                </div>
                <div class="input-box">
                    <span class="label">Lampiran</span>
                    <input type="file" name="lampiran" id="status" oninput="autoDelete()" class="input-text" placeholder="" />
                </div>
                <button type="submit" id="submit" class="btn" value="Submit" >Submit</button>
                <button type="button" id="cancel" class="btn" value="Cancel" onclick="cancelForm()">Cancel</button>
                <br>
                <br>
                <br>
            </form>
        </div>
        </div>
        <script>
            function toggleDropdown() {
                var dropdown = document.querySelector('.dropdown');
                dropdown.classList.toggle('dropdown-opened');
            };

            document.getElementById("cancel").addEventListener("click", function () {
                window.location.href = "{{route('hki.index')}}";
            });

            document.getElementById("submit").addEventListener("click", function() {
                var penelitian = document.getElementById("penelitian").value;
                var judulHki = document.getElementById("judulHki").value;
                var status = document.getElementById("status").value;
                var jenis = document.getElementById("jenis").value;
                
                updateData(penelitian, judulHki, status, jenis);
                window.history.back();
            });

            function updateData(penelitian, judulHki, status, jenis) {
                console.log("Updating data...");
                console.log("Penelitian:", penelitian);
                console.log("Judul HKI:", judulHki);
                console.log("Status:", status);
                console.log("Jenis:", jenis);
            };
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