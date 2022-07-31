@extends('layouts\categoryHeader')
@section('second_header')
@parent

@if ($errors->all())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row justify-content-center" style="margin-top: 20px;">
    <form class="row " method="post" action="{{route('category.update') }}">
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}" />
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-xs-3 col-form-label">{{__('translate.title')}}</label>
            <div class="col-sm-10 col-xs-9">
                <input type="text" class="form-control" name="title" id="title" placeholder="{{__('translate.title')}}"
                    value="{{$category->title}}">
            </div>
        </div>

        <div class="mb-3 row justify-content-center">
            <button type="submit" class="btn btn-primary col-sm-4">{{__('translate.update')}}</button>
        </div>
    </form>
</div>
@endsection