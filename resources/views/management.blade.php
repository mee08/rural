@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="d-flex justify-content-between">
        <h1>{{ Auth::user()->name }}</h1>
        <div>
        <button onclick="location.href='{{ route('top') }}'"
         type="button" class="btn btn-outline-primary text-right">トップ</button>
        <button onclick="location.href='{{ route('post') }}'" type="button" class="btn btn-outline-success text-right">新規作成</button>
        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th style="width: 40%">タイトル</th>
                <th style="width: 25%">最終更新日時</th>
                <th style="width: 20%">カテゴリー</th>
                <th style="width: 15%">編集/削除</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        {{config("post.category")[$post->category]}}
                    </td>
                    <td>
                        <form>
                            <span>
                            <button class="btn btn-outline-primary" onclick="location.href='{{ route('management.edit' , $post->id) }}'" type="button">編集</button>
                            <button class="delete-action btn btn-outline-danger" type="button" data-toggle="modal" data-target="#testModal">削除</button>
                            </span>
                        </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
     </div>
     <div class="d-flex justify-content-end">
     {{ $posts->links('pagination::bootstrap-4') }}
    </div>
  </div>

  <!-- ボタン・リンククリック後に表示される画面の内容 -->
  <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">削除確認画面</h4>
            </div>
            <div class="modal-body">
                <label>データを削除しますか？</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                <button onclick="location.href='{{ route('management.delete', $post->id) }}'" type="button" class="btn btn-danger">削除</button>
            </div>
        </div>
    </div>
  </div>
@endsection
