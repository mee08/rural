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
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
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

  {{-- Image --}}
  <div class="logo">
    <a href="{{ route('top') }}">
     <img src="{{ asset('img/logo.png') }}" class="d-block mx-auto">
    </a>
  </div>

  {{-- Menu Bar --}}
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNav4">

      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">リンク1</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">リンク2</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">リンク3</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">リンク4</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link disabled" href="#">リンク5</a>
        </li>
      </ul>
    </div>
  </nav>



{{-- <main class="py-4">
@yield('content')
</main> --}}
