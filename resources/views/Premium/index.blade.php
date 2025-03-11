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
                <h1 class="text-center">Premium</h1>
                <p class="text-center">Choose the right plan for you</p>
            </div>
            <div class="premium-container">
                <div class="premium-list">

                    <form action="{{ route('stripe.checkout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan" value="30_days">
                        <div class="premium-block block">
                            <div class="fs-3">30 Days</div>
                            <div class="fs-1 text-muted">$9.99</div>
                            <hr>
                            <button type="submit" class="btn main-btn w-100 submit-btn">Try now</button>
                        </div>
                    </form>

                    <form action="{{ route('stripe.checkout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan" value="120_days">
                        <div class="premium-block block">
                            <div class="fs-3">120 Days</div>
                            <div class="fs-1 text-muted">$19.99</div>
                            <hr>
                            <button type="submit" class="btn main-btn w-100 submit-btn">Try now</button>
                        </div>
                    </form>

                    <form action="{{ route('stripe.checkout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan" value="180_days">
                        <div class="premium-block block">
                            <div class="fs-3">180 Days</div>
                            <div class="fs-1 text-muted">$29.99</div>
                            <hr>
                            <button type="submit" class="btn main-btn w-100 submit-btn">Try now</button>
                        </div>
                    </form>

                    <form action="{{ route('stripe.checkout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan" value="365_days">
                        <div class="premium-block block">
                            <div class="fs-3">365 Days</div>
                            <div class="fs-1 text-muted">$49.99</div>
                            <hr>
                            <button type="submit" class="btn main-btn w-100 submit-btn">Try now</button>
                        </div>
                    </form>

                </div>

                <div class="premium-block-five block">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="81">
                            <defs>
                                <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                                    <stop offset="0%" stop-color="#EC0043"></stop>
                                    <stop offset="100%" stop-color="#EC0083"></stop>
                                </linearGradient>
                            </defs>
                            <path fill="none"
                                d="M39.98 80.1c-3.872.001-7.743-1.348-10.903-4.044a11.865 11.865 0 0 0-6.808-2.824C13.994 72.568 7.51 66.075 6.85 57.789a11.918 11.918 0 0 0-2.821-6.82 16.787 16.787 0 0 1 0-21.84A11.92 11.92 0 0 0 6.85 22.31c.66-8.287 7.144-14.782 15.418-15.443a11.883 11.883 0 0 0 6.809-2.825 16.72 16.72 0 0 1 21.806.001 11.9 11.9 0 0 0 6.81 2.824c8.274.661 14.758 7.156 15.419 15.443a11.915 11.915 0 0 0 2.82 6.82 16.784 16.784 0 0 1 0 21.838 11.909 11.909 0 0 0-2.82 6.819c-.661 8.288-7.145 14.781-15.419 15.443a11.889 11.889 0 0 0-6.81 2.826A16.754 16.754 0 0 1 39.98 80.1Zm0-75.243a11.92 11.92 0 0 0-7.76 2.879 16.705 16.705 0 0 1-9.566 3.968c-5.89.47-10.506 5.094-10.975 10.992a16.765 16.765 0 0 1-3.962 9.581 11.947 11.947 0 0 0 0 15.545 16.756 16.756 0 0 1 3.962 9.58 11.926 11.926 0 0 0 10.975 10.993 16.688 16.688 0 0 1 9.566 3.967 11.894 11.894 0 0 0 15.52 0 16.708 16.708 0 0 1 9.568-3.968c5.889-.472 10.504-5.094 10.974-10.992a16.735 16.735 0 0 1 3.962-9.58 11.945 11.945 0 0 0 0-15.545 16.746 16.746 0 0 1-3.962-9.582c-.47-5.897-5.085-10.52-10.975-10.991a16.707 16.707 0 0 1-9.566-3.968 11.927 11.927 0 0 0-7.761-2.879ZM22.461 9.286h.012-.012Zm13.313 41.613a2.415 2.415 0 0 1-1.712-.71l-8.412-8.425a2.426 2.426 0 0 1 0-3.43 2.418 2.418 0 0 1 3.425 0l6.699 6.709 15.112-15.134a2.418 2.418 0 0 1 3.425 0 2.427 2.427 0 0 1 0 3.43l-16.824 16.85a2.415 2.415 0 0 1-1.713.71Z">
                            </path>
                            <path fill="url(#a)"
                                d="M39.98 80.1c-3.872.001-7.743-1.348-10.903-4.044a11.865 11.865 0 0 0-6.808-2.824C13.994 72.568 7.51 66.075 6.85 57.789a11.918 11.918 0 0 0-2.821-6.82 16.787 16.787 0 0 1 0-21.84A11.92 11.92 0 0 0 6.85 22.31c.66-8.287 7.144-14.782 15.418-15.443a11.883 11.883 0 0 0 6.809-2.825 16.72 16.72 0 0 1 21.806.001 11.9 11.9 0 0 0 6.81 2.824c8.274.661 14.758 7.156 15.419 15.443a11.915 11.915 0 0 0 2.82 6.82 16.784 16.784 0 0 1 0 21.838 11.909 11.909 0 0 0-2.82 6.819c-.661 8.288-7.145 14.781-15.419 15.443a11.889 11.889 0 0 0-6.81 2.826A16.754 16.754 0 0 1 39.98 80.1Zm0-75.243a11.92 11.92 0 0 0-7.76 2.879 16.705 16.705 0 0 1-9.566 3.968c-5.89.47-10.506 5.094-10.975 10.992a16.765 16.765 0 0 1-3.962 9.581 11.947 11.947 0 0 0 0 15.545 16.756 16.756 0 0 1 3.962 9.58 11.926 11.926 0 0 0 10.975 10.993 16.688 16.688 0 0 1 9.566 3.967 11.894 11.894 0 0 0 15.52 0 16.708 16.708 0 0 1 9.568-3.968c5.889-.472 10.504-5.094 10.974-10.992a16.735 16.735 0 0 1 3.962-9.58 11.945 11.945 0 0 0 0-15.545 16.746 16.746 0 0 1-3.962-9.582c-.47-5.897-5.085-10.52-10.975-10.991a16.707 16.707 0 0 1-9.566-3.968 11.927 11.927 0 0 0-7.761-2.879ZM22.461 9.286h.012-.012Zm13.313 41.613a2.415 2.415 0 0 1-1.712-.71l-8.412-8.425a2.426 2.426 0 0 1 0-3.43 2.418 2.418 0 0 1 3.425 0l6.699 6.709 15.112-15.134a2.418 2.418 0 0 1 3.425 0 2.427 2.427 0 0 1 0 3.43l-16.824 16.85a2.415 2.415 0 0 1-1.713.71Z">
                            </path>
                        </svg>
                    </div>
                    <div class="h3 mb-3">
                        Premium account includes:
                    </div>
                    <div class="premium-features">
                        <div>Priority Upload and Encoder</div>
                        <div>Custom Ads on Player</div>
                        <div>Unlimited Space</div>
                        <div>Unlimited Bandwidth</div>
                        <div>Remote URL upload</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Premium -->
</main>




@endsection
