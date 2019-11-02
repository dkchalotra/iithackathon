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
        <div class="text-center" style="background-color:#888888;color:#FFFFFF;font-size:16pt;font-weight:100;letter-spacing:0.2em;height:5vh;">Admin Panel</div>
        <div class="container-fluid" style="padding:0;">
            <div class="row">
                <div class="col-3 p-0">
                        <div class="left-pane">
                                <ul class="pane-navigation">
                                    <li><a href="/dashboard">Dashboard</a></li>
                                    <li><a href="/meals">Meals</a></li>
                                    <li><a href="/students">Students</a></li>
                                    <li><a href="/meal-menu">Meal Menu</a></li>
                                </ul>
                        </div>
                </div>
                <div class="col-9">
                        <div class="right-pane">
                                @section('content')
                                @show
                        </div>
                </div>
            </div>
        </div>
        @section('foot_includes')
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        @show
    </body>
</html>
