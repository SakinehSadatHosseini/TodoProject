@extends('layouts\HeaderFooter')
@section('content')
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
    <form class="row " method="post" action="{{route('todo.update') }}">
        @csrf
        <input type="hidden" name="id" value="{{$todo->id}}" />
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-xs-3 col-form-label">{{__('translate.title')}}</label>
            <div class="col-sm-10 col-xs-9">
                <input type="text" class="form-control" name="title" id="title" placeholder="{{__('translate.title')}}"
                    value="{{$todo->title}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="category" class="col-sm-2 col-xs-3 col-form-label">{{__('translate.category')}}</label>
            <div class="col-sm-10 col-xs-9">
                <select class="form-select" aria-label="category select" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" @php if( $todo->category_id == $category->id) {echo
                        'selected';}@endphp>
                        @php echo $category->title @endphp
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-xs-3 col-form-label">{{__('translate.description')}}</label>
            <div class="col-sm-10 col-xs-9">
                <input type="text" class="form-control" name="description" id="description"
                    value="{{$todo->description}}">
            </div>
        </div>

        <div class="mb-3 row justify-content-center">
            <button type="submit" class="btn btn-primary col-sm-4">{{__('translate.update')}}</button>
        </div>
    </form>
</div>
@endsection