@extends('layouts.main')

@section('banner')
    @component('components._banner', ['page' => $page])
    @endcomponent
@endsection

@section('main')
<div class="row justify-content-center">
    <div class="col-md-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('thread.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="id">to r/*:</label>
                </div>
                <div class="col-sm-9">
                <input id="id" type="text" name="id" class="form-control" value="{{ $page->id }}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="title">title*:</label>
                </div>
                <div class="col-sm-9">
                    <input id="title" type="text" name="title" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="text">text:</label>
                </div>
                <div class="col-sm-9">
                    <textarea type="text" id="text" name="text" class="form-control">
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <input class="btn btn-purple" type="submit" value="Create">
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection