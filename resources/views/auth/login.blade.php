@extends('layout.index')

@section('title')
    Login
@endsection

@section('main')
<main id="Login">
    <!-- Start Login -->
    <section class="signup-section py-5">
        <div class="container">
            <div class="main-head text-center mb-5">
                <h1>{{ __('lang.Login') }}</h1>
                <p class="text-muted">{{ __('lang.Sign_in_message') }}</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-envelope"></i>
                            <div class="form-group w-100">
                                <input type="email" name="email" class="form-control" placeholder="{{ __('lang.Email') }}"
                                    value="{{ old('email') }}" required>
                            </div>
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-solid fa-eye"></i>
                            <div class="form-group w-100">
                                <input type="password" name="password" class="form-control" placeholder="{{ __('lang.Password') }}"
                                    required>
                            </div>
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- 📌 التحقق من reCAPTCHA -->
                    <div class="col-lg-12 mb-4">
                        <div class="g-recaptcha" data-sitekey="XXXXXXXXXXXXX"></div>
                        @error('g-recaptcha-response')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-6 mb-4">
                        <button class="main-btn d-flex align-items-center justify-content-around" type="submit">
                            {{ __('lang.Login') }}
                        </button>
                    </div>

                    <div class="col-lg-12 d-flex align-items-center mb-4">
                        <p class="mb-0">{{ __('lang.No_Account') }} <a href="{{ route('register') }}"
                                class="text-main-link">{{ __('lang.Register') }}</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Login -->
</main>

@endsection
