<html>
    <title>Login</title>
    <link rel="stylesheet" href="asset/css/login.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/icon/font/bootstrap-icons.css">
    <body>
        <div class="container">
            
        <div class="col-md-4 bg-white rounded py-4 px-4 login">
            <p class="fs-1 text-center"><i class=" bi bi-person-fill"></i></p>
            
            <p class="fs-4 text-center">Sign In</p>
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @endif
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <form action="/postlogin">
                <div class="mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Username">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan Password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary form-control ">Submit</button>
                </div>

            </form>
            Not Registered?, <a href="/register">  Register</a>
        </div>
        </div>
    </body>
</html>