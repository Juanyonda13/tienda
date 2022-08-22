<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    @include('sweetalert::alert')
    <div class="container d-flex col-12 justify-content-center align-items-center" style="height: 100vh">
           <div class="card shadow-lg d-flex  p-5 col-12 col-lg-6  col-xl-9" style="">
                <form action="{{route('registerStore')}}" class="" method="POST">
                    @csrf
                    <div class="w-100 d-flex text-wrap justify-content-center mt-4">
                        <h3 class="fs-3 text-danger text-break">Registrar usuario</h3>
                    </div>
                    <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column">
                         <input type="text" class="form-control w-75 rounded-4 mt-2" name="nombreCliente">
                         <label class="text-danger text-break fs-5">nombre</label>
                    </div>
                    <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column">
                        <input type="number" class="form-control w-75 rounded-4 mt-2" name="cedula">
                        <label class="text-danger text-break fs-5">cedula</label>
                   </div>
                   <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column">
                    <input type="text" class="form-control w-75 rounded-5 mt-4" name="apellidos">
                    <label class="text-danger text-break fs-5">apellidos</label>
                   </div>

                   <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column">
                    <input type="number" class="form-control w-75 rounded-5 mt-4" name="telefono">
                    <label class="text-danger text-break fs-5">telefono</label>
                   </div>
                   <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column">
                    <input type="text" class="form-control w-75 rounded-5 mt-4" name="direccion">
                    <label class="text-danger text-break fs-5">direccion</label>
                  </div>
                  <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column">
                    <input type="text" class="form-control w-75 rounded-5 mt-4" name="email">
                    <label class="text-danger text-break fs-5">email</label>
                 </div>
                 <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column">
                    <input type="password" class="form-control w-75 rounded-5 mt-4" name="password">
                    <label class="text-danger text-break fs-5">password</label>
                 </div>
                 <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column">
                    <select type="select" class="form-select w-75 rounded-5 mt-4" name="tipoDocumento_id">
                        <option value=""selected>tipo de documento</option>
                        @foreach($documentos as $d)
                            <option value="{{$d->id}}">{{$d->tipoDocumento}}</option>
                        @endforeach
                    </select>
                    <label class="text-danger text-break fs-5">tipo de documento de identidad</label>
                 </div>
                 <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column">
                    <button type="submit" class="form-control w-75 rounded-5 mt-4 btn btn-danger fs-5">Registrarme</button>
                 </div>
                 <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column mt-2 text-break">
                    <a class=" nav-link text-danger" href="{{route('login')}}">Ya tientes una cuenta? Inicia session</a>
                </div>
                </form>
           </div>
    </div>
</body>
</html>