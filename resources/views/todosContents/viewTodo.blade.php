@extends('layouts\HeaderFooter')
@section('content')
<div class="row" style="margin-top: 20px;">
    <form class="row justify-content-center" method="post" action="{{route('todo.doneDelete') }}">
        @csrf
        <input type="hidden" name="id" value="{{$todo->id}}" />
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">{{__('translate.title')}}</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="title" value="{{$todo->title}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="category" class="col-sm-2 col-form-label">{{__('translate.category')}}</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="category"
                    value="{{$todo->category_title}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">{{__('translate.description')}}</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="description"
                    value="{{$todo->description}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="created_at" class="col-sm-2 col-form-label">{{__('translate.created_at')}}</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="created_at"
                    value="{{$todo->created_at}}">
            </div>
        </div>

        <div class="row">
            <div class="col-auto">
                @if ($todo->delete_status==0)

                <button type="submit" class="btn btn-success" name="done">
                    @if (!$todo->done_at)
                    {{__('translate.done')}}
                    @else
                    {{__('translate.notDone')}}
                    @endif
                </button>

                <button type="submit" class="btn btn-danger" name="delete">
                    {{__('translate.delete')}}
                </button>
                @else
                <button type="submit" class="btn btn-danger" name="delete">
                    {{__('translate.undelete')}}
                </button>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection