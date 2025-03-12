@extends('layout.index')

@section('title')
Contact
@endsection


@section('main')

<main id="Contact">
    <!-- Start Register -->
    <section class="signup-section py-5">
        <div class="container">
            <div class="main-head text-center mb-5">
                <h1>{{ __('lang.Contact Us') }}</h1>
                <p class="text-muted">{{ __('lang.To contact us simply fill the form below.') }}</p>
                <p class="text-muted">
                    {{ __('lang.Please take a minute reading both our Faqs and our TOS before sending any messages regarding our services.') }}
                    <a href="./about-us.html" class="brief-link">Faqs</a>
                    {{ __('lang.and') }}
                    <a href="./tos.html" class="brief-link">TOS</a>
                </p>
            </div>
            <form method="POST" action="{{ route('message.store') }}" id="fruitkha-contact">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-user"></i>
                            <div class="form-group w-100">
                                <input type="text" name="user_name" class="form-control" placeholder="{{ __('lang.Username') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-envelope"></i>
                            <div class="form-group w-100">
                                <input type="email" name="email" class="form-control" placeholder="{{ __('lang.Email') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <div class="form-group w-100">
                                <textarea name="message" class="form-control" cols="30" rows="10" placeholder="{{ __('lang.Message') }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4 d-flex justify-content-center">
                        <button class="main-btn d-flex align-items-center justify-content-around" type="submit">
                            {{ __('lang.Send Message') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Register -->
</main>


@endsection
