<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Mansion SAS</title>
</head>
<body>
    <header class="col-sm-12 border shadow-lg  d-flex justify-content-center">
           <nav class="d-flex w-75 m-2 align-items-center" style="height: 10vh">
                 <div class="col d-flex justify-content-center mt-2">
                      <a href="{{url('http://127.0.0.1:8000')}}" class="nav-link  d-flex justify-content-center ">
                        <span class="bi bi-house-fill text-danger mx-1 fs-2"></span>   
                        <div class="d-flex flex-column">
                              <p class="fs-2 d-flex m-0 text-dark">Mansion</p>
                              <p class="fs-7 text-dark">Electroedomesticos </p>
                        </div>
                      </a>
                 </div>
                 <div class="col h-50">
                        <button class="btn btn-danger bi bi-list h-100">
                           NUESTRAS CATEGRIAS
                        </button>
                 </div>
                 <div class="col h-50">
                       <input type="text" class="form-control w-75 h-100" placeholder="Buscar">
                 </div>
           </nav>
    </header>
    <section class="col-12">
        @yield('content')
    </section>
</body>
</html>