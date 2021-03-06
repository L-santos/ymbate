@extends('layouts.main')

@section('banner')
    @component('components._banner', ['page' => $page])
    @endcomponent
@endsection
@section('main')
    <div class="row">
        <div class="col-md-3 order-md-last">
            <a href="{{ route('thread.create', ['page' => $page ]) }}" class="btn btn-purple btn-sm mb-3">New Thread</a>
            @if($page->description)
                <h5>@lang('page.about')</h5> 
                <p>{{ $page->description }}</p>
            @endif
        </div>
        <div id="scroll" class="col-md-9">
            @foreach($page->threads as $thread)
                @component('components._thread', ['thread' => $thread])
                @endcomponent
            @endforeach
        </div>
    </div>
@endsection