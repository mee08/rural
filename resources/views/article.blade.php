@extends('layouts.base')
@section('title','トップページ')
@section('content')

<div class="container mt-4 mb-4">
  <div class="card mb-4">
    <div class="card-body">
        <h3 class="card-title">{{$article->title}}</h3>
        <p class="card-text"><small class="text-muted">管理者 | {{date("Y/m/d",strtotime($article->created_at))}}</small></p>
    </div>
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <p class="h5">
      {!!nl2br($article->body)!!}
      こんにちは
    </p>
</div>

@endsection
