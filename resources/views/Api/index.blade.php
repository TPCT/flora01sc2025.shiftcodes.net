@extends('layout.index')

@section('title')
Api
@endsection


@section('main')

<main id="Api">
    <!-- Start Api -->
    <section class="api py-5">
        <div class="container">
            <div class="alert bg-danger text-white fw-bold  ">
                {{ __('lang.API disabled') }}
            </div>
        </div>
    </section>
    <!-- End Api -->
</main>

@endsection
