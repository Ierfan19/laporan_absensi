@extends('layouts.main')
@section('container')
    <div class="row know bg-white text-white rounded py-3 px-1 mb-4">
        <div class="col-md-6">
            <div class="d-flex flex-row">
                
        <div class="col-md-6 known">
            <div class="bg-primary rounded">
                
            <h1>{{$listuser->count()}} <i class="bi bi-people-fill"></i></h1>
            <hr>
            <p>User<un/p>
            </div>
        </div>
        <div class="col-md-6 known">
            <div class="bg-success rounded">
                
            <h1>3653 <i class="bi bi-cart"></i></h1>
            <hr>
            <p>Produk</p>
            </div>
        </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-row">
                
        <div class="col-md-6 known">
            <div class=" bg-danger rounded">
                
            <h1>{{$listabsen->count()}} <i class="bi bi-chat"></i></h1>
            <hr>
            <p>Absen</p>
            </div>
        </div>
        <div class="col-md-6 known">
            <div class=" bg-warning rounded">
                
            <h1>{{$listsiswa->count()}} <i class="bi bi-person-fill"></i></h1>
            <hr>
            <p>SIswa</p>
            </div>
        </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row bg-white rounded sosial py-3 px-1">
        <div class="col-md-4">
            <div class="border-primary rounded">
                <div class="bg-primary text-white text-center py-4 px-3 rounded">
                    <i class="fab fa-facebook"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            
            <div class="border-danger rounded">
                <div class="bg-danger text-white text-center py-4 px-3 rounded">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            
            <div class="border-primary rounded">
                <div class="bg-primary text-white text-center py-4 px-3 rounded">
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
@endsection