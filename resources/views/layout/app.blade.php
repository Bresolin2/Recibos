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
<style>
    body {
        background-color: rgb(242, 255, 251);
    }
    
</style>

<body class="bg-gray">
    <div class="container mx-auto px-4 py-8 mt-3">
        @yield('content')
    </div>
</body>

</html>
