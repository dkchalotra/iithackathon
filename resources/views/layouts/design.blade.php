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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @show
    </head>
    <body>
        <div class="row" style="height: 18vh">
            <div class="col-2">
                <img src="images\iitjammu.jpg" alt="logo" style="height: 7pc;width: 8pc;border-radius: 50%;margin: 4% 3% 0% 3%">
            </div>

            <div class="col-8">
                <h3 class="text-center" style="margin-top: 2%">Indian Institute Of Technology</h3>
                <p class="text-center">Jammu,Jakti(Jammu Kashmir)</p>
            </div>

            <div class="col-2">                
                <div class="social_media" style="margin-top:10%;margin-left:2%;font-size: 23pt">                    
                    <a href="https://facebook.com" target="_blank" class="icoFacebook" title="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com" target="_blank" class="icoTwitter" title="Twitter"> <i class="fab fa-twitter"></i></a>
                    <a href="https://www.google.com" target="_blank" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a>
                    <a href="https://linkedin.com" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a>
                </div>
            </div>
        </div>
       
        <div class="text-center" style="background-color:#bfbfbf;color:#000000;font-size:16pt;font-weight:100;letter-spacing:0.2em;height:5vh;">
            @yield('title', 'Admin Panel')
            <a class="btn btn-sm btn-secondary" style="float:right;letter-spacing:0; margin-right:5px; margin-top:4px;" href="/logout">Logout</a>
        </div>
        <div class="container-fluid" style="padding:0;">
            <div class="row">
                <div class="col-3 p-0">
                        <div class="left-pane" style="height:77vh">
                                <ul class="pane-navigation">
                                    <li><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                    <li><a href="/meals"><i class="fas fa-utensils"></i> Meals</a></li>
                                    <li><a href="/student"><i class="fas fa-user-graduate"></i> Students</a></li>
                                    <li><a href="/meal-menu"><i class="fas fa-bars"></i> Meal Menu</a></li>
                                </ul>
                        </div>
                </div>
                <div class="col-9">
                        <div class="right-pane" style="height:77vh">
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
