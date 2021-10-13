@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="d-flex justify-content-between">
        <h1>ユーザー名</h1>
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
                <th style="width: 25%">日付</th>
                <th style="width: 20%">カテゴリー</th>
                <th style="width: 15%">編集/削除</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>こんにちは</td>
                <td>2020/8/28 10:15:20</td>
                <td>地域活性化</td>
                <td>
                    <form>
                        <span>
                        <button class="btn btn-outline-primary" type="button">編集</button>
                        <button class="delete-action btn btn-outline-danger" type="button" data-toggle="modal" data-target="#testModal">削除</button>
                        </span>
                    </form>
                </td>
              </tr>
                <tr>
                  <td>こんばんは</td>
                  <td>2020/8/28 10:15:20</td>
                  <td>地域活性化</td>
                  <td>
                      <form>
                          <span>
                          <button class="btn btn-outline-primary" type="button">編集</button>
                          <button class="delete-action btn btn-outline-danger" type="button" data-toggle="modal" data-target="#testModal">削除</button>
                          </span>
                      </form>
                  </td>
                </tr>
                <tr>
                  <td>こんにちは</td>
                  <td>2020/8/28 10:15:20</td>
                  <td>地域活性化</td>
                  <td>
                      <form>
                          <span>
                          <button class="btn btn-outline-primary" type="button">編集</button>
                          <button class="delete-action btn btn-outline-danger" type="button" data-toggle="modal" data-target="#testModal">削除</button>
                          </span>
                      </form>
                  </td>
                </tr>
              </tbody>
          </table>
     </div>
     <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
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
                <button onclick="location.href='{{ route('thankyou') }}'" type="button" class="btn btn-danger">削除</button>
            </div>
        </div>
    </div>
  </div>
@endsection
