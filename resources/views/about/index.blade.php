@extends('layout.index')

@section('title')
About_Us

@endsection


@section('main')

<main id="AboutUs">

    <!-- Start Know Section -->
    <section class="know-section py-5">
        <div class="container">
            <div class="main-head text-center">
                <h1>
                    {{ __('lang.FAQ') }}
                </h1>
            </div>
            <div class="row">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">

                                {{ __('lang.what is') }} XVideoSharing?

                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                XVideoSharing {{ __('lang.is a video hosting provider. We offer online storage, sophisticated uploading and video streaming tools') }}.
                                {{ __('lang.With') }} XVideoSharing {{ __('lang.you can host your videos and play them online from browser / mobile devices') }}.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">

                                {{ __('lang.why should i use') }} XVideoSharing?

                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                {{ __('lang.Whenever you need to share a video, XVideoSharing can help') }}.
                                {{ __('lang.We optimize quality / size of your videos and make them playable in web player') }}.
                                {{ __('lang.So you can start watching video quickly without downloading whole file') }}.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">

                                {{ __('lang.Can I search for files other people uploaded?') }}

                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                {{ __('lang.Yes, you can Search for other video files that were marked as Public') }}.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">

                                {{ __('lang.What kind of files can be uploaded?') }}

                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                {{ __('lang.All video format files') }}.
                                {{ __('lang.The only restrictions are for copyrighted material, pornography, nudity and any kind of offensive material') }}.
                                {{ __('lang.Please refer to our') }} <a class="linkColor" href="">{{ __('lang.TOS') }}</a>
                                {{ __('lang.for more info on XVideoSharing terms of service') }}.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">

                                {{ __('lang.How to delete a file I uploaded?') }}

                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                {{ __('lang.To delete a file you uploaded you can use Delete Link that was provided to you after the upload process or delete it from My Videos page') }}.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">

                                {{ __('lang.Can I hotlink the stuff I upload?') }}

                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                {{ __('lang.No. Hotlinking is not allowed on any kind of files uploaded to our servers') }}.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">

                                {{ __('lang.I still have questions!') }}

                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                {{ __('lang.Don\'t hesitate to contact us using our') }} <a class="linkColor" href="">{{ __('lang.contact form') }}</a>.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Know Section -->

</main>


@endsection
