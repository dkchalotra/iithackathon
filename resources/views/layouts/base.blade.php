<!Doctype html>
<html lang="en">
    <head>
        <title>@yield('page_title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @section('head_includes')
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/default.css">
        @show
    </head>
    <body>
        @section('content')
        @show
        @section('foot_includes')
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        @show
    </body>
</html>
