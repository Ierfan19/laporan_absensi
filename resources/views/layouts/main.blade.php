<html>
    <title></title>
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/fontawesome/css/all.css">
    <link rel="stylesheet" href="/asset/icon/font/bootstrap-icons.css">
     <script src="/asset/js/jquery.js"></script>
    <body style="background-color:aliceblue;">
        <div class="wrapper-header shadow">
            <div class="header shadow">
                <div style="display: inline-flex;">
                    <button class="navbar-toggler btn text-white fs-4" data-bs-toggle="collapse" data-bs-target="#menu" aria-expanded="false" aria-controls="menu"><i class="fas fa-bars"></i></button>
                    <p class="fs-4 text-white" style="margin:3px 0 0 5px;">MyDashboard</p>
                </div>
                <div class="float-end text-white py-1" style="margin-right: 10px;">
                    <i class="fas fa-bell" style="font-size: 1.1em;" title="notifikasi"></i>
                    ||
                    <a href="/logout" style="color: #fff;" class="btn btn-outline-light">Log Out <i class="bi bi-box-arrow-right"></i></a>
                </div>
            </div>
        </div>
                <div class="wrapper-body">
                    
            <div class="row px-2">
                @include('layouts.menu')
                <div class="col-md-10">
                    <div class="px-3 py-4" style="margin-top: 50px;">
                     <p class="welcome text-white">Welcome To Dashboard, {{Auth()->user()->name}}!</p>
                   
                        @yield('container')
                    </div>
                </div>
            </div>
                </div>
                <script src="/asset/js/bootstrap.min.js"></script>
                <script>
                    function klik(){
                        $("#menu").fadeIn(3000);
                    }
                </script>
    </body>
</html>