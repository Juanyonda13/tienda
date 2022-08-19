@extends('Layouts.home')
@section('content')
@include('sweetalert::alert')
<section class="col-12 d-flex justify-content-center" style="height: 100vh;">
    <form action="{{route('createCategoria')}}" method="POST" class="card w-50 col-sm-6 col-12 mt-3 shadow-lg" style="height: 110vh;" enctype="multipart/form-data">
        @csrf
        
        <div class="w-100 d-flex justify-content-center mt-2">
                 <h3 class="text-danger text-wrap">Registrar electrodomestico</h3>
        </div>
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-5">
            <input type="text" class="form-control w-50 rounded-5" name="nombreCategoria" placeholder="Nombre del producto">
            <label for="" class="form-label w-50 justify-content-center d-flex mt-2 text-danger">Nombre de la categoria</label>
        </div>
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-4">
            <button class="btn btn-danger w-50 justify-content-center d-flex rounded-5 mb-3">Guardar</button>
       </div> 
    </form>
</section>
@endsection