<html>
    <title>Login</title>
    <link rel="stylesheet" href="asset/css/login.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <body>
        <div class="container">
            
        <div class="col-md-4 bg-white rounded py-4 px-4 login">
            <p class="fs-4 text-center">Register</p>
            <form action="/postregister">
                {{csrf_field()}}
                <div class="mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Username" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email" value="{{old('email')}}">
                </div>
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <div class="mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan Password" value="{{old('password')}}">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary form-control ">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </body>
</html>