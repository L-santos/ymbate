@extends('layouts.main')

@section('banner')
    @component('components._banner', ['page' => $page])
    @endcomponent
@endsection
@section('main')
    <div class="row">
        <div class="col-md-3 order-md-last">
            <a href="{{ route('thread.create', ['page' => $page ]) }}" class="btn btn-purple btn-sm">New Thread</a>
            <h5>About</h5> 
            <p> {{ $page->description }} </p>
        </div>
        <div class="col-md-9">
            @foreach($page->threads as $thread)
                @component('components._thread', ['thread' => $thread])
                @endcomponent
            @endforeach
        </div>
    </div>
@endsection