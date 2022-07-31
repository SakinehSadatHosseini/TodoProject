<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.css')}}" type="text/css">
    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</head>

<body>
    <div class="container">
        <div id="header" class="row">
            <nav class="navbar  navbar-dark bg-dark navbar-expand-lg" style=" min-height:80px">
                <div class="container">
                    <a class="navbar-brand " href="{{route('todos.home')}}">{{__('translate.siteName')}} </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page"
                                    href="{{route('todos.home')}}">{{__('translate.todoManagement')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{route('categories.home')}}">{{__('translate.categoryManagement')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>







        @yield('second_header')
        <div id="footer" class="row"></div>
</body>

</html>