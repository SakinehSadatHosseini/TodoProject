@extends('layouts/HeaderFooter')
@section('second_header')
<div id="header2" class="row">
    <nav class="navbar  navbar-light bg-light navbar-expand-lg" style=" min-height:80px">
        <div class="container">
            <a class="navbar-brand " href="{{route('todos.home')}}">{{__('translate.categoryManagement')}} </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                            href="{{route('categories.home')}}">{{__('translate.usableCategories')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="{{route('categories.delete')}}">{{__('translate.deletedCategories')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.create')}}">{{__('translate.newCategory')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
@endsection
@yield('content')