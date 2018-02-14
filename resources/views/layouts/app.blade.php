<!doctype html>
<html>
<head>

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/app.css' ) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/all.css' ) }}">

</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="container">
        @yield('content')
    </div>
</div>
</body>
</html>