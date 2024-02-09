@php
    use Illuminate\Support\Facades\Auth;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="/css/style.css">

   

    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mercatus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Главная</a>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('catalog') }}">Каталог</a>
                    </li>
                    @guest
                        <li class="nav-item d-flex">
                            <a class="nav-link active" aria-current="page" href="{{route('signUp')}}">Регистрация</a>
                            <a class="nav-link active" aria-current="page" href="{{route('signIn')}}">Авторизация</a>
                        </li>
                    @endguest
                    @auth
                        @if (Auth::user()->role_id == 2)
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('account') }}">Аккаунт</a>
                            </li>
                            
                        @endif
                        @if (Auth::user()->role_id == 1)
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('admin') }}"></a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/logout">Выход</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>


</body>

</html>
