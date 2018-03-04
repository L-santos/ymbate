<span class="h4">
    <a href="{{ route('page.show', [ 'page' => $page ]) }}"><strong>{{ $page->title }}</strong></a>
</span>
<a onclick="user_subscribe(event, {{ $page }})" class="small badge badge-pill badge-secondary">
    @if($page->users->contains(auth()->user()))
        @lang('unsubscribe')
    @else
        @lang('subscribe')
    @endif
</a>
<p><small><em>1000 subscribers</em></small></p>
<span class="subscriber" hidden>@lang('subscribe')</span>
<span class="subscriber" hidden>@lang('unsubscribe')</span>