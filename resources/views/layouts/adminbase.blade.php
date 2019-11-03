<!Doctype html>
<html lang="en">
    <head>
        <title>@yield('page_title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @section('head_includes')
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/fontawesome.css">
            <link rel="stylesheet" href="css/default.css">
        @show
    </head>
    <body>
        <div class="text-center" style="background-color:#888888;color:#FFFFFF;font-size:16pt;font-weight:100;letter-spacing:0.2em;height:5vh;">
            Admin Panel
            <a class="btn btn-sm btn-secondary" style="float:right;letter-spacing:0;" href="/logout">Logout</a>
        </div>
        <div class="container-fluid" style="padding:0;">
            <div class="row">
                <div class="col-3 p-0">
                        <div class="left-pane">
                                <ul class="pane-navigation">
                                    <li><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                    <li><a href="/meals"><i class="fas fa-utensils"></i> Meals</a></li>
                                    <li><a href="/student"><i class="fas fa-user-graduate"></i> Student</a></li>
                                    <li><a href="/meal-menu"><i class="fas fa-bars"></i> Meal Menu</a></li>
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
        <script src="js/fontawesome.js"></script>
        @show
    </body>
</html>
