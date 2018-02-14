<!doctype html>
<html>
<head>

    <title>{{ config( 'app.name' ) }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/app.css' ) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/all.css' ) }}">

</head>
<body>

<div class="flex-center position-ref full-height">

    @section('sidebar')
        <div class="top-right links">
            <a href="{{ route('home') }}">Home</a>
        </div>
    @show

    <div class="container">
        @yield('content')
    </div>

</div>
</body>
</html>