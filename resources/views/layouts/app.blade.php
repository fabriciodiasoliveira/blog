<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @if( !isset($post))
    @component('components.helpers.headers')@endcomponent
    @else
    @component('components.helpers.headers', compact('post'))@endcomponent
    @endif
</head>
<body>
    <meta charset="utf-8">
    <div class="row">
        <div class="col-md-12">
             <iframe width="100%" src="{{ url('/') }}/carrousel" title=""></iframe>
        </div>
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}"/> {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            {{--@if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif--}}
                        @else
                        @if(Auth::user()->tipo == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}">{{ __('Usuários') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('post.index') }}">{{ __('Postagens') }}</a>
                            </li>
                        @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <div class="row">
                <div class="col-md-12">
                   {{--  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5445885109165079"
                     crossorigin="anonymous"></script>
                    <!-- Bloquinhos -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-5445885109165079"
                         data-ad-slot="9977707349"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    @component('links')@endcomponent
                </div>
                <div class="col-md-10">
                    @yield('content')
                </div>
            </div>
        </main>
        <script src="{{ asset('js/global.end.js') }}" ></script>
    </div>
</body>
</html>
