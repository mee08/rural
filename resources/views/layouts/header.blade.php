{{-- Header Top --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand " href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <!-- この下の行に mr-auto クラスを付与するだけ -->
        <ul class="navbar-nav mr-auto">
        </ul>

        <ul class="navbar-nav">
          @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
          @else
           <li class="nav-item">
                <a class="nav-link" href="{{ route('post') }}">
                    {{ __('投稿') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('management') }}">
                        {{ __('マイページ') }}
                </a>
            </li>

            @if(Auth::id() == 1)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('management.news') }}">
                        {{ __('news') }}
                </a>
            </li>
            @endif

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
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


{{-- <main class="py-4">
@yield('content')
</main> --}}
