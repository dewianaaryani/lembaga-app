<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Lembaga Penelitian</title>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #CFBCD9;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff; 
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            width: 300px;
        }

        .login-container img {
            width: 110px; 
			height: auto;
			margin-bottom: 17px;
            position: relative;
            right: 19px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #504099;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="login-container">
    <img src="assets/img/gunadarma-logo.png" alt="Logo"> 
        <form  method="POST" action="{{ route('login') }}">
            @csrf
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
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Masukan username" required>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Masukan Password" required>
			<button type="submit">Login</button>
		</form>
</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
