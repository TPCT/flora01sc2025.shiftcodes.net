@extends('layout.index')

@section('title')
Terms Of Service
@endsection


@section('main')

<main id="Tos">
    <!-- Start Terms Of Service -->
    <section class="tos py-5">
        <div class="container">
            <div class="main-head mb-4">
                <h1 class="text-center">{{ __('lang.Terms Of Service') }}</h1>
            </div>
            <div class="block text-content">
                {{ __('lang.tos_intro') }}<br><br>

                {{ __('lang.tos_direct_linking') }}<br><br>

                {{ __('lang.tos_prohibited_content') }}<br><br>

                {{ __('lang.tos_copyright') }}<br><br>

                {{ __('lang.tos_liability') }}<br><br>

                {{ __('lang.tos_cooperation') }}
            </div>
        </div>
    </section>
    <!-- End Terms Of Service -->
</main>


@endsection
