@extends('layouts.admin.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            {{--<h3 class="text-gray-900 mb-0">{{ __('login.title') }}</h3>--}}
                            <img src="/img/logo.png" class="img-fluid login-logo px-3 pt-2" alt="logo" />
                        </div>
                        <div class="px-4 pb-4 pt-0">
                            <form method="POST" action="{{ route('admin.login') }}">
                                @csrf
                                <div class="form-group bmd-form-group">
                                    <input class="form-control {{ $errors->has('email') ? 'has-danger' : '' }}"
                                           name="email" id="email"
                                           required autocomplete="email" autofocus
                                           value="{{ old('email') ?: old('username') }}"
                                           placeholder="@lang('Email')">

                                    @if($errors->has('email'))
                                        <label id="login-error" class="error" for="email">
                                            {{ $errors->first('email')}}
                                        </label>
                                    @endif
                                </div>
                                <div class="form-group bmd-form-group">
                                    <input type="password" class="form-control {{ $errors->has('password') ? 'has-danger' : '' }}"
                                           name="password" id="password"
                                           required autocomplete="current-password"
                                           placeholder="@lang('Password')">

                                    @if($errors->has('password'))
                                        <label id="password-error" class="error" for="password">
                                            @foreach($errors->get('password') as $message)
                                                {{ $message }}
                                                @if(!$loop->last)
                                                    <br>
                                                @endif
                                            @endforeach
                                        </label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customCheck" name="remember"
                                            {{ old('remember') ? 'checked' : '' }}
                                        >
                                        <label class="custom-control-label" for="customCheck">@lang('Remember me')</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    @lang('Login')
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
