@extends('layouts.base')
@section('title','地方移住')
@section('content')

    {{-- Image --}}
    <div class="logo">
        <img onclick="location.href='{{ route('top') }}'" src="{{ asset('img/logo.png') }}" class="d-block mx-auto" style="cursor:pointer">
    </div>

     <div class="container">
       <div class="row">
         <div class="col-auto mx-auto">
           <a class="text-dark" href="{{ route('main.main1') }}">地方移住</a>
         </div>
         <div class="col-auto mx-auto">
           <a class="text-dark" href="{{ route('main.main2') }}">地域おこし協力隊</a>
         </div>
         <div class="col-auto mx-auto">
           <a class="text-dark" href="{{ route('main.main3') }}">働きかた</a>
         </div>
         <div class="col-auto mx-auto">
           <a class="text-dark" href="{{ route('main.main4') }}">イベント/セミナー</a>
         </div>
       </div>
     </div>


<div class="container">
    <div class="text-center m-3">
        <h3>Local migration</h3>
        <div class="text-muted">地方移住に関する情報、移住への手助け</div>
     </div>
        <h5 class="border-top text-muted" style="padding-top:30px">
            近年地方への関心が高まるに連れて、実際に移住する方が増えています。「興味はあるけど一歩が踏み出せない...。」そんな方に向けて、移住経験者の「リアルな声」を移住への足掛かりにして下さい。
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
