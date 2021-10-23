@extends('layouts.app')

@section('content')


{{-- @foreach($posts as $post)
<img src="{{ Storage::url($post->image)}}" width="100px">
@endforeach --}}

<style>
input[type="file"] {
    display: none;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">編集画面</div>
                <div class="card-body">
                    <form action="{{route("management.update")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <div class="col-md-4">
                          <div class="form-group">
                            <div class="h5">タイトル</div>
                            <input name="title" type="text" class="form-control" id="formTitle" placeholder="○○文字以内" value="{{$post->title}}">
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
                                <div id="old_img">{{$post->img}}</div>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div class="form-group">
                                <div class="h5">本文</div>
                                <textarea name="body" class="form-control" id="formBody" rows="5">{{$post->body}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-4 mt-4">
                            <div class="form-group">
                            <div class="h5">タグ</div>
                            <select name="category" id="">
                                @foreach (config('post.category') as $key => $val)
                                <option value="{{$key}}" @if($key == $post->category) selected @endif>{{$val}}</option>
                                @endforeach
                            </select>
                            </div>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="card mb-4">
            <img src="{{ asset('img/rural1.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="auto">
        </div>
        <div class="card mb-4">
          <div class="card-body">
              <h3 class="card-title" id="modalTitle"></h3>
              <p class="card-text"><small class="text-muted">ユーザー名 | 2021/10/13</small></p>
          </div>
        </div>
        <p class="h5" id="modalBody"></p>
          <div class="text-right mr-2 mb-2">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">戻る</button>
            <button type="button" class="btn btn-outline-success" onclick="location.href='{{ route('post.store') }}'">更新</button>
            </div>
         </div>
       </div>
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


  $("#img").on("change", function(){
      var file = $(this).prop('files')[0];
      $('#old_img').text(file.name);
  });
});

</script>
@endsection
