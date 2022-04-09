@extends('layouts.master')

@section('body')
<body class="bg-dark">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-2">Basic Laravel CRM :: Login</h3></div>
                            <div class="card-body">
                                <form method="post" action="{{ route('login') }}" >
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" type="email" placeholder="name@example.com" required autofocus />
                                        <label for="inputEmail">Email address</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('password') is-invalid @enderror" id="inputPassword" name="password" type="password" placeholder="Password" required />
                                        <label for="inputPassword">Password</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" name="remember" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }} />
                                        <label class="form-check-label" for="inputRememberPassword">{{ __('Remember Me') }}</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                                    </div>
                                </form>
                            </div>
                            @if (Route::has('register'))
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    {{-- <div id="layoutAuthentication_footer">
        @include('partials.footer')
    </div> --}}
</div>
@endsection