<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="{{ asset('vendor/jQuery-3.6.0/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>

    <meta name="csrf-token" content="{{ Session::token() }}">


    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ url('../images/favicon.ico') }}" type="image/png">
</head>

<body class="bg-gray">
    <div class="container mx-auto px-4 py-8">
        <form action="{{route('logout')}}" method="POST">
            @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
        @yield('content')
    </div>
</body>

</html>
