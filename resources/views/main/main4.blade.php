@extends('layouts.base')
@section('title','トップページ')
@section('contents')

    <div class="container">
        <div class="text-center m-3">
            <h3>Events/Seminars</h3>
            <div class="text-muted">地方イベント、専門家の講演会</div>
         </div>
            <h5 class="border-top text-muted" style="padding-top:30px">
                まずは行動!お手軽に参加できるイベントでまずは「地域に触れること」から始めてみませんか？または専門家の意見を聞いて地域の未来について考えてみませんか？
            </h5>
      <div class="row mt-4">
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
