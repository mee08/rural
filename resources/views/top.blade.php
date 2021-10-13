@extends('layouts.base')
@section('title','トップページ')
@section('contents')


<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset('img/rural1.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="180">
            <div class="card-body">
              <p class="card-text">漫画＆アニメでポップに伝える「移住情報」 | 今週の気になる地方移住ニュースまとめ</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button onclick="location.href='{{ route('detail') }}'" type="button" class="btn btn-outline-secondary">READ MORE</button>
                </div>
                <small class="text-muted">2021/10/13</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset('img/rural2.jpeg') }}" class="bd-placeholder-img card-img-top" width="100%" height="180">
            <div class="card-body">
              <p class="card-text">【鹿児島県沖永良部島(和泊町）/地域おこし協力隊募集】求む！海の幸から島発ヒット商品を生むシーフードプロデューサー</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button onclick="location.href='{{ route('detail') }}'" type="button" class="btn btn-outline-secondary">READ MORE</button>
                </div>
                <small class="text-muted">2021/10/13</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset('img/rural3.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="180">
            <div class="card-body">
              <p class="card-text">福岡県宗像市】「３年経ったら関東へ帰る」と漏らしていた妻が、「このまま永住したい！」と言うように。【先輩移住者体験談】</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button onclick="location.href='{{ route('detail') }}'" type="button" class="btn btn-outline-secondary">READ MORE</button>
                </div>
                <small class="text-muted">2021/10/13</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset('img/rural5.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="180">
            <div class="card-body">
              <p class="card-text">あなたと似た人がきっといる！十人十色の移住体験記 | 今週の気になる地方移住ニュースまとめ</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button onclick="location.href='{{ route('detail') }}'" type="button" class="btn btn-outline-secondary">READ MORE</button>
                </div>
                <small class="text-muted">2021/10/13</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset('img/rural6.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="180">
            <div class="card-body">
              <p class="card-text">【福岡県芦屋町】先人たちの想いが息づく芦屋釜に魅せられ、金沢から遠く離れた芦屋へ【先輩移住者体験談】</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button onclick="location.href='{{ route('detail') }}'" type="button" class="btn btn-outline-secondary">READ MORE</button>
                </div>
                <small class="text-muted">2021/10/13</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
