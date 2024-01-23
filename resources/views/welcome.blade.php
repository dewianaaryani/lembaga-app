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
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            body {
                background-image: url('assets/img/bg_homelog.png');
                background-size: cover;    
                background-repeat: no-repeat;
                text-shadow: 0px 3px 4px #00000080;  
            }
            body::before {
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background-color: #763997e8; 
                opacity: 1.0; 
            }
            .con1 {
                position: relative;
                max-width: 1000px;
                top: 300px;
                left: 100px;
            }
            .con2 {
                width: 150px;
                height: 50px;
                position: relative;
                background-color: #76399700;
            }
            img {
                width: 190px; 
                height: auto; 
                left: 88px; 
                top: 57px; 
                position: absolute;
                float: left;
                filter: drop-shadow(5px 5px 10px #00000080);
            }
            .ph3-1 {
                width: 1106px; 
                height: 144px; 
                position: absolute; 
                color: white; 
                font-size: 48px; 
                font-family: "Poppins", sans-serif;
            }
            .ph4-1 {
                left: 256px; 
                top: 83px; 
                position: absolute; 
                color: #E3AFFF; 
                font-size: 32px; 
                font-family: "Poppins", sans-serif;
                float: right;
            }
            p {
                width: 1000px; 
                height: 108px; 
                top: 125px;
                position: absolute; 
                color: white; 
                font-size: 20px; 
                font-family: "Poppins", sans-serif;
            }
            .btn {
                margin-top: 210px;
                z-index: 1;
            }
            .hm-log1 {
                max-width: 200px;
                cursor: pointer;
            }
            .span1 {
                font-size: 21px;
                position: relative;
                bottom: 7px;
                margin-right: 3px;
            }
            .span2 {
                color: #FBB80B;
            }
            strong {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="container-fluid px-4">
                <div class="hm-log1" onclick="window.location.href='landing_page.html'">
                    <img src="assets/img/gunadarma-logo.png" alt="">
                    <h4 class="ph4-1">Lembaga Penelitian <br><span class="span1">U<span class="span2">G</span></span>University</h4>
                </div>
                <div class="con1">
                    <h3 class="ph3-1">Selamat Datang Di <br>Lembaga Penelitian Universitas Gunadarma</h3>

                    <p>
                        Aplikasi berbasis Website ini memberikan kemudahan bagi para peneliti di Universitas Gunadarma dalam 
                        mengelola, mengubah, dan menyusun laporan penelitian serta hasil-hasil penelitian hibah yang mereka peroleh.
                    </p>
                    
                    <button type="button" class="btn btn-outline-basic con2" onclick="window.location.href='/login'"><strong>Login</strong></button>
                </div>
            </div>
        </main>
    </body>
</html> 

