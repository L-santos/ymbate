<div class="card border-light mb-3">
    <div class="card-body">
        <p class="card-title small">
            <a href='{{ route('user.show', ['user' => $comment->user['username'] ]) }}' >
                {{ '@'.$comment->user['username'] }}
            </a>
            {{ Carbon\Carbon::now()->diffInMinutes($comment->created_at) . " " .
                __('page.minutes') . " " . __('page.ago') }} 
                <span>|</span>
            {{ $comment->points . " " . __('page.points') }}
        </p>
        <p class="card-text">
            {{ $comment->text }}
        </p>
    </div>
</div>