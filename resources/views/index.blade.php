@extends('layouts.main')

@section('main')
<div id="scroll">
    @foreach($threads as $thread)
        @component('components._thread', ['thread' => $thread])
        @endcomponent
    @endforeach
    <div style="display: none">
        {{ $threads->links() }}
    </div>
</div>
@endsection

