@extends('layout.index')

@section('title')
Premium

@endsection


@section('main')

<main id="Premium">
    <!-- Start Premium -->
    <section class="premium py-5">
        <div class="container">
            <div class="main-head">
                <h1 class="text-center">{{ __('lang.Premium') }}</h1>
                <p class="text-center">{{ __('lang.Choose the right plan for you') }}</p>
            </div>
            <div class="premium-container">
                <div class="premium-list">
                    @foreach ([
                        ['days' => 30, 'price' => '9.99'],
                        ['days' => 120, 'price' => '19.99'],
                        ['days' => 180, 'price' => '29.99'],
                        ['days' => 365, 'price' => '49.99'],
                    ] as $plan)
                        <form action="{{ route('stripe.checkout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="plan" value="{{ $plan['days'] }}_days">
                            <div class="premium-block block">
                                <div class="fs-3">{{ $plan['days'] }} {{ __('lang.Days') }}</div>
                                <div class="fs-1 text-muted">${{ $plan['price'] }}</div>
                                <hr>
                                <button type="submit" class="btn main-btn w-100 submit-btn">{{ __('lang.Try now') }}</button>
                            </div>
                        </form>
                    @endforeach
                </div>
                <div class="premium-block-five block">
                    <div class="h3 mb-3">{{ __('lang.Premium account includes:') }}</div>
                    <div class="premium-features">
                        <div>{{ __('lang.Priority Upload and Encoder') }}</div>
                        <div>{{ __('lang.Custom Ads on Player') }}</div>
                        <div>{{ __('lang.Unlimited Space') }}</div>
                        <div>{{ __('lang.Unlimited Bandwidth') }}</div>
                        <div>{{ __('lang.Remote URL upload') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Premium -->
</main>




@endsection
