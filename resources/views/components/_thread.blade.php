 <div class="media mb-2">
    <img class="bg-purple" src="" alt="" style="width: 64px; height: 64px;">
    <p class="media-body ml-3">
        <a class="d-block link font-weight-bold" href="{{ route('thread.show', ['page' => $thread->page, 'thread' => $thread ]) }}">{{ $thread->title }}</a>
        <small>        
            @lang('page.submitted_min', [
            'time' => Carbon\Carbon::now()->diffInMinutes($thread->created_at),
        ])</small>
        <a class="small" href="{{ route('user.show', ['user' => $thread->user['username'] ]) }}">{{ '@'.$thread->user['username'] }}</a> 
        <small>@lang('page.to')</small> <a class="small" href="{{ route('page.show', ['page' => $thread->page ]) }}">#{{ $thread->page['id'] }}</a>        
        <span class="d-block">
            <span class="small font-weight-bold">{{ $thread->points }} {{ __('page.points') }}</span>
            <a class="small font-weight-bold" href="{{ route('thread.show', ['page' => $thread->page, 'thread' => $thread])}}">
                    comments ({{ $thread->comments->count() }})

                </a>
            </span>
    </p>
    {{ $slot }}
</div>
<hr>
