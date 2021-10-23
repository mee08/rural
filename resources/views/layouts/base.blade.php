{{-- @foreach ($todos as $todo)
    {{$todo->body}}
@endforeach --}}

<!doctype html>
<html lang="ja">
  <head>
    <title>@yield('title')</title>
  <!-- 必要なメタタグ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- 自前CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body>

    @include('layouts.header')
    @yield('content')
    @include('solicitation')
    @include('layouts.footer')

  <!-- オプションのJavaScript -->
  <!-- 最初にjQuery、次にPopper.js、次にBootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
{{-- <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function(){
    @if( !Auth::check() )
    setTimeout(function(){
        $("#solicitation").fadeIn();
    },300);
    @endif
    $("#back_index").on("click", function(){
        $("#solicitation").hide();
    })
    });
</script> --}}
