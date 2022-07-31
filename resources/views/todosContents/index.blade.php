@extends('layouts\HeaderFooter')
@section('content')
<div class="row" style="margin-top: 20px;">
    <div class="row">
        @foreach ($todos as $todo)
        <div class=" col-lg-4 col-md-6 col-sm-12 col-xs-12 p-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        @php echo $todo->title @endphp
                    </h5>
                    <p class="card-text">
                        @php echo $todo->description @endphp
                    </p>
                    <a href="{{route('todo.view',['id'=> $todo->id])}}"
                        class="btn btn-primary">{{__('translate.detail')}}</a>
                    @if ($todo->delete_status==0)
                    <a href="{{route('todo.viewUpdate',['id'=> $todo->id])}}"
                        class="btn btn-primary">{{__('translate.edit')}}</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>


@endsection