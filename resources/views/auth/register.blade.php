@extends('layout.index')

@section('title', 'Register')

@section('main')

<main id="Register">
    <section class="signup-section py-5">
        <div class="container">
            <div class="main-head text-center mb-5">
                <h1>Register</h1>
                <p class="text-muted">{{ __('lang.Sign up for a new account.') }}</p>
            </div>

            <form action="{{'/register' }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-user"></i>
                            <div class="form-group w-100">
                                <input type="text" name="name" class="form-control" placeholder="{{ __('lang.Username') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-envelope"></i>
                            <div class="form-group w-100">
                                <input type="email" name="email" class="form-control" placeholder="{{ __('lang.Email') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-solid fa-lock"></i>
                            <div class="form-group w-100">
                                <input type="password" name="password" class="form-control" placeholder="{{ __('lang.Password') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-solid fa-lock"></i>
                            <div class="form-group w-100">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ ('lang.Confirm_Password') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <button class="main-btn d-flex align-items-center justify-content-around" type="submit">
                            {{ __('lang.Register') }}
                        </button>
                    </div>

                    <div class="col-lg-12 d-flex align-items-center mb-4">
                        <p class="mb-0">{{ __('lang.Already have an account') }}?
                            <a href="{{ route('login') }}" class="text-main-link">{{ __('lang.Login') }}</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

@endsection
