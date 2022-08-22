@extends('Layouts.home')
@section('content')
@include('sweetalert::alert')
<div class="col-12"> 
    @foreach($h as $r)
            <div class="col-12 p-2 d-flex justify-content-center">
                    <img src="{{$r->imgProducto}}" alt="" >
            </div>
            <div class="col-12 d-flex justify-content-center mt-2">
                <h3 class="text-danger">nombre:</h3>
                <h3>{{$r->nombreProducto}}</h3>
            </div>
            <div class="col-12 d-flex justify-content-center mt-2">
                <h3 class="text-danger">precio:</h3>
                <h3>{{$r->valorUnitarioProducto}}</h3>
            </div>
            <div class="col-12 d-flex justify-content-center mt-2">
                <h3 class="text-danger">proveedor:</h3>
                <h3>{{$r->nombreProvedor}}</h3>
            </div>
            <form action="{{route('compra')}}" method="POST">
                @csrf
                <div class="col-12 d-flex justify-content-center mt-2">
                    <button class="btn btn-danger" name="id" value="{{$r->id}}">comprar</button>
                </div>
            </form>

    @endforeach


</div>
@endsection