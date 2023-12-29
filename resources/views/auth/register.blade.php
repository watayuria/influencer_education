@extends('layouts.app')

@section('content')
<div class="container text-muted">
    <div class="">
        <a class="d-block text-decoration-none text-muted text-end fs-4" href="{{ route('login') }}">ログインはこちら</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="display-3 text-center mt-5 mb-5">{{ __('新規会員登録') }}</div>

                <div class="mt-5 fs-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mt-3 mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ユーザーネーム') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control rounded-0 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3 mb-3">
                            <label for="name_kana" class="col-md-4 col-form-label text-md-end">{{ __('カナ') }}</label>

                            <div class="col-md-6">
                                <input id="name_kana" type="text" class="form-control rounded-0 @error('name_kana') is-invalid @enderror" name="name_kana" value="{{ old('name_kana') }}" required autocomplete="name_kana" autofocus>

                                @error('name_kana')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3 mb-3">
                            <label for="class_name" class="col-md-4 col-form-label text-md-end">{{ __('学年') }}</label>

                            <div class="col-md-6">
                                <select id="class_name" class="form-control @error('class_name') is-invalid @enderror" name="class_name" value="{{ old('class_name') }}" required autocomplete="class_name" autofocus>
                                    <option value=""></option>
                                    <option value="1">小学校1年生</option>
                                    <option value="2">小学校2年生</option>
                                    <option value="3">小学校3年生</option>
                                    <option value="4">小学校4年生</option>
                                    <option value="5">小学校5年生</option>
                                    <option value="6">小学校6年生</option>
                                    <option value="7">中学校1年生</option>
                                    <option value="8">中学校2年生</option>
                                    <option value="9">中学校3年生</option>
                                    <option value="10">高校1年生</option>
                                    <option value="11">高校2年生</option>
                                    <option value="12">高校3年生</option>
                                </select>

                                @error('class_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3 mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3 mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control rounded-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3 mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('パスワード確認') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control rounded-0" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mt-3 mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning text-light btn-lg rounded-0">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
