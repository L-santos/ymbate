 <div class="media mb-2">
    <img class="bg-purple" src="" alt="" style="width: 64px; height: 64px;">
    <p class="media-body ml-3">
        <a class="d-block link" href="#">{{ $thread->title }}</a>
        <a class="small" href="http://">{{ '@'.$thread->user['username'] }}</a> 
        <small>to</small> <a class="small" href="{{ route('page.show', ['page' => $thread->page ]) }}">#{{ $thread->page['id'] }}</a>        
        <a class="small" href="{{ route('thread.show', ['page' => $thread->page, 'thread' => $thread])}}">
            comments ({{ $thread->comments->count() }})
        </a>
    </p>
    {{ $slot }}
</div>
<hr>
