@extends('Layouts.home')
@section('content')
@include('sweetalert::alert')
<head>        
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title></title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<div class="col-12">
    <section class="w-100 d-flex justify-content-start border pt-5 gap-3">
      <a class="fs-5 nav-link  border-bottom border-danger m-2 text-dark" href="#">LOS MAS VENDIDOS</a>
      <p class="fs-5 disabled mt-3">REMCOMENDADOS</p>
    </section>
    <section class="col-12">
      @foreach($h as $r)
      <section class="py-5">
        <div class="container px-4 px-lg-3 mt-5">
            <div class="row gx-9 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card shadow-lg h-100">
                            <!-- Product image-->
                            <img class="card-img-top bg-dark" src="{{asset($r->imgProducto)}}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$r->nombreProducto}}</h5>
                                    <!-- Product price-->
                                    ${{$r->valorUnitarioProducto}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
      </section>
      @endforeach
    </section>
    <section class="w-100 d-flex justify-content-center"><a href="{{route('verRegisterProducto')}}">crear productos</a> </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
@endsection