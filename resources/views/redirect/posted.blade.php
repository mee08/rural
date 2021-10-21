@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1 class="display-3">投稿完了しました。</h1>
    <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
    <hr>
    <p>
      Having trouble? <a href="">Contact us</a>
    </p>
    <p class="lead">
      <a class="btn btn-primary btn-sm" href="{{route("top")}}" role="button">Continue to homepage</a>
    </p>
  </div>

@endsection
