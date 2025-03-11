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
                    <h1>Login</h1>
                    <p class="text-muted">Sign in to your account using your email and password.</p>
                </div>


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row">

                        <div class="col-lg-12 mb-4">
                            <div class="all-form">
                                <i class="fa-regular fa-envelope"></i>
                                <div class="form-group w-100">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
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
                                    <input type="password" name="password" class="form-control" placeholder="Password"
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
                                Login
                            </button>
                        </div>


                        <div class="col-lg-12 d-flex align-items-center mb-4">
                            <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                                    class="text-main-link">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Login -->
    </main>
@endsection
