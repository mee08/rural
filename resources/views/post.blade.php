@extends('layouts.app')
@section('title','投稿画面')
@section('content')

<style>
input[type="file"] {
    display: none;
}
#modalBody {
  white-space: pre-wrap;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">投稿画面</div>
                <div class="card-body">
                    <form action="{{route("post.store")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-4">
                          <div class="form-group">
                            <div class="h5">タイトル</div>
                            <input name="title" type="text" class="form-control" id="formTitle" placeholder="○○文字以内">
                          </div>
                        </div>

                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <div class="h5">画像アップロード
                                <input type="file" class="form-control-file" id="img" name="imgpath">
                                <label for="img" class="btn btn-secondary btn-sm">
                                ファイルを選択
                                </label>
                                </div>
                                <div id="old_img">選択されていません</div>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div class="form-group">
                                <div class="h5">本文</div>
                                <textarea col=5&gt name="body" class="form-control" id="formBody" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="col-md-4 mt-4">
                            <div class="form-group">
                            <div class="h5">タグ</div>
                            <select name="category" id="">
                                @foreach (config('post.category') as $key => $val)
                                <option value="{{$key}}">{{$val}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="text-right">
                        <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal">プレビュー</button>
                        <button type="submit" class="btn btn-lg btn-primary" id="modal_btn" >送信</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" style="background-color: #F8FAFC">
            <div class="card mb-4">
                <img id="img1" style="width:100%;height:auto;">
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title" id="modalTitle"></h3>
                    <p class="card-text"><small class="text-muted">ユーザー名 | 投稿日</small></p>
                </div>
            </div>
                <p class="h5" id="modalBody"></p>
            <div class="text-right mr-2 mb-2">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">戻る</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
window.addEventListener('DOMContentLoaded', function(){
$('#exampleModal').on('show.bs.modal', function () {
    var title = $('#formTitle').val()
    var body = $('#formBody').val()
    var modal = $(this)
    modal.find('#modalTitle').text(title)
    modal.find('#modalBody').text(body)
  });

$('#img').change(function(e){
    //ファイルオブジェクトを取得する
    var file = e.target.files[0];
    var reader = new FileReader();

    //画像でない場合は処理終了
    if(file.type.indexOf("image") < 0){
      alert("画像ファイルを指定してください。");
      return false;
    }

    //アップロードした画像を設定する
    reader.onload = (function(file){
      return function(e){
        $("#img1").attr("src", e.target.result);
        $("#img1").attr("title", file.name);
      };
    })(file);
    reader.readAsDataURL(file);
});

$("#img").on("change", function(){
    var file = $(this).prop('files')[0];
    $('#old_img').text(file.name);
  });
});
</script>
@endsection
