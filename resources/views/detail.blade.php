@extends('layouts.base')
@section('title','トップページ')
@section('contents')

<div class="container mt-4 mb-4">
  <div class="card mb-4">
    <img src="{{ asset('storage/' . $post->img) }}" class="bd-placeholder-img card-img-top" width="100%" height="auto">
  </div>
  <div class="card mb-4">
    <div class="card-body">
        <h3 class="card-title">{{$post->title}}</h3>
        <p class="card-text"><small class="text-muted">{{$post->user->name}} | {{date("Y/m/d",strtotime($post->updated_at))}}</small></p>
    </div>
    {{-- <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div> --}}
  </div>
  <p class="h5">
      {!!nl2br($post->body)!!}
    </p>
</div>

@endsection
