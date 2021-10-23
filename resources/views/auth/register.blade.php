@extends('layouts.app')
@section('title','新規登録画面')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        {{-- 氏名 --}}
                        {{-- <div class="form-group row"> --}}
                        <div class="form-group">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('氏名') }}</label> --}}
                            <label for="name" class="col-md-4 col-form-label">{{ __('氏名') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- メールアドレス --}}
                        {{-- <div class="form-group row"> --}}
                        <div class="form-group">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label> --}}
                            <label for="email" class="col-md-4 col-form-label">{{ __('メールアドレス') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- 出身地 --}}
                        <div class="form-group">
                            <label for="birthplace" class="col-md-4 col-form-label">{{ __('出身地(都道府県)') }}</label>

                            <div class="col-md-12">
                                <input id="birthplace" type="text" class="form-control" name="birthplace" required autocomplete="street-address">
                            </div>
                        </div>

                        {{-- 投稿頻度 --}}
                        <div class="form-group">
                            <label for="frequency" class="col-md-4 col-form-label">{{ __('投稿頻度') }}</label>

                            <div class="ml-3">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="frequency" id="twice-a-week" value="週に2記事以上" checked>
                                <label for="twice-a-week" class="form-check-label">週に2記事以上</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="frequency" id="once-a-week" value="週に1記事">
                                <label for="once-a-week" class="form-check-label">週に1記事</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="frequency" id="twice-a-month" value="月に2記事">
                                <label for="twice-a-month" class="form-check-label">月に2記事</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="frequency" id="other" value="その他">
                                <label for="other" class="form-check-label">その他</label>
                            </div>
                            </div>
                        </div>

                        {{-- 発信したい情報 --}}
                        {{-- <div class="form-group row"> --}}
                        <div class="form-group">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('発信したい情報') }}</label> --}}
                            {{-- {{-- <label for="information" class="col-md-4 col-form-label">{{ __('発信したい情報') }}</label> --}}

                            <div class="ml-3">
                            <div class="form-check">
                                <input type="checkbox" name="information[]" class="form-check-input" id="" value="移住体験" checked>
                                <label for="" class="form-check-label">移住体験</label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" name="information[]" class="form-check-input" id="" value="地域の産品情報">
                                <label for="" class="form-check-label">地域の産品情報</label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" name="information[]" class="form-check-input" id="" value="観光情報">
                                <label for="" class="form-check-label">観光情報</label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" name="information[]" class="form-check-input" id="" value="その他">
                                <label for="" class="form-check-label">その他</label>
                              </div>
                            </div>
                        </div>

                        {{-- 現在の活動内容 --}}
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="col-md-4 col-form-label">{{ __('現在の活動内容') }}</label>
                            <div class="col-md-12">
                            <textarea name="activities" id="exampleFormControlTextarea1" class="form-control" placeholder="テキスト入力" rows="5"></textarea>
                            </div>
                        </div>

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> --}}

                         {{-- パスワード --}}
                        {{-- <div class="form-group row"> --}}
                            <div class="form-group">
                                {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label> --}}
                                <label for="password" class="col-md-4 col-form-label">{{ __('パスワード') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- 確認用パスワード --}}
                            {{-- <div class="form-group row"> --}}
                            <div class="form-group">
                                {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('確認用パスワード') }}</label> --}}
                                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('確認用パスワード') }}</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('登録') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
