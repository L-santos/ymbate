@extends('layouts.main')

@section('banner') 
    <strong>create a new page</strong>
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
            <form action="{{ route('page.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="slug">slug*:</label>
                    </div>
                    <div class="col-sm-9">
                        <input id="slug" type="text" name="slug" class="form-control" required>
                        <small id="slug" class="form-text text-muted">p/slug</small>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="title">title*:</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="description">description:</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" id="description" name="description" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="">type*:</label>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="type" id="typeRadio1" value="1" checked>
                            <label class="form-check-label" for="typeRadio1">public</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="type" id="typeRadio2" value="2" disabled>
                            <label class="form-check-label" for="typeRadio2">restricted</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="type" id="typeRadio3" value="3" disabled>
                            <label class="form-check-label" for="typeRadio3">private</label>
                        </div>
                        <input type="submit" class="btn btn-purple">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection