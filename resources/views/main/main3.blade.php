@extends('layouts.base')
@section('title','トップページ')
@section('contents')

    <div class="container">
        <div class="text-center m-3">
            <h3>Work style</h3>
            <div class="text-muted">地方での新しい働き方のヒント</div>
         </div>
            <h5 class="border-top text-muted" style="padding-top:30px">
                テクノロジーの進歩によるテレワークの普及や、働き方改革により都心部・地方関係なく働き方が変化しています。人や仕事の繋がり方が変化しつつあるからこそ、私たちに多くの選択肢を与えています。
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
