@extends('Layouts.home')
@section('content')
@include('sweetalert::alert')
<section class="col-12 d-flex justify-content-center" style="height: 100vh;">
    <form action="{{route('createProducto')}}" method="POST" class="card w-50 col-sm-6 col-12 mt-3 shadow-lg" style="height: 110vh;" enctype="multipart/form-data">
        @csrf
        
        <div class="w-100 d-flex justify-content-center mt-2">
                 <h3 class="text-danger text-wrap">Registrar electrodomestico</h3>
        </div>
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-5">
            <input type="text" class="form-control w-50 rounded-5" name="nombreProducto" placeholder="Nombre del producto">
            <label for="" class="form-label w-50 justify-content-center d-flex mt-2 text-danger">Nombre del producto</label>
        </div>
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-4">
            <input type="file" class="form-control w-50 rounded-5" name="imgProducto" placeholder="img">
            <label for="" class="form-label w-50 justify-content-center d-flex mt-2 text-danger">Imagen producto</label>
        </div>
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-4">
            <textarea type="text" class="form-control w-50 rounded-3" name="descripcionProdcuto"placeholder="descripcion"></textarea>
            <label for="" class="form-label w-50 justify-content-center d-flex mt-2 text-danger">Descripcion producto</label>
        </div>
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-4">
            <input type="number" class="form-control w-50 rounded-5" name="valorUnitarioProducto" placeholder="precio">
            <label for="" class="form-label w-50 justify-content-center d-flex mt-2 text-danger">Valor unitario</label>
        </div>

        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-4">
            <input type="number" class="form-control w-50 rounded-5" name="iva" placeholder="iva%">
            <label for="" class="form-label w-50 justify-content-center d-flex mt-2 text-danger">iva</label>
        </div>

        

        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-4">
             <button class="btn btn-danger w-50 justify-content-center d-flex rounded-5 mb-3">Guardar</button>
        </div>
    </form>
</section>
@endsection