@extends('layouts.main')

@section('banner')
    @component('components._banner', ['page' => $thread->page])
    @endcomponent
@endsection
@section('main')
    <div class="card border-light border-0 mb-3">
        <div class="card-header">
            <h5 class="card-title mb-0 font-weight-bold"> {{ $thread->title }} </h5>
            <small>        
                @lang('page.submitted_min', [
                    'time' => Carbon\Carbon::now()->diffInMinutes($thread->created_at),
                ])
            </small>
            <a class="small" href="{{ route('user.show', ['user' => $thread->user['username'] ]) }}">{{ '@'.$thread->user['username'] }}</a> 
        </div>
        <div class="card-body">
            <p> {{ $thread->text }} <p>
            </div>
            <hr>
    </div>
    <div class="row m-3">
        <form class="col-md-6" action="">
            <div class="form-group">
                <textarea class="form-control form-control-sm" name="text" id="" cols="30" rows="10"style="height: 80px" disabled></textarea>
            </div>
            <input type="submit" class="btn btn-sm btn-purple" disabled>
        </form>
    </div>
    <di id="scroll">
        @foreach($thread->comments as $comment)
            @component('components._comment', ['comment' => $comment])
            @endcomponent
        @endforeach
    </div>
@endsection