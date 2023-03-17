@extends('layouts.app')

@section('content')
<div class="register-page">


    <div class="register-box">
        <div class="register-logo">
            <a href="#"><strong>Welcome</strong></a>
        </div>
        <div class="card register-card">
            <div class="card-body register-card-body">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12">

                            <div class="input-group mb-3">
                                <input type="text" id="username" name="username"
                                    class="form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}" required autocomplete="username"
                                    placeholder="Username" autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>

                            {{-- <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="input-group mb-3">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>

                            </div>

                            {{-- <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password"> --}}

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                    old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 m-3">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>


                            <!-- Button trigger modal -->
                            <button type="button" class="btn forgot-btn" data-toggle="modal"
                                data-target="#forgetPassword">
                                Forgot Your Password?
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="forgetPassword" tabindex="-1"
                                aria-labelledby="forgetPasswordLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="forgetPasswordLabel">Forgot Your Password?</h5>
                                            {{-- <button type="button" class="btn" data-dismiss="modal"
                                                aria-hidden="true" style="font-size: 20px;">x</button> --}}
                                        </div>
                                        <div class="modal-body">
                                            <span class="text-danger">Please contact your administrator to reset your
                                                password.</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection