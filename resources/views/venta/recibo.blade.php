@extends('Layouts.home')
@section('content')
@include('sweetalert::alert')
<div class="col-12">
    @foreach($h as $r)
        <div class="card col-10 m-auto d-flex flex-column">
            <div class="d-flex flex-row gap-3">
                <div class="img-fluid "><img src="{{asset($r->imgProducto)}}" alt=""></div>
                <p class="fs-4 text-danger px-3">nombre: {{$r->nombreProducto}}</p>
                <p class="fs-4 text-danger">precio: {{$r->valorUnitarioProducto}}</p>
                <p class="fs-4 text-danger">codigo: {{$r->codigo}}</p>
            </div>

        </div>
    @endforeach
</div>
@endsection