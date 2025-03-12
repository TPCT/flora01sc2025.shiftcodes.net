@extends('layout.account')

@section('title')
Change Email
@endsection


@section('main')

<main class="ChangeEmail">
    <div class="container-fluid">
        <section class="signup-section py-4">
            <form action="{{ route('change.email') }}" method="POST">
                @csrf
                <div class="row ChangeEmailContiner">
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-envelope"></i>
                            <div class="form-group w-100">
                                <input type="text" name="current_email" class="form-control" placeholder="{{ __('lang.Current email') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-envelope"></i>
                            <div class="form-group w-100">
                                <input type="email" name="new_email" class="form-control" placeholder="{{ __('lang.New email') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-envelope"></i>
                            <div class="form-group w-100">
                                <input type="email" name="confirm_email" class="form-control" placeholder="{{ __('lang.Retype new email') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="g-recaptcha" data-sitekey="XXXXXXXXXXXXX"></div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <button class="main-btn d-flex align-items-center justify-content-around" type="submit">
                            {{ __('lang.Change email address') }}
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</main>


@endsection
