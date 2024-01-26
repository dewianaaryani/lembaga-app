<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make User</title>
</head>
<body>
    <form action="{{route('lembaga.dosen.store')}}" method="post">
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
        <label for="">nidn</label>
        <input type="text" name="username" required>
        <br>
        <label for="">name</label>
        <input type="text" name="name" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>