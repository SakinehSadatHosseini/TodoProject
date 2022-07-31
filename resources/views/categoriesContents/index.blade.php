@extends('layouts\categoryHeader')
@section('second_header')
@parent
<div class="row" style="margin-top: 20px;">
    <div class="row">
        @foreach ($categories as $category)
        <div class=" col-lg-4 col-md-6 col-sm-12 col-xs-12 p-1">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('category.delete') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$category->id}}" />
                        <h5 class="card-title">
                            @php echo $category->title @endphp
                        </h5>
                        <input class="btn btn-primary" type="submit" value="@php if ($category->delete_status == 0) {echo
                        __('translate.delete');} else {echo __('translate.undelete');}@endphp">
                        @if ($category->delete_status==0)
                        <a href="{{route('category.viewUpdate',['id'=> $category->id])}}"
                            class="btn btn-primary">{{__('translate.edit')}}</a>
                        @endif

                    </form>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>


@endsection