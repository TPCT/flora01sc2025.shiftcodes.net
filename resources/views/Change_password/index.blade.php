@extends('layout.account')

@section('title')
Change Password
@endsection


@section('main')


<main class="ChangePassword">
    <div class="container-fluid">
        <section class="signup-section py-4">
            <form action="{{ url('/change-password') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row ChangeEmailContiner">
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-eye"></i>
                            <div class="form-group w-100">
                                <input type="password" class="form-control" name="current_password" placeholder="{{ __('lang.Current password') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-eye"></i>
                            <div class="form-group w-100">
                                <input type="password" class="form-control" name="new_password" placeholder="{{ __('lang.New password') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="all-form">
                            <i class="fa-regular fa-eye"></i>
                            <div class="form-group w-100">
                                <input type="password" class="form-control" name="new_password_confirmation" placeholder="{{ __('lang.Retype New password') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <button class="main-btn d-flex align-items-center justify-content-around" type="submit">
                            {{ __('lang.Change Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</main>


@endsection
