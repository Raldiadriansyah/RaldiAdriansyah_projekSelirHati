@extends('layouts.sneat2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5" style="width: 500px">
            <div class="card">
                <div class="row justify-content-center mb-2">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2"><img
                                src="/sneat/assets/img/backgrounds/warkop.png" alt=""
                                style="width: 200px; margin: auto; margin-top: 22px"></span>
                        <br>
    
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email : ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password : ') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0" style="margin-left: 30px; margin-top: 20px">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="row mb-0" style="margin-right: 45px; margin-top: 10px">
                        <div class="col-md-8 offset-md-4">
                           <p>Belum memiliki akun? <a href="{{ route('register') }}">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
