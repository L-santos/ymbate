@extends('layouts.main')

@section('banner')
    @component('components._banner', ['page' => $thread->page])
    @endcomponent
@endsection
@section('main')
    <div class="thread-content">
        <h4> {{ $thread->title }} </h4>
        <p> {{ $thread->text }} <p>
    </div>
    @foreach($thread->comments as $comment)
        <div class="comment">
            <p>{{ $comment->text  }}</p>
        </div>
    @endforeach
@endsection