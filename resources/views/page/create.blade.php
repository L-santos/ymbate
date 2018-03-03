@extends('layouts.main')

@section('banner') 
    <small>create a new subraddit</small>
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
                        <label for="id">title*:</label>
                    </div>
                    <div class="col-sm-9">
                        <input id="id" type="text" name="id" class="form-control" required>
                        <small id="id" class="form-text text-muted">r/title</small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="title">name*:</label>
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
                        <label for="">Type*:</label>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="type" id="typeRadio1" value="public" checked>
                            <label class="form-check-label" for="typeRadio1">public</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="type" id="typeRadio2" value="restricted">
                            <label class="form-check-label" for="typeRadio2">restricted</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="type" id="typeRadio3" value="private">
                            <label class="form-check-label" for="typeRadio3">private</label>
                        </div>
                        <input type="submit" class="btn btn-purple">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection