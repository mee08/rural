@extends('layouts.base')
@section('title','ニュース記事画面')
@section('content')

<div class="container mt-4 mb-4">
  <div class="card mb-4">
    <div class="card-body">
        <h3 class="card-title">{{$article->title}}</h3>
        <p class="card-text"><small class="text-muted">管理者 | {{date("Y/m/d",strtotime($article->created_at))}}</small></p>
    </div>
  </div>
  <p class="h5">
      {!!nl2br($article->body)!!}
    </p>
</div>

@endsection
