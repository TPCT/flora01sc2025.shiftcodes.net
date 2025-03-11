@extends('layout.index')

@section('title')
EarnMoney
@endsection


@section('main')

<main id="Tos">
    <!-- Start Terms Of Service -->
    <section class="section earn py-5">
        <div class="container">
            <div class="text-center main-head mb-5">
                <h1>Earn money</h1>
                <div class="text-muted">
                    Profit rates for each 1000 views of your video
                </div>
            </div>
            <div class="mb-5 text-center">
                <img src="{{ asset('assets/map.png') }}" class="earn-map" alt="">
            </div>

            <div class="row mb-lg-5">
                @foreach($tiers as $tier)
                    <div class="col-sm-6 col-lg-3">
                        <div class="earn-tier block">
                            <div class="pb-2 mb-4 border-bottom">
                                <div class="row align-items-center">
                                    <div class="col-auto d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                            <path fill-rule="evenodd" fill="{{ $tier->color }}"
                                                  d="M7.5 0a7.5 7.5 0 1 1 0 15 7.5 7.5 0 0 1 0-15Z"></path>
                                        </svg>
                                        <span class="fs-3 ms-2">{{ $tier->name() }}</span>
                                    </div>
                                    <div class="col-auto ms-auto">
                                        <span class="fs-2 text-muted">
                                            ${{ $tier->price_per_1000_views }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="earn-list">
                                @foreach($tier->countries as $country)
                                    <div>{{ $country->name }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <div class="mb-5 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                        <path fill-rule="evenodd" fill="#8991AE" d="M7.5 0a7.5 7.5 0 1 1 0 15 7.5 7.5 0 0 1 0-15Z">
                        </path>
                    </svg>
                    Rates for all other countries: $3
                </div>
                <div class="mb-3">
                    <b class="brief-link fw-bold">Minimum payout: $25</b>
                    <br>Payouts are processed within 24 hours for Paypal and 24h for Crypto
                </div>
            </div>
        </div>
    </section>

    <!-- End Terms Of Service -->
</main>

@endsection
