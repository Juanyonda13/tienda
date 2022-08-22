<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @include('sweetalert::alert')
    <div class="container d-flex col-12 justify-content-center align-items-center" style="height: 100vh">
           <div class="card shadow-lg d-flex  p-5 col-12 col-lg-5 col-xl-7" style="">
                <form action="{{route('loginStore')}}" class="" method="POST">
                    @csrf
                    <div class="w-100 d-flex text-wrap justify-content-center mt-4">
                        <h3 class="fs-3 text-danger text-break">Login</h3>
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
                        <button type="submit" class="form-control w-75 rounded-5 mt-4 btn btn-danger fs-5">Iniciar session</button>
                     </div>
                     <div class="w-100 d-flex text-wrap justify-content-center align-items-center flex-column mt-2 text-break">
                         <a class=" nav-link text-danger" href="{{route('register')}}">no tienes cuenta? Registrate</a>
                     </div>

                </form>
            </div>
        </div>
    </body>
</html>