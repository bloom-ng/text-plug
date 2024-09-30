<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('import-users') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="user_data" accept=".csv">
        <button type="submit">Import Users</button>
    </form>

    <form method="POST" action="{{ route('verify-users') }}" enctype="multipart/form-data">
        @csrf
        name: <input type="text" name="name">
        {{-- <input type="file" name="user_data" accept=".csv"> --}}
        <button type="submit">Import Users</button>
    </form>

    <form method="POST" action="{{ route('credit-users') }}" enctype="multipart/form-data">
        @csrf
        name: <input type="text" name="name">
        {{-- <input type="file" name="user_data" accept=".csv"> --}}
        <button type="submit">Credit Users</button>
    </form>
</body>

</html>
