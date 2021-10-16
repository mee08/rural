@extends('layouts.app')

@section('content')


{{-- @foreach($posts as $post)
<img src="{{ Storage::url($post->image)}}" width="100px">
@endforeach --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">編集画面</div>
                <div class="card-body">
                    <form action="{{route("management.update")}}" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label for="exampleFormControlInput1">タイトル</label>
                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="○○文字以内" value="{{$post->title}}">
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="exampleFormControlInput1">画像アップロード</label>
                                <div class="input-group">
                                <input type="text" class="form-control" readonly="">
                                <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Choose File<input id="image" type="file" name="image" style="display:none">
                                </span>
                                </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label for="exampleFormControlTextarea1">本文</label>
                                <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="5">{{$post->body}}</textarea>
                            </div>
                        </div>

                        <div>
                            <select name="category" id="">
                                @foreach (config('post.category') as $key => $val)
                                <option value="{{$key}}" @if($key == $post->category) selected @endif>{{$val}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary float-right" id="edit_btn" >送信</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="card mb-4">
            <img src="{{ asset('img/rural1.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="auto">
        </div>
        <div class="card mb-4">
          <div class="card-body">
              <h3 class="card-title">あなたと似た人がきっといる！十人十色の移住体験記 | 今週の気になる地方移住ニュースまとめ</h3>
              <p class="card-text"><small class="text-muted">ユーザー名 | 2021/10/13</small></p>
          </div>
        </div>
        <p class="h5">国内の林業が注目されている2021年。高知県の仁淀川流域は林業が盛んで、佐川町と仁淀川町では、それぞれ町の手厚い研修制度が整っています。
          林業は「木を伐採する」イメージが強くありますが、仕事はそれだけではありません。山を育てたり、子どもたちに木の大切さを啓蒙したり…と、地域と密接に関わって仕事をしています。
          今回のイベントでは、実際に移住して林業に携わった２名をゲストに招いて、具体的な仕事内容や町が全面バックアップする研修制度についてお話ししてもらいます。
          自然のなかで働くことや一次産業に興味がある方、この機会に先輩移住者の話を聞いてみませんか？

          ＼＼こんな方におすすめ！／／
          ・林業の仕事や、研修制度について知りたい方
          ・自然のなかで体を動かして働きたい方
          ・仁淀川流域について知りたい方
          ・この地域の先輩移住者から直接アドバイスを受けたい方　など

          ゲストは、現役林業従事者の村澤友輔さん＆川手功司さん！
          【ゲスト】村澤友輔（むらさわ・ゆうすけ）さん
          1992年生まれ。前職は医療機器メーカーの営業をしていたが、転職を検討中に佐川町の林業の求人募集を見つけ、自伐型林業の地域おこし協力隊に応募。2019年4月に佐川町へ移住。現在は公務内外で林業の施業を行うほか、自伐協力隊員と2人組ユニット「ringin（リンジン）」としても活動中。

          （一言メッセージ）
          営業の仕事から転職して、個人事業主として働ける林業を選びました。いまは地域おこし協力隊として林業に携わるほか、休日には個人で山を請け負って、協力隊卒業後を見据えた仕事もしています。
          これからは「木育（もくいく）」として、例えば木工制作やツリークライミングなどを通じて、木の魅力や林業の魅力を伝えていきたいですね。将来的に、子どもたちが林業を仕事の選択肢の一つとして考えるようになってくれたら嬉しいです。
          オンラインイベントでは、佐川町の林業研修制度や地域おこし協力隊についてもお話しする予定です。ざっくばらんにたくさん質問してください！
          </p>
          <div class="text-right mr-2 mb-2">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">戻る</button>
            <button type="button" class="btn btn-outline-success" onclick="location.href='{{ route('post.store') }}'">送信</button>
            </div>
         </div>
       </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
window.addEventListener('DOMContentLoaded', function(){
});
</script>
@endsection
