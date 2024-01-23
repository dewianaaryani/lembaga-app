<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{route('lembaga.penelitian.store')}}" method="post" enctype="multipart/form-data">
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
        <input type="text" name="nidn">
        <br>
        <label for="">no_penugasan</label>
        <input type="text" name="no_penugasan">
        <br>
        <label for="">tk_penugasan</label>
        <input type="date" name="tk_penugasan">
        <br>
        <label for="">judul</label>
        <input type="text" name="judul">
        <br>
        <label for="">dana</label>
        <input type="text" name="dana">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>