@extends('layouts.main')

@section('banner')
    <h4>My Pages</h4>
@endsection

@section('main')
    <ul class="list-group">
    @foreach($pages as $page)
        <li class="list-group-item">
            <a href="">{{ $page->id }}</a>
            <span>{{ $page->title }}</span>
        </li>
    @endforeach
    </ul>
@endsection