<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible show fade  mt-85">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                <span>&times;</span>
                </button>
                {{ $message }}
            </div>
        </div>                    
    @endif
</body>
</html>