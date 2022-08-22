<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Mansion SAS</title>
</head>
<body>
    <header class="col-sm-12 border shadow-lg  d-flex justify-content-center">
           <nav class="d-flex w-100 m-1 align-items-center flex-wrap" style="">
                 <div class="col-12 d-flex justify-content-start mt-2 col-xl text-break ">
                      <a href="{{url('/home')}}" class="nav-link  d-flex justify-content-center ">
                        <span class="bi bi-house-fill text-danger mx-1 fs-2"></span>   
                        <div class="d-flex flex-column ">
                              <p class="fs-4 d-flex m-0 text-dark">Mansion</p>
                              <p class="fs-7 text-dark">Electroedomesticos </p>
                        </div>
                      </a>
                 </div>
                 <div class="col p-3 text-break col-sm col-12">
                        <button class="btn btn-danger bi bi-list">
                           NUESTRAS CATEGRIAS
                        </button>
                 </div>
                 <div class="col  input-group d-flex flex-row col-sm col-12">
                       <input type="text" class="form-control  h-100 d-flex" placeholder="Buscar">
                       <span class="input-group-text bg-danger text-white bi bi-search  d-flex"></span>
                 </div>
                 <div class="col d-flex flex-row fs-4 justify-content-end align-items-center text-break gap-2">
                          <a class="d-flex nav-link text-danger" href="{{route('recibo')}}">{{Auth()->user()->nombreCliente}}</a>
                          <span class="bi bi-person-circle text-danger"></span>
                 </div>
                <div class="col justify-content-end d-flex">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" btn nav-link text-danger d-flex justify-content-end">
                        <span class="bi bi-door-closed-fill fs-2"></span>
                    </button>
                </form>

                 </div>
           </nav>
    </header>
    <section class="col-12">
        @yield('content')
    </section>
</body>
</html>