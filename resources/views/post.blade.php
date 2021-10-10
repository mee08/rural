@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">投稿画面</div>
                <div class="card-body">
                    <form>
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="exampleFormControlInput1">File</label>
                                <div class="input-group">
                                <input type="text" class="form-control" readonly="">
                                <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Choose File<input type="file" style="display:none">
                                </span>
                                </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group row">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
