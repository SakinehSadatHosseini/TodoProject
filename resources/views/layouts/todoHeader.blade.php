@extends('layouts/HeaderFooter')
@section('second_header')

<div id="header2" class="row">
    <nav class="navbar  navbar-light bg-light navbar-expand-lg" style=" min-height:80px">
        <div class="container">
            <a class="navbar-brand fs-6" href="#">{{__('translate.todoManagement')}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                            href="{{route('todos.home')}}">{{__('translate.remainedTodo')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('todos.done')}}">{{__('translate.doneTodo')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('todos.delete')}}">{{__('translate.deletedTodo')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('todo.create')}}">{{__('translate.newTodo')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="categoriesNavbar" class="row">
    <nav class="navbar small navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand fs-6" href="#">{{__('translate.categories')}}</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($categories as $category)
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('todos.category',['category_id'=> $category->id])}}"
                            id="navbarDropdown" role="button" aria-expanded="false">
                            @php echo $category->title @endphp
                        </a>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </nav>
</div>

@yield('content')
@endsection