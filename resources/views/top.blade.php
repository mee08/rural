@extends('layouts.base')
@section('title','トップページ')
@section('contents')


<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach ($posts as $post)


        <div class="col-lg-4">
            <div class="card mb-4 shadow-sm">
              <img src="{{ asset('storage/' . $post->img) }}" class="bd-placeholder-img card-img-top" width="100%" height="180">
              <div class="card-body">
                <p class="card-text">{{$post->title}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button onclick="location.href='{{ route('detail', $post->id) }}'" type="button" class="btn btn-outline-secondary">READ MORE</button>
                  </div>
                  <small class="text-muted">{{$post->created_at}}</small>
                </div>
              </div>
            </div>
          </div>

        @endforeach

      </div>
      <div class="d-flex justify-content-end">
        {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>

@endsection
