@extends('layouts.base')

@section('content')
<div>
    @auth
    <ul class="nav small mb-3">
        <li class="nav-item mr-0">
            <a href="" class="nav-link active">@lang('page.my_pages')</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link pr-0">p/test</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link pr-0">p/test</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link pr-0">p/test</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link pr-0">p/test</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link pr-0">p/test</a>
        </li>
        <li class="nav-item">
                <a href="" class="nav-link pr-0">p/test</a>
        </li>
    </ul>
    @endauth
    @guest
        <div class="m-5"></div>
    @endauth
    <div class="row">
        <div class="col-sm-6 col-md-10">
            <div>
                @section('banner')
                    <h4>Feed</h4>
                @show
            </div>
            <a href="#" class="badge badge-warning">Hot</a>
            <a href="#" class="badge badge-danger">Popular</a>
            <a href="#" class="badge badge-primary">New</a>      
            <a href="#" class="badge badge-dark">Controversal</a>              
        </div>
        <div class="col small text-sm-right mt-2">
            @guest
                <a class="btn btn-purple btn-sm"href="/login">@lang('auth.login')</a>
            @endguest

            @auth
                <div class="dropdown">
                    <button class="dropdown-toggle btn btn-purple btn-sm" type="button" id="dropdownMenuButton" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()['username'] }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user-dropdown">
                        <a href="{{ route('user.pages') }}"
                            class="dropdown-item small">@lang('page.my_pages')</a>
                        <a href="{{route('page.create')}}" class="dropdown-item small">@lang('page.create')</a>
                        <a class="dropdown-item small" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            @lang('auth.logout')
                        </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>                    
                    </div>
                </div>
            @endauth    
        </div>
        <h4>
    </div>
    <hr>
</div>
<div>
    @yield('main')
</div>
@endsection