@extends('Layouts.home')
@section('content')
@include('sweetalert::alert')
<section class="col-12 d-flex justify-content-center" style="height: 100vh;">
    <form action="{{route('createelectrodomestico')}}" method="POST" class="card w-50 col-sm-6 col-12 mt-3 shadow-lg" style="height: 110vh;" enctype="multipart/form-data">
        @csrf
        
        <div class="w-100 d-flex justify-content-center mt-2">
                 <h3 class="text-danger text-wrap">subir electrodomestico a la tienda</h3>
        </div>
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-5">
            <select type="select" class="form-select w-50 rounded-5" name="detalle_producto_id" placeholder="Nombre del producto">
                <option value=""selected>Producto al seleccionar</option>
                @foreach ($detalle as $d)
                    <option value="{{$d->id}}">{{$d->nombreProducto}}</option>
                @endforeach
            </select>
            <label for="" class="form-label w-50 justify-content-center d-flex mt-2 text-danger">Nombre del producto deseado</label>
        </div>

        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-5">
            <select type="select" class="form-select w-50 rounded-5" name="categoriaProdcuto_id" placeholder="Nombre del producto">
                <option value=""selected>Producto al seleccionar</option>
                @foreach ($categoria as $c)
                    <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
                @endforeach
            </select>
            <label for="" class="form-label w-50 justify-content-center d-flex mt-2 text-danger">categorias</label>
        </div>

        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-5">
            <select type="select" class="form-select w-50 rounded-5" name="provedorProducto_id" placeholder="Nombre del producto">
                <option value=""selected>Producto al seleccionar</option>
                @foreach ($provedor as $p)
                    <option value="{{$p->id}}">{{$p->nombreProvedor}}</option>
                @endforeach
            </select>
            <label for="" class="form-label w-50 justify-content-center d-flex mt-2 text-danger">proveedor</label>
        </div>
        <div class="w-100 d-flex justify-content-center flex-column align-items-center mt-4">
            <button class="btn btn-danger w-50 justify-content-center d-flex rounded-5 mb-3">Guardar</button>
       </div> 
    </form>
</section>
@endsection